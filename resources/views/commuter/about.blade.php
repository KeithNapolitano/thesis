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
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/about.css')}}">
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
        
        <div class="management">
            <div class="talent-management">
                <img class="talent" src="{{asset('import_commuter/assets/images/user.png') }}">
                <p>Troy Martinez</p>
                <p>"I train, manage, and deploy musicians and singers for events and various establishments"</p>
            </div>

            <div class="talent-management">
                <img class="talent" src="{{asset('import_commuter/assets/images/user.png') }}">
                <p>Keith Napolitano</p>
                <p>"I train, manage, and deploy musicians and singers for events and various establishments"</p>
            </div>

            <div class="talent-management2">
                <img class="talent" src="{{asset('import_commuter/assets/images/user.png') }}">
                <p>Chester Tadle</p>
                <p>"I train, manage, and deploy musicians and singers for events and various establishments"</p>
            </div>

            <div class="talent-management3">
                <img class="talent" src="{{asset('import_commuter/assets/images/user.png') }}">
                <p>Mark Valderrama</p>
                <p>"I train, manage, and deploy musicians and singers for events and various establishments"</p>
            </div>
        </div>

    </body>
</html>