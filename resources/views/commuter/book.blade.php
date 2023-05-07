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
    
    <form method="POST" action="{{ route('storeReservation') }}">
    @csrf
    <div class="container1">
        <div class="qrCodeBx">
            <img src="{{ asset('import_commuter/assets/images/qr.png') }}" id="qrCode">
        </div>
        <!-- <button type="submit" id="qrGenerator2">Confirm Booking</button> -->
        <button type="button" id="qrGenerator">Generate QR</button>
        <button type="button" id="downloadQR">Download QR</button>
    </div>
    </form>

</body>

<script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.5/dist/FileSaver.min.js"></script>

<script>
const qrCode = document.querySelector('#qrCode');
const qrGenerator = document.querySelector('#qrGenerator');
const downloadQR = document.querySelector('#downloadQR');
const baseURL = "https://api.qrserver.com/v1/create-qr-code/"
const data = "reservation_id : "; // set a fixed URL or a specific message as the QR code data

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