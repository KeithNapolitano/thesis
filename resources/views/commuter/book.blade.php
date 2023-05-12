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

    <style>

/* Default styles */
.container1 {
    position: relative;
    width: 400px;
    height: 100%;
    padding: 40px;
    background: #fff;
    border-radius: 8px;
    margin-left: 580px;
}

.container1 #textData {
    width: 100%;
    height: 55px;
    border-radius: 8px;
    resize: none;
    outline: none;
    border: 2px solid #c0c0c0;
    font-size: 16px;
    padding: 15px;
}

.container1 #textData:focus {
    border: 2px solid #008cff;
}

.container1 .qrCodeBx {
    width: 100%;
    height: 300px;
    margin: 10px 0;
    border: 2px solid #008cff;
    position: relative;
    border-radius: 8px;
}

.container1 .qrCodeBx img {
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 10px;
}

.container1 #qrGenerator,
.container1 #downloadQR,
.container1 #qrGenerator2 {
    width: 100%;
    height: 50px;
    background: #008cff;
    border-radius: 50px;
    color: #fff;
    border: none;
    outline: none;
    font-size: 16px;
    cursor: pointer;
    margin-top: 5px;
}

.container1 #qrGenerator:active {
    transform: scale(0.98);
}

#ref_num {
    width: 300px;
}

#qrGenerator {
  margin-right: 10px; /* Add margin to the right of the "Generate QR" button */
}
.button-wrapper {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  margin-top: 5px;
  padding-right: 5px;
}

#confirmBooking {
  width: 100%;
  height: 50px;
  background: #008cff;
  border-radius: 50px;
  color: #fff;
  border: none;
  outline: none;
  font-size: 16px;
  cursor: pointer;
  margin-top: 10px; /* Add margin to separate the button from the previous buttons */
}

#confirmBooking:active {
  transform: scale(0.98);
}

/* Media queries */
@media only screen and (max-width: 768px) {
    .container1 {
        width: 90%;
        margin-left: 5%;
    }
}

@media only screen and (max-width: 480px) {
    .container1 {
        width: 100%;
        margin-left: 0;
        padding: 20px;
    }
}

</style>

    <!-- end of css -->
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
                                    <li class="active"><a href="{{ url('/commuter') }}">Home</a></li>
                                    <li><a href="{{ url('/destination') }}">Destinations</a></li>
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="{{ url('/contact') }}">Help and Support</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    
    @foreach ($reservations as $reservation)
    @endforeach
    <div class="container1">
        <div class="qrCodeBx">
            <img src="{{ asset('import_commuter/assets/images/qr.png') }}" id="qrCode">
        </div>
        <p style="color: red;">*Generate QR first before downloading</p>
        <div class="button-wrapper">
            <button type="button" id="qrGenerator">Generate QR</button>
            <button type="button" id="downloadQR">Download QR</button>
        </div>
        <form action="{{ url('commuter') }}" method="GET">
            <button type="submit" id="confirmBooking">Confirm Booking</button>
        </form>
    </div>

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
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery-3.3.1.min.js') }}"></script> 
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery.magnific-popup.min.js') }}"></script> 
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/jquery.slicknav.js') }}"></script>
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src = "{{asset('import_commuter/assets/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.5/dist/FileSaver.min.js"></script>

<script>
const qrCode = document.querySelector('#qrCode');
const qrGenerator = document.querySelector('#qrGenerator');
const downloadQR = document.querySelector('#downloadQR');
const baseURL = "https://api.qrserver.com/v1/create-qr-code/"
//const data = "reservation_id : "; // set a fixed URL or a specific message as the QR code data
const data = "{{$reservation->id}}";
qrGenerator.addEventListener('click',()=>{
    const size = `350x350`
    qrCode.src = `${baseURL}?/size=${size}&data=${data}`
})

downloadQR.addEventListener('click', () => {
    const qrCodeURL = qrCode.src;
    fetch(qrCodeURL)
        .then(response => response.blob())
        .then(blob => {
            saveAs(blob, 'qr_code.png');
        });
});

</script>


</html>