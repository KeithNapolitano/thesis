<!DOCTYPE html>

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
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/explore.css')}}">

    <style>

    .container1
    {
    position: relative;
    width: 400px;
    height: 100%;
    padding: 40px;
    background: #fff;
    border-radius: 8px;
    margin-left: 580px ;
    padding-top: 200px;
 
    }

    .container1 #textData
    {
    width: 100%;
    height: 55px;
    border-radius: 8px;
    resize: none;
    outline: none;
    border: 2px solid #c0c0c0;
    font-size: 16px;
    padding: 15px;
    }
    .container1 #textData:focus
    {
    border: 2px solid #008cff;
    }
    .container1 .qrCodeBx
    {
    width: 100%;
    height: 300px;
    margin: 10px 0;
    border: 2px solid #008cff;
    position: relative;
    border-radius: 8px;
    }
    .container1 .qrCodeBx img
    {
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 10px;
    }
    .container1 #qrGenerator
    {
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

    .container1 #downloadQR
    {
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

    .container1 #qrGenerator2
    {
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

    .container1 #qrGenerator:active
    {
    transform: scale(0.98);
    }
    
    #ref_num {
    width: 300px;
}
    </style>
    <!-- end of css -->
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h1>           
                    <img src="{{ asset('import_commuter/assets/images/main logo.png') }}" class="nav-img" alt="logo">
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="a-list">
                        <a class="nav-link" href="{{ url('/commuter') }}">Book</a>
                    </li>
                    <li class="a-list">
                        <a class="nav-link" href="{{ url('/explore') }}">Explore</a>
                    </li>
                    <li class="a-list">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="a-list">
                        <a class="nav-link" href="{{ url('/help') }}">Support</a>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex; align-items: center;">
                        <div class="user-avatar">
                            <span>{{ auth()->user()->name[0] }}</span>
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

                    @else
                        <li class="nav-item1">
                            <a class="btn btn-outline-warning my-2 my-sm-0 ml-3" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item2">
                            <a class="btn btn-outline-warning my-2 my-sm-0 ml-2" href="{{ route('register') }}">Sign Up</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    
    @foreach ($reservations as $reservation)
    <div class="container1">
        <div class="qrCodeBx">
            <img src="{{ asset('import_commuter/assets/images/qr.png') }}" id="qrCode">
        </div>
        <p style ="color: red;">*Generate QR first before downloading</p>
        <!-- <button type="submit" id="qrGenerator2">Confirm Booking</button> -->
        <button type="button" id="qrGenerator">Generate QR</button>
        <button type="button" id="downloadQR">Download QR</button>
    </div>
    @endforeach
</body>

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