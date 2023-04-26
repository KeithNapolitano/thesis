<!DOCTYPE html>
<html>

<head>
    <!-- //for-mobile-apps -->
    <title>siGO</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/seat.css')}}">
 
    <!-- end of css -->
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
    <!-- </navbar -->
    <!-- main content -->
    <main class="col-md-12">
        <div class="col-md-11 col-lg-9 col-xl-8 mx-auto window">
            <section class="stepper">
                <!-- progressbar -->
                <ul id="progressbar" style="padding-inline-start:8px;">
                    <li class="active">Destination and Schedule</li>
                    <li>Available Trips</li>
                    <li>Book Seat</li>
                    <li>Details</li>
                    <li>Payment</li>
                    <li>Ticket</li>
                </ul>
            </section>
            <section class="body">
                <div id="date_form">
                    <fieldset class="main_container" active>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>From</label>
                                <input type="text" class="form-control to" name="to" value="Davao City" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>To</label>
                                <select id="route-select" class="form-control from" name="from" placeholder="Select a route" required onchange="filterTrips()">
                                <option value=""disabled selected>Select Route</option>
                                @foreach ($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->descr }}</option>
                                @endforeach
                                </select>
                            </div>  
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Date of travel</label>
                                <input type="date" class="form-control" id="date" name="date" required onchange="filterTrips()">
                            </div>
                        </div>
                        <div class="row justify-content-center buttons">
                        <button type="button" class="btn next_button">Search Trips</button>
                        </div>
                    </fieldset>
                    <fieldset class="animated fadeIn">
                    @foreach ($trips as $trip)
                        <div id="results">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3 bus-image">
                                                    <img src="{{asset('import_commuter/assets/images/van.jpg') }}" alt="bus" height="130" width="130">
                                                </div>
                                                <div class="col-md-8 bus-details" data-route-id="{{ $trip->route->id }}" data-date="{{ $trip->dates }}">
                                                    <h5 class="card-title bus-name">{{$trip->van_plate}}</h5>
                                                    <div class="row card-text m-b-10 bus-description">
                                                        <div class="col-md-6 fs-14">
                                                            <i class="fa fa-users" style="font-size: 13px;"></i> No. of Passengers (Real time): <span class="psngr" style="font-size: 15px;"> 13 </span>
                                                        </div>
                                                        <div class="col-md-6 fs-14">
                                                            <i class="fa fa-id-card-o"></i> Driver:
                                                            <span class="drive" style="font-size: 15px;">{{$trip->driver_name}}</span> 
                                                        </div>
                                                        <div class="col-md-6 fs-14">
                                                            <i class="material-icons" style="font-size: 13px;">event_seat</i> Availability:
                                                            <span class="avail" style="font-size: 13.5px;">2 seat/s left </span>
                                                        </div>
                                                        <div class="col-md-6 fs-14">
                                                            <i class="fa fa-road"></i> Route:
                                                            <span class="rte" style="font-size: 12px;"><span class="to" style="font-size: 15px;"></span> - {{$trip->route->descr}} </span>
       
                                                        </div>
                                                        <div class="col-md-6 fs-14">
                                                            <i class="fa fa-money"></i> Fare:
                                                            <span class="fare" style="font-size: 14px;">{{ $trip->route->fare }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="p-t-13">
                                                    <a class="btn btn-circle book_btn">Book Seats</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                        <div id="no-trip"></div>
                        <div class="row justify-content-center buttons">
                            <button type="button" class="btn previous_button">Back</button>
                        </div>
                    </fieldset>
                    <!-- seat map -->
                    <fieldset class="animated fadeIn">
                    <div class="main-container">
                        <div class="radio-buttons">
                            <form action ="{{ route('commuter.processRoutes') }}" method="POST" enctype="multipart/form-data" id="booking-form">
                            @csrf
                            
                            <div class = "row1">
                                <label class="custom-radio">
                                <input type="checkbox" name="seats[]" value="1" >      
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
                            <button type="submit" class="btn btn-circle book_btn1 book_btn"> Select Seat </button>
                            </form>
                        </div>
                        </div>
                    </fieldset>
                    <!-- END SEAT MAP -->
                    <!-- PERSONAL INFO -->
                    <fieldset class="main_container" >
                        <div class="form-row">
                            <div class="form-group col-md-6" >
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" style = "width: 400px; " name="name" placeholder="John Doe" onkeyup="verifyInfoForm()" id="name">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" style = "margin-top: -88px; margin-left: 460px;">
                                    <label for="phone">Mobile No.</label>
                                    <input type="text" class="form-control" id="phone" name="phone" id="phone" placeholder="0912345678" onkeyup="verifyInfoForm()">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" style = "width: 400px;" id="email" name="email" placeholder="john@doe.com" onkeyup="verifyInfoForm()">
                                </div>
                            </div>
                            <div class="form-group col-md-6" style = "margin-top: -88px; margin-left: 460px;">
                                <label for="id">ID No.</label>
                                <input type="text" class="form-control" id="id" name="id" placeholder="G11-11-004061">
                            </div>
                            <div class="reminder">
                                <p class="reminder">Note: The ID number you entered must be the same to the one that you will present in the terminal.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center buttons">
                            <button type="button " class="btn previous_button">Back</button>
                            <button type="button " class="btn next_button">Continue</button>
                        </div>
                    </fieldset>
                    <!-- END PERSONAL INFO -->
                    <!-- PAYMENT -->
                    <fieldset class="animated fadeIn p-info">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <h6>
                                    Please send your money to <b>Chester Tadle</b>
                                    <span class="note">Note: If you havent made a deposit, your reservation will be cancelled.</span>
                                </h6>
                            </div>
                        </div>
                        <div class="row justify-content-center buttons">
                            <button type="button " class="btn previous_button">Back</button>
                            <button type="button " class="btn next_button">Finish</button>
                        </div>
                    </fieldset>
                    <!-- END PAYMENT -->
                    <!-- TICKET -->
                    <fieldset class="animated fadeIn p-info">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-3" style="margin: auto;left: 0;top: 0;">
                                <img src="{{asset('import_commuter/assets/images/booked.png') }}" alt="Success" class="img-fluid p-b-10">
                            </div>
                            <div class="col-md-8">
                                <h6>
                                    An confirmation receipt has been sent to your email address (<span class="show-email"></span>). Don't forget to look in your spam folder.  <!--<i class="fa fa-heart text-danger"></i>.--><br><br>    
                                </h6>
                            </div>
                        </div>
                        <div class="row justify-content-center buttons">
                            <button type="button " class="btn previous_button">Back</button>
                        </div>
                    </fieldset>
                    <!-- END TICKET -->
                </div>
            </section>
        </div>
    </main>
</body>

  <!-- javascript -->
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
  <!-- <script type="text/javascript" src = "{{asset('import_commuter/assets/js/script.js') }}"></script> -->
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
 <!-- ----------------------------------------------------------------------------------------------------------------------- -->
  <!--end of js-->
  <script>
  
  
  let economy_price = {{ $trip->route->fare }};
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
  
</head>

</html>
