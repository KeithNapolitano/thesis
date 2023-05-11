<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>siGO</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('import_commuter/assets/images/apple-touch-icon.png')}}"/>
    <link rel="mask-icon" href="{{asset('import_commuter/assets/images/safari-pinned-tab.svg')}}" color="#5bbad5"/>
    <link rel="manifest" href="{{asset('import_commuter/assets/site.webmanifest')}}">

    <!-- Css Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/elegant-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/nice-select1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/slicknav.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/style.css')}}">
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
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/mod.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/seat.css')}}">
    
</head>

<body>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                @auth
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex; align-items: center;">
                <div class="user-avatar">
                    <span>{{ auth()->user()->name[0] }}</span>
                    <span class="ml-2"></span>
                    </div>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-item disabled"> Hello, {{ auth()->user()->name }}</div>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                </li>
                @endauth
                </div>
            <a class="bk-btn" id="myBtn">Book Trip Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+63) 912345678 </li>
            <li><i class="fa fa-envelope"></i> sigo.thesis@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> (+63) 912345678 </li>
                         <li><i class="fa fa-envelope"></i> sigo.thesis@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a class="bk-btn" id="myBtn2">Book Trip Now</a>
                            <div class="language-option">
                            @auth
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex; align-items: center;">
                            <div class="user-avatar">
                                <span>{{ auth()->user()->name[0] }}</span>
                                <span class="ml-2"></span>
                            </div>
                            </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="dropdown-item disabled"> Hello, {{ auth()->user()->name }}</div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="{{ asset('import_commuter/assets/images/main logo.png') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="{{ url('/commuter') }}">Home</a></li>
                                    <li><a href="{{ url('/destination') }}">Destinations</a></li>
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li  class="active"><a href="{{ url('/contact') }}">Help and Support</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2 style="font-weight: 400; font-family: 'Lora', serif !important;">Contact Info</h2>
                        <p>Questions? Feedback? We're all ears! Reach out to us by phone, email, or social media and let's chat. 
                            We're here to help</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>UP Mindanao, Mintal, Davao City</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>(+63) 912345678</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>sigo.thesis@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Fax:</td>
                                    <td>+(12) 345 67890</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Your Message"></textarea>
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31577.739006087955!2d125.4329388610255!3d7.064181807077572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32a63c89a5c8e4b1%3A0x2e2d7a35e4f4d7c!2sUniversity%20of%20the%20Philippines%20Mindanao!5e0!3m2!1sen!2sph!4v1654727943943!5m2!1sen!2sph"
                    height="470" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{ asset('import_commuter/assets/images/main logo.png') }}">
                                </a>
                            </div>
                            <p>We aspire to help thousands of van commuters<br /> across Mindanao.</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>(+63) 912345678</li>
                                <li>sigo.thesis@gmail.com</li>
                                <li>UP Mindanao, Tugbok District, Mintal, Davao City</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>Latest News</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <div id="myModal" class="modal">
  <!-- Modal content -->
    <div class="modal-content" style = "background-color: #EDE9E8; width: 100%;">
        <span class="close">&times;</span>
        <main class="col-md-12">
        <div class="col-md-11 col-lg-9 col-xl-8 mx-auto window" style = "border-radius: 10px; ">
            <section class="stepper">
                <!-- progressbar -->
                <ul id="progressbar" style="padding-inline-start:8px;">
                    <li class="active">Destination and Schedule</li>
                    <li>Available Trips</li>
                    <li>Book Seat</li>
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
                                <option value="" disabled selected>Select Route</option>
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
                                                    <img src="{{asset('import_commuter/assets/images/van.jpg') }}" alt="bus" height="180" width="200">
                                                </div> 
                                                <div class="col-md-8 bus-details" data-route-id="{{ $trip->route->id }}" data-date="{{ $trip->dates }}">
                                                    <h5 class="card-title bus-name">{{$trip->van_plate}}</h5>
                                                    @foreach ($seats as $seat)
                                                        @if ($seat->trip_id == $trip->id)
                                                            <div class="row card-text m-b-10 bus-description">
                                                                <div class="col-md-6 fs-14">
                                                                    <i class="fa fa-users" style="font-size: 13px;"></i> No. of Passengers (Real time): <span class="psngr" style="font-size: 15px;"> {{$seat->reserved}} </span>
                                                                </div>
                                                                <div class="col-md-6 fs-14">
                                                                    <i class="fa fa-id-card-o"></i> Driver:
                                                                    <span class="drive" style="font-size: 15px;">{{$trip->driver_name}}</span> 
                                                                </div>
                                                                <div class="col-md-6 fs-14">
                                                                    <i class="material-icons" style="font-size: 13px;">event_seat</i> Availability:
                                                                    <span class="avail" style="font-size: 13.5px;"> {{$seat->available}} seats left</span>
                                                                </div>
                                                                <div class="col-md-6 fs-14">
                                                                    <i class="fa fa-road"></i> Route:
                                                                    <span class="rte" style="font-size: 15px;"><span class="to" style="font-size: 15px;"></span> - {{$trip->route->descr}} </span>
                                                                </div>
                                                                <div class="col-md-6 fs-14">
                                                                    <i class="fa fa-money"></i> Fare:
                                                                    <span class="fare" style="font-size: 14px;">{{ $trip->route->fare }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="p-t-13">
                                                            <a class="btn btn-circle book_btn" onclick="setTripId({{ $trip->id }})">Book Seats</a>
                                                            </div>
                                                        @endif
                                                    @endforeach
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
                        <div class="radio-buttons" >
                            <form action ="{{ route('commuter.processRoutes') }}" method="POST" enctype="multipart/form-data" id="booking-form">
                            @csrf
                            <input type="hidden" name="trip_id" id="trip_id" value="">   
                            <div class = "row1">
                                <label class="custom-radio">
                                <input type="checkbox" name="seats[]" value="1" @if($seat->seat1 == 1) disabled class="booked" @endif>       
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
                                <input type="checkbox" name="seats[]" value="2" @if($seat->seat2 == 1) disabled class="booked" @endif>   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>2</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>

                                <div class = "row2">
                                <label class="custom-radio">
                                    <input type="checkbox" name="seats[]" value="3" @if($seat->seat3 == 1) disabled class="booked" @endif >   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>3</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>

                                <div class = "row2">
                                <label class="custom-radio">
                                    <input type="checkbox" name="seats[]" value="4" @if($seat->seat4 == 1) disabled class="booked" @endif>   
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
                                    <input type="checkbox" name="seats[]" value="5" @if($seat->seat5 == 1) disabled class="booked" @endif>   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>5</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>

                                <div class = "row3">
                                <label class="custom-radio">
                                    <input type="checkbox" name="seats[]" value="6" @if($seat->seat6 == 1) disabled class="booked" @endif>   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>6</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>

                                <div class = "row3">
                                <label class="custom-radio">
                                    <input type="checkbox" name="seats[]" value="7" @if($seat->seat7 == 1) disabled class="booked" @endif>   
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
                                    <input type="checkbox" name="seats[]" value="8" @if($seat->seat8 == 1) disabled class="booked" @endif>   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>8</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>

                                <div class = "row4">
                                <label class="custom-radio">
                                    <input type="checkbox" name="seats[]" value="9" @if($seat->seat9 == 1) disabled class="booked" @endif>   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>9</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>

                                <div class = "row4">
                                <label class="custom-radio">
                                    <input type="checkbox" name="seats[]" value="10" @if($seat->seat10 == 1) disabled class="booked" @endif>   
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
                                    <input type="checkbox" name="seats[]" value="11" @if($seat->seat11 == 1) disabled class="booked" @endif>   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>11</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>

                                <div class = "row5">
                                <label class="custom-radio">
                                    <input type="checkbox" name="seats[]" value="12" @if($seat->seat12 == 1) disabled class="booked" @endif>   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>12</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>

                                <div class = "row5">
                                <label class="custom-radio">
                                    <input type="checkbox" name="seats[]" value="13" @if($seat->seat13 == 1) disabled class="booked" @endif>   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>13</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>

                                <div class = "row5">
                                <label class="custom-radio">
                                    <input type="checkbox" name="seats[]" value="14" @if($seat->seat14 == 1) disabled class="booked" @endif>   
                                    <span class="radio-btn">
                                    <div class="hobbies-icon">
                                        <h3>14</h3>
                                    </div>
                                    </span>
                                </label>
                                </div>
                            </div>
                            <img src="{{asset('import_commuter/assets/images/van_background.png') }}" height="500" width="380" style="margin-top: -450px; margin-left: -710px;" >
                            <div class="row no-gutters">
                                <div class="col-lg-8 col-xl-6 col-sm-8 col-md-7">
                                    <div id="seat-map">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-6 col-sm-4 col-md-5">
                                    <div class="booking-details">
                                        <h2 class="header">Booking Details
                                        <span class="number_plate badge badge-primary fs-12"></span></h2>
                                        <h3 class ="seatselect"> Selected Seats <span id="counter">0</span>:</h3>
                                        <ul id="selected-seats"></ul>
                                        <p>Total: <b><span id="total">0</span> PhP</b></p>
                                        <button type="submit" class="book_btn1 btn btn-circle book_btn"> Select Seat </button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        </div>
                    </fieldset>
                </div>
            </section>
        </div>
    </div>

    <!-- Js Plugins -->
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
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery-3.3.1.min.js') }}"></script> 
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery.magnific-popup.min.js') }}"></script> 
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery.slicknav.js') }}"></script>
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/main.js') }}"></script>

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

    <script>
        function setTripId(tripId) {
            document.getElementById("trip_id").value = tripId;
            
        }
    </script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

btn2.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>

</html>