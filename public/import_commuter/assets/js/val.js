$('select').niceSelect();

//jQuery time
var current_fs, next_fs, previous_fs, busId=0,seatsArray = []; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
let currentFieldset = 0;
const fieldsets = document.querySelectorAll('fieldset');
const nextButton = document.querySelector('.next_button');
const prevButton = document.querySelector('.previous_button');

// Show the first fieldset
fieldsets[currentFieldset].classList.add('active');

$(".next_button").on('click', function(event) {

    if (animating) return false;
    animating = true;

    current_fs = $(this).parent().parent();
    next_fs = current_fs.next();

    if ($("fieldset").index(next_fs) == 1) {
        $('span.from').text($('select.from').val());
        $('span.to').text($('input.to').val());
        
        var from = document.getElementById("route-select");
        var date = document.getElementById("date");
        if (from.value == "" || date.value == "") {
            animating = false;
            Lobibox.notify('error', {
                showClass: 'fadeInDown',
                hideClass: 'fadeUpDown',
                iconSource: 'fontAwesome',
                title: "SELECT DATE AND ROUTE ",
                continueDelayOnInactiveTab: true,
                size: 'mini',
                msg: 'Date and Route cannot be empty'
            });
            e.preventDefault(); // prevent form submission
        }
    }

    if ($("fieldset").index(current_fs) == 2) {
        
        goNext(next_fs, current_fs)
        seatsArray.splice(0,seatsArray.length);
        sc.find('selected').each(function() {
            seatsArray.push(this.settings.label)
        });
        
    } 

    else if ($("fieldset").index(current_fs) == 3) {
        
        if (!verifyInfoForm()) {

        } else {
            goNext(next_fs, current_fs)
            $('span.show-email').text($('input[name="email"]').val());
        }
    } 
    
    else {
        goNext(next_fs, current_fs)
    
    }
    
});

$(".book_btn").on('click', function(event) {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parents('fieldset');
    next_fs = current_fs.next();

    goNext(next_fs, current_fs);
});

$(".previous_button").click(function() {

    current_fs = $(this).parent().parent();

    previous_fs = current_fs.prev();

    if ($("fieldset").index(previous_fs) == 2) {
        booked_seats(busId);
        setInterval( booked_seats(busId),3000);
    }

    //de-activate current step on progressbar
    if (previous_fs.length > 0) {
        if (animating) return false;
        animating = true;
        $("#progressbar li ").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {

            duration: 100,
            complete: function() {
                current_fs.hide();
                previous_fs.css('opacity', 1);
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    }
});

function goNext(next_fs, current_fs) {
    $("#progressbar li ").eq($("fieldset").index(next_fs)).addClass("active");
    //show the next fieldset
    next_fs.show();

    current_fs.animate({
        opacity: 0
    }, {
        duration: 10,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
}

function verifyInfoForm() {
    let name = $('input[name="name"]'),
        id = $('input[name="id"]'),
        phone = $('input[name="phone"]'),
        email = $('input[name="email"]'),
        nameRegexp = /^[a-zA-Z]+\s+[a-zA-Z\s]+$/,
        idRegexp = /^[A-Z]\d{2}-\d{2}-\d{6}$/,
        emailRegexp = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
        phoneRegexp = /^(09|\+639)\d{9}$/,
        isValid = []
    if ($.trim(name.val()) == '') {
        name.addClass('is-invalid')
        name.parent().find('small.text-danger').remove()
        name.parent().append('<small class="text-danger">Name field cannot be empty</small>')
        isValid['name'] = false;
    } else if (!nameRegexp.test($.trim(name.val()))) {
        name.addClass('is-invalid')
        name.parent().find('small.text-danger').remove()
        name.parent().append('<small class="text-danger">Full name can only consist of alphabetical and atlest two names.</small>')
        isValid['name'] = false;
    } else {
        name.removeClass('is-invalid')
        name.addClass('is-valid')
        name.parent().find('small.text-danger').remove();
        isValid['name'] = true;
    }

    // phone no

    if ($.trim(phone.val()) == '') {
        phone.addClass('is-invalid')
        phone.parent().find('small.text-danger').remove()
        phone.parent().append('<small class="text-danger">Phone No field cannot be empty</small>')
        isValid['phone'] = false;
    } else if (!phoneRegexp.test($.trim(phone.val()))) {
        phone.addClass('is-invalid')
        phone.parent().find('small.text-danger').remove()
        phone.parent().append('<small class="text-danger">Please provide a valid phone number.</small>')
        isValid['phone'] = false;
    } else {
        phone.removeClass('is-invalid')
        phone.addClass('is-valid')
        phone.parent().find('small.text-danger').remove();
        isValid['phone'] = true;
    }
    // email
    if ($.trim(email.val()) == '') {
        email.addClass('is-invalid')
        email.parent().find('small.text-danger').remove()
        email.parent().append('<small class="text-danger">Email field cannot be empty</small>')
        isValid['email'] = false;
    } else if (!emailRegexp.test($.trim(email.val()))) {
        email.addClass('is-invalid')
        email.parent().find('small.text-danger').remove()
        email.parent().append('<small class="text-danger">Please provide a valid email address.</small>')
        isValid['email'] = false;
    } else {
        email.removeClass('is-invalid')
        email.addClass('is-valid')
        email.parent().find('small.text-danger').remove();
        isValid['email'] = true;
    }

    return Object.values(isValid).every(function (value) {
        return value == true;
    });
}

$('ul#progressbar').on('click', 'li', function(event) {
    let i = $('#progressbar li').index(this)
    let j = $('#progressbar').find('li.active').length - 1

    if (i > j) {
        if (j == 1) {
            Lobibox.notify('error', {
                showClass: 'fadeInDown',
                hideClass: 'fadeUpDown',
                iconSource: 'fontAwesome',
                // img: 'images/logo-96.png',
                title: "No Van Selected!",
                continueDelayOnInactiveTab: true,
                size: 'mini',
                msg: 'Please select a van first which you want to book.'
            });
        }else{
            $("fieldset").eq(j).find('.next_button').trigger('click')
        }
    }else if (i < j) $("fieldset").eq(j).find('.previous_button').trigger('click')

});
