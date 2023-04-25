         //////////////
 // seat map //
 //////////////
 //let vip_price = 1500;
 let economy_price = 500;
 let firstSeatLabel = 1;
 var details = [];
 
 var $cart = $('#selected-seats'),
     $counter = $('#counter'),
     $total = $('#total'),
     sc = $('#seat-map').seatCharts({
        map: [
            '___e',
            'eee_',
            'eee_',
            'eee_',
            'eeee',
     ],
         seats: {
             e: {
                 price: economy_price,
                 classes: 'economy-class', //your custom CSS class
                 category: '\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0'
             }

         },
         naming: {
             top: false,
             getLabel: function(character, row, column) {
                 return firstSeatLabel++;
             },
         },
         // legend: {
         //     node: $('#legend'),
         //     items: [
         //         ['f', 'available', 'First Class'],
         //         ['e', 'available', 'Economy Class'],
         //         ['f', 'unavailable', 'Already Booked']
         //     ]
         // },
         click: function() {
             if (this.status() == 'available') {
                 $(event.target).toggleClass('animated rubberBand')
                 //let's create a new <li> which we'll add to the cart items
                 $('<li class="p-b-4">' + this.data().category  + '• \xa0\xa0 Seat # \xa0' + 
                         this.settings.label + ': \xa0 <b>₱  ' + this.data().price + '\xa0\xa0\xa0\xa0\xa0\xa0' + 
                         '</b> <a href="javascript:void(0);"' +
                         ' class="cancel-cart-item btn btn-danger btn-sm"><i class="fa fa-trash"></i> Cancel </a></li>' ) 
                     .attr('id', 'cart-item-' + this.settings.id)
                     .data('seatId', this.settings.id)
                     .appendTo($cart);

                 /*
                  * Lets update the counter and total
                  *
                  * .find function will not find the current seat, because it will change its stauts only after return
                  * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                  */ 
                 $counter.text(sc.find('selected').length + 1);
                 $total.text(recalculateTotal(sc) + this.data().price);
                 details.push({
                     ['seatNo']: this.settings.label,
                     ['price']: this.data().price
                 });

                 return 'selected';
             } else if (this.status() == 'selected') {
                 $(event.target).toggleClass('animated rubberBand')
                 //update the counter
                 $counter.text(sc.find('selected').length - 1);
                 //and total
                 $total.text(recalculateTotal(sc) - this.data().price);

                 //remove the item from our cart
                 $('#cart-item-' + this.settings.id).remove();
                 no = this.settings.label;
                 var filtered = details.filter(function(item) {
                     return item.seatNo != no;
                 });
                 details = filtered;

                 //seat has been vacated
                 return 'available';
             } else if (this.status() == 'unavailable') {
                 //seat has been already booked
                 return 'unavailable';
             } else {
                 return this.style();
             }
         }
     });

let recalculateTotal = sc => {
    //var total = 0;
    var total = parseFloat('0');

    //basically find every selected seat and sum its price
    sc.find('selected').each(function() {
        total += this.data().price;
    });

    return total;
}
//this will handle "[cancel]" link clicks
$('#selected-seats').on('click', '.cancel-cart-item', function() {
    $('#'+sc.get($(this).parents('li:first').data('seatId')).settings.id)
        .toggleClass('animated rubberBand');
    //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
    sc.get($(this).parents('li:first').data('seatId')).click();
});

let booked_seats = function(bus_id) {
   
};

function bookSeats() {
    $.ajax({
      type: "POST",
      url: "https://yourserver.com/bookseats",
      data: JSON.stringify(details),
      contentType: "application/json",
      success: function(response) {
        console.log("Seats booked successfully");
        console.log(response);
      },
      error: function(xhr, status, error) {
        console.error("Error booking seats: ", error);
      }
    });
  }