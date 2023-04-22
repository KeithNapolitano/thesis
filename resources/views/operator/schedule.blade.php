<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sigo Operator Module</title>
    <link rel="stylesheet" href="{{ asset('import/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('import/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Card-Carousel-1.css')}}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Card-Carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Horizontal-scrolling-cards-for-mobile-apps.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Navbar-Right-Links.css')}}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/QR-Scanner.css')}}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/untitled.css')}}">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"></a><img
                src="{{ asset('import/assets/img/Logo.png')}}"><button data-bs-toggle="collapse" class="navbar-toggler"
                data-bs-target="#navcol-2"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="schedule"><strong><span
                                    style="color: rgb(0, 0, 0);">Schedule</span></strong></a></li>
                    @php
                    // Get the most recently opened van plate
                    $recentVanPlate = ""; // Replace with your code to get the van plate
                    // Sort trips by date and get the most recent one
                    $mostRecentTrip = DB::table('trips')->orderBy('dates', 'desc')->first();
                    // Get the van plate for the most recent trip
                    $mostRecentVanPlate = $mostRecentTrip->van_plate;

                    $urlParams = [];
                    if ($recentVanPlate) {
                    $urlParams['van_plate'] = $recentVanPlate;
                    } else if ($mostRecentVanPlate) {
                    $urlParams['van_plate'] = $mostRecentVanPlate;
                    }

                    $queryString = http_build_query($urlParams);
                    @endphp

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/operator/opview') . '?' . $queryString }}">
                            <span style="color: rgb(0, 0, 0);">
                                Operator View
                            </span>
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="qr"><span style="color: rgb(0, 0, 0);">QR
                                Scanner</span></a></li>
                </ul><a class="btn btn-primary" role="button" href="{{ route('logout') }}"
                    style="margin-left: 20px;">Log Out</a>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="fw-bold" style="font-size: 26px;">Schedule</h2>
                <p class="text-muted w-lg-50" style="font-size: 16px;">
                    Listed below are all vans available during this day
                </p>
            </div>
        </div>
        @php
        $dates = DB::table('trips')->distinct()->pluck('dates');
        @endphp
        <div class="col-xxl-6 offset-xxl-3">
            <section class="horitzontalScroll">
                @foreach ($dates as $date)
                <!-- Use the selected date as the URL parameter -->
                <a href="?date={{ urlencode($date) }}">
                    <div class="border rounded border-5 horitzontalScrollContent me-3">
                        <!-- Display the date and month using DateTime object -->
                        @php
                        $dateTime = new \DateTime($date);
                        $month = $dateTime->format('F');
                        $day = $dateTime->format('d');
                        @endphp
                        <div class="row">
                            <div class="col text-center">
                                <p id="bigdate-6" style="font-size: 30px;font-weight: bold;margin: 0px;">
                                    {{ $day }}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <h1 class="d-inline-block"
                                    style="font-family: Montserrat, sans-serif;font-size: 18px;color: #47729d;padding-right: 4px;padding-left: 4px;">
                                    {{ $month }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </section>
        </div>

        @php
        // Get the selected date from the URL parameter, or default to today
        $selectedDate = $_GET['date'] ?? date('Y-m-d');
        // Get all trips for the selected date
        $trips = DB::table('trips')->where('dates', $selectedDate)->get();
        @endphp

        @if (count($trips))
        <div class="card-group">

            @foreach ($trips as $trip)
            <div class="card">
                <div class="card-body" style="padding: 16px;">
                    <h4 class="fs-5 card-title" style="font-size: 26px;margin-bottom: 0px;"><strong>Toyota HiAce&nbsp;
                        </strong><br><strong>{{ $trip->van_plate }}</strong><br><span></span></h4>
                    @foreach ($routes as $route)
                    @if ($trip->route_id == $route->id)
                    <p class="fs-6 card-text" style="margin-bottom: 8px;">Davao City to {{ $route->descr }}</p>
                    @endif
                    @endforeach
                    <ul class="list-group" style="padding: 0;padding-bottom: 10px;">
                        @foreach ($seats as $seat)
                        @if ($trip->id == $seat->id)
                        <li class="list-group-item"><span>Seats available: {{$seat->available}}</span></li>
                        <li class="list-group-item"><span>Reserved: {{$seat->reserved}}</span></li>
                        @endif
                        @endforeach

                        <li class="list-group-item"><span>Driver: {{ $trip->van_plate }}</span></li>
                    </ul>
                    <a class="btn btn-primary" role="button"
                        href="/operator/opview?van_plate={{ $trip->van_plate }}">Van View</a>

                </div>
            </div>
            @endforeach

        </div>
        @else
        <div class="container">
            <p>Select a date first</p>
        </div>
        @endif

    </div>

    <footer class="bg-primary-gradient">
        <div class="container py-4 py-lg-5" style="padding-top: 0px;">
            <div class="row justify-content-center">
                <div
                    class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                    <div class="fw-bold d-flex align-items-center mb-2"></div><img
                        src="{{ asset('import/assets/img/main%20logo.png')}}">
                    <p class="text-muted copyright">Made with love by the siGÓ team &lt;
                        3<br></p>
                </div>
            </div>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2022 siGÓ<br></p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="{{ asset('import/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('import/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('import/assets/js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js')}}"></script>
    <script src="{{ asset('import/assets/js/bold-and-bright.js')}}"></script>
    <script src="{{ asset('import/assets/js/Card-Carousel.js')}}"></script>

</body>

</html>
