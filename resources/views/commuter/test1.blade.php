<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Google Fonts Link -->
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- Line Awesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/seat.css')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('import_commuter/assets/images/apple-touch-icon.png')}}"/>
    <link rel="mask-icon" href="{{asset('import_commuter/assets/images/safari-pinned-tab.svg')}}" color="#5bbad5"/>
    <link rel="manifest" href="{{asset('import_commuter/assets/site.webmanifest')}}">
    <!-- end of icons  -->
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/bootstrapValidator.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/jquery.seat-charts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link href="{{asset('import_commuter/assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('import_commuter/assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/material.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/plugins/lobibox/css/lobibox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/simplelightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/seat.css')}}">
     </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <h1>           
                    <img src="{{asset('import_commuter/assets/images/main logo.png') }}" class="nav-img" alt="logo">
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                    <li class="a-list">
                        <a class="nav-link" href="/commuter">Book</a>
                    </li>
                    <li class="a-list">
                        <a class="nav-link" href="/explore">Explore</a>
                    </li>
                    <li class="a-list">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="a-list">
                        <a class="nav-link" href="/help">Help & Support</a>
                    </li>
                    <li class="nav-item1">
                        <button class="btn btn-outline-warning my-2 my-sm-0 ml-3" type="submit">Login</button>
                    </li>
                    <li class="nav-item2">
                        <button class="btn btn-outline-warning my-2 my-sm-0 ml-2" type="submit">Sign Up</button>
                    </li>
 
                </ul>
            </div>
        </div>
    </nav>
<div>
    @if ($errors->any())
        <div>
             Something went wrong
        </div>
        <ul>
            @foreach ($errors->all() as $error )
                <li>
                    {{ $error }}
                </li>
                
            @endforeach
        </ul>
    @endif
</div>

    <div class="main-container">
      <div class="radio-buttons">
        <form action="{{ url('/commuter/details') }}" method="POST" enctype="multipart/form-data" id="booking-form">

        @csrf
          <div class = "row1">
            <label class="custom-radio">
              <input type="checkbox" name="seats[]" value="1">      
              <span class="radio-btn">
                <div class="hobbies-icon">
                  <h3>1</h3>
                </div>
              </span>
            </label>
          </div>
          
          <div class ="row2-container">
            <div class = "row2">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="2" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>2</h3>
                  </div>
                </span>
              </label>
            </div>

            <div class = "row2">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="3" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>3</h3>
                  </div>
                </span>
              </label>
            </div>

            <div class = "row2">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="4" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>4</h3>
                  </div>
                </span>
              </label>
            </div>
          </div>

          <div class = "row3-container">
            <div class = "row3">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="5" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>5</h3>
                  </div>
                </span>
              </label>
            </div>

            <div class = "row3">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="6" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>6</h3>
                  </div>
                </span>
              </label>
            </div>

            <div class = "row3">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="7" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>7</h3>
                  </div>
                </span>
              </label>
            </div>
          </div>

          <div class = "row4-container">
            <div class = "row4">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="8" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>8</h3>
                  </div>
                </span>
              </label>
            </div>

            <div class = "row4">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="9" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>9</h3>
                  </div>
                </span>
              </label>
            </div>

            <div class = "row4">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="10" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>10</h3>
                  </div>
                </span>
              </label>
            </div>
          </div>

          <div class = "row5-container">
            <div class = "row5">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="11" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>11</h3>
                  </div>
                </span>
              </label>
            </div>

            <div class = "row5">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="12" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>12</h3>
                  </div>
                </span>
              </label>
            </div>

            <div class = "row5">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="13" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>13</h3>
                  </div>
                </span>
              </label>
            </div>

            <div class = "row5">
              <label class="custom-radio">
                <input type="checkbox" name="seats[]" value="14" >   
                <span class="radio-btn">
                  <div class="hobbies-icon">
                    <h3>14</h3>
                  </div>
                </span>
              </label>
            </div>
          </div>

          <div class="row no-gutters">
            <div class="col-lg-8 col-xl-6 col-sm-8 col-md-7">
              <div id="seat-map">
              </div>
            </div>
            <div class="col-lg-4 col-xl-6 col-sm-4 col-md-5">
              <div class="booking-details">
                <h2 class="header">Booking Details
                  <span class="number_plate badge badge-primary fs-12"></span></h2>
                  <h3> Selected Seats <span id="counter">0</span>:</h3>
                  <ul id="selected-seats"></ul>
                  <p>Total: <b><span id="total">0</span> PhP</b></p>
                  <br>
              </div>
            </div>
          </div>
          
          <button type="submit" class="btn btn-circle book_btn"> Select Seat </button>
        </form>
      </div>
    </div>
    
  </body>
  <script type="text/javascript " src="{{asset('import_commuter/assets/js/jquery.min.js ') }}"></script>
  <script type="text/javascript " src="{{asset('import_commuter/assets/js/popper.min.js ') }}"></script>
  <script type="text/javascript " src="{{asset('import_commuter/assets/js/bootstrap.min.js ') }}"></script>
  <script type="text/javascript " src="{{asset('import_commuter/assets/js/bootstrapValidator.js') }}"></script>
  <script type="text/javascript " src="{{asset('import_commuter/assets/js/jquery-easing.min.js ') }}"></script>
  <script type="text/javascript " src="{{asset('import_commuter/assets/js/jquery.nice-select.js ') }}"></script>
  <script type="text/javascript " src="{{asset('import_commuter/assets/js/jquery.seat-charts.js ') }}"></script>
  <script type="text/javascript" src="{{asset('import_commuter/assets/js/simple-lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('import_commuter/assets/plugins/lobibox/js/lobibox.min.js') }}"></script>
  <script type="text/javascript" src = "{{asset('import_commuter/assets/js/val.js') }}"></script>
  <!--<script type="text/javascript" src = "{{asset('import_commuter/assets/js/script.js') }}"></script> -->
<script>
  function filterTrips() {
    var routeId = document.getElementById("route-select").value;
    var tripElements = document.querySelectorAll("#results .bus-details");
    var selectedDate = document.getElementById("date").value;
    var noTripElement = document.getElementById("no-trip");

    var tripFound = false;
    tripElements.forEach(function (element) {
    var tripDate = element.getAttribute("data-date");
    if (element.getAttribute("data-route-id") == routeId && tripDate == selectedDate) {
        element.closest("#results").style.display = "block";
        var tripFound = true;
    } else {
        element.closest("#results").style.display = "none";
    }
  });
    if (!tripFound) {
    noTripElement.style.display = "block";
  } else {
    noTripElement.style.display = "none";
  }
    } 
</script>

<script>
  
let economy_price = 500;
let firstSeatLabel = 1;
var details = [];

var $cart = $('#selected-seats'),
    $counter = $('#counter'),
    $total = $('#total');

// Update seat structure to use checkbox buttons
var sc = $('input[type="checkbox"]').on('change', function() {
    let $this = $(this);
    let $label = $this.closest('.custom-radio');
    let seatId = $this.val();
    let seatPrice = economy_price;
    let seatLabel = $label.find('h3').text();

    if ($this.is(':checked')) {
        if ($label.hasClass('selected')) {
            // Seat is already selected, uncheck and disable the radio button
            $this.prop('checked', false);
            $this.prop('disabled', true);
        } else {
            $label.addClass('selected');
            $label.find('.radio-btn').addClass('animated rubberBand');

            // Add selected seat to cart
            $('<li class="p-b-4">Seat # ' + seatId + ': \xa0 <b>₱  ' + seatPrice + '\xa0\xa0\xa0\xa0\xa0\xa0' +
                '</b> <a href="javascript:void(0);"' +
                ' class="cancel-cart-item btn btn-danger btn-sm"><i class="fa fa-trash"></i> Cancel </a></li>')
                .attr('id', 'cart-item-' + seatId)
                .data('seatId', seatId)
                .appendTo($cart);

            $counter.text(sc.filter(':checked').length);
            $total.text(recalculateTotal(sc));

            details.push({
                ['seatNo']: seatLabel,
                ['price']: seatPrice
            });
        }

        return 'selected';
    } else {
        $label.removeClass('selected');
        $label.find('.radio-btn').removeClass('animated rubberBand');

        // Remove deselected seat from cart
        $('#cart-item-' + seatId).remove();

        // Update counter and total
        $counter.text(sc.filter(':checked').length);
        $total.text(recalculateTotal(sc));

        // Remove deselected seat from details array
        var filtered = details.filter(function(item) {
            return item.seatNo != seatLabel;
        });
        details = filtered;

        // Enable the radio button for deselected seat
        $this.prop('disabled', false);

        return 'available';
    }
});

let recalculateTotal = sc => {
    var total = parseFloat('0');

    // Iterate through selected seats and calculate total price
    sc.filter(':checked').each(function() {
        total += economy_price;
    });

    return '₱ ' + total;
}

// Handle cancel item click
$('#selected-seats').on('click', '.cancel-cart-item', function() {
    let $item = $(this).parents('li:first');
    let seatId = $item.data('seatId');

    $('#cart-item-' + seatId).removeClass('animated rubberBand');
    sc.filter('[value="' + seatId + '"]').prop('checked', false).prop('disabled', false).change();
});

</script>

</html>
