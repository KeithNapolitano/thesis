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
    <link rel="stylesheet" type="text/css" href="{{asset('import_commuter/assets/css/details.css')}}">
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
    <main class="col-md-12">
        <div class="col-md-11 col-lg-9 col-xl-8 mx-auto window">
        <section class="body">
                <form id="date_form">
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
</section>
</form>
</main>
</div>
</body>


</html>