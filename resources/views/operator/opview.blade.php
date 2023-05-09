<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sigo Operator Module</title>
    <link rel="stylesheet" href="{{ asset('import/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('import/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Card-Carousel-1.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Card-Carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Horizontal-scrolling-cards-for-mobile-apps.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Navbar-Right-Links.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/QR-Scanner.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/untitled.css') }}">
</head>

<body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"></a><img
                src="{{ asset('import/assets/img/Logo.png') }}"><button data-bs-toggle="collapse" class="navbar-toggler"
                data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="schedule"><span
                                style="font-weight: normal !important; color: rgb(0, 0, 0);">Schedule</span></a></li>
                    <li class="nav-item"><strong><span class="nav-link" style="color: rgb(0, 0, 0);">Operator
                                View</span></strong></li>
                    <li class="nav-item">
                        <a class="nav-link" href="qr?url={{ urlencode(Request::fullUrl()) }}">
                            <span style="color: rgb(0, 0, 0);">QR Scanner</span>
                        </a>
                    </li>
                </ul><a class="btn btn-primary" role="button" href="{{ route('logout') }}"
                    style="margin-left: 20px;">Log Out</a>
            </div>
        </div>
    </nav>


    <div class="row mb-5" style="margin-top: 8px;margin-bottom: 50px;">
        <div class="col-md-8 col-xl-6 text-center mx-auto">

            @php
                // Check if both van_plate and id parameters exist in the query string
                if (isset($_GET['van_plate']) && isset($_GET['id'])) {
                    $vanPlate = $_GET['van_plate'];
                    $vanId = $_GET['id'];

                    // Filter the data based on the van plate number and ID
                    $vanData = DB::table('trips')
                        ->where([['van_plate', '=', $vanPlate], ['id', '=', $vanId]])
                        ->first();

                    if ($vanData != null) {
                        // Loop through the routes and get the matching one
                        $matchingRoute = null;
                        $matchingSeat = null;
                        $matchingTrip = null;
                        foreach ($routes as $route) {
                            if ($vanData->route_id == $route->id) {
                                $matchingRoute = $route;
                                break;
                            }
                        }
                        foreach ($seats as $seat) {
                            if ($vanData->id == $seat->id) {
                                $matchingRoute = $seat;
                                break;
                            }
                        }
                        foreach ($trips as $trip) {
                            if ($vanData->id == $trip->id) {
                                $matchingTrip = $trip;
                                break;
                            }
                        }

                        if ($matchingRoute != null) {
                            // Display the route description
                            echo "<h2 class=\"fs-2 fw-bold text-center\"><strong>Davao City to " . $route->descr . '</strong><br></h2>';
                        } else {
                            // Show an error message if there's no matching route
            echo "<h2 class=\"fs-2 fw-bold text-center\"><strong>No matching route found</strong><br></h2>";
        }

        // Display the van data
        echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col\">";
        echo "<ul class=\"list-group\">";
        echo "<li class=\"list-group-item\"><span><strong>Assigned
                                        van plate:&nbsp;</strong></span><span> " .
            $vanData->van_plate .
            '<br></span></li>';
        echo "<li class=\"list-group-item\"><span><strong>Operator:&nbsp;</strong></span><span>" . $vanData->driver_name . '</span></li>';
        echo "<li class=\"list-group-item\"><span><strong>Schedule:&nbsp;</strong>
                                </span><span>" .
            $vanData->dates .
            '</span></li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        // Show an error message if there's no matching trip data
                        echo "<h2 class=\"fs-2 fw-bold text-center\"><strong>No matching trip found</strong><br></h2>";
                    }
                } else {
                    // Show an error message if either van_plate or id parameter is missing
                    echo "<h2 class=\"fs-2 fw-bold text-center\"><strong>Error:</strong> Missing van_plate or id parameter in
                URL.
            </h2>";
                    echo "<div class=\"container\">";
                    echo "<div class=\"row\">";
                    echo "<div class=\"col\">";
                    echo "<ul class=\"list-group\">";
                    echo "<li class=\"list-group-item text-danger\"><strong>Error:</strong> Missing van_plate or
                                id parameter in URL.</li>";
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            @endphp

        </div>
    </div>



    <div class="text-center" style="width: 100%;height: 100%;"></div>
    <div class="container text-center">
        <div></div>
        <div class="row mb-5" style="margin-top: 16px;">
            <div class="col">
                <div style="width: auto;height: auto;">
                    <table id="matrix">

                        <tr>
                            <td>Front seat</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button id="seat-14" class="{{ $seat->seat14 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">14</button>
                            </td>
                        </tr>

                        <tr>
                            <td><button id="seat-1" class="{{ $seat->seat1 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">1</button>
                            </td>
                            <td><button id="seat-4" class="{{ $seat->seat4 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">4</button>
                            </td>
                            <td><button id="seat-7" class="{{ $seat->seat7 == 1 ? 'reserved' : 'open' }} "
                                    onclick="handleSeatClick(this)">7</button>
                            </td>
                            <td><button id="seat-10" class="{{ $seat->seat10 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">10</button>
                            </td>
                            <td><button id="seat-13" class="{{ $seat->seat13 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">13</button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><button id="seat-3" class="{{ $seat->seat3 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">3</button>
                            </td>
                            <td><button id="seat-6" class="{{ $seat->seat6 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">6</button>
                            </td>
                            <td><button id="seat-9" class="{{ $seat->seat9 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">9</button>
                            </td>
                            <td><button id="seat-12" class="{{ $seat->seat12 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">12</button>
                            </td>
                        </tr>

                        <tr>
                            <td><button class="bg-secondary">Driver Seat</button></td>
                            <td><button id="seat-2" class="{{ $seat->seat2 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">2</button>
                            </td>
                            <td><button id="seat-5" class="{{ $seat->seat5 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">5</button>
                            </td>
                            <td><button id="seat-8" class="{{ $seat->seat8 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">8</button>
                            </td>
                            <td><button id="seat-11" class="{{ $seat->seat11 == 1 ? 'reserved' : 'open' }}"
                                    onclick="handleSeatClick(this)">11</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <script>
                let selectedButton = null; // no button is initially selected
                const seatStatus = { // keep track of which seats are reserved
                    "seat1": {{ $seat->seat1 }},
                    "seat2": {{ $seat->seat2 }},
                    "seat3": {{ $seat->seat3 }},
                    "seat4": {{ $seat->seat4 }},
                    "seat5": {{ $seat->seat5 }},
                    "seat6": {{ $seat->seat6 }},
                    "seat7": {{ $seat->seat7 }},
                    "seat8": {{ $seat->seat8 }},
                    "seat9": {{ $seat->seat9 }},
                    "seat10": {{ $seat->seat10 }},
                    "seat11": {{ $seat->seat11 }},
                    "seat12": {{ $seat->seat12 }},
                    "seat13": {{ $seat->seat13 }},
                    "seat14": {{ $seat->seat14 }}
                };

                function handleSeatClick(button) {
                    const seatId = button.id.split("-")[1]; // extract the seat number from the button id

                    if (seatStatus["seat" + seatId]) { // check if the seat is reserved
                        if (selectedButton !== null) {
                            // change color of previously clicked button back to reserved
                            selectedButton.className = "reserved";
                        }

                        // change color of current button to selected
                        button.className = "selected";

                        // update selected button
                        selectedButton = button;


                    }
                }
            </script>

            <div class="col-md-8 col-xl-6 text-center mx-auto" style="height: 203.562px;width: 359px;">
                <h2 class="fs-6 fw-bold text-start"><strong>Legend:</strong><br></h2>
                <div class="container" style="padding-right: 76px;width: 307px;height: 173.375px;padding-left: 76px;">
                    <div class="row">
                        <div class="col" style="height: auto;">
                            <div class="w-100"></div>
                            <ul class="list-group">
                                <li class="list-group-item bg-success"
                                    style="padding: 8px 16px;padding-right: 16px;box-shadow: 0px 0px;">
                                    <span><strong>Open Seat</strong></span>
                                </li>
                                <li class="list-group-item bg-primary"><span><strong>Reserved Seat</strong></span>
                                </li>
                                <li class="list-group-item bg-warning"><span><strong>Selected Seat</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            @foreach ($reservations as $reservation)
                @if ($reservation->trip_id == $trip->id)
                    @foreach ($users as $user)
                        @if ($user->id == $reservation->user_id)
                            <li class="reservation" data-reservation-id="{{ $reservation->id }}"
                                data-refcode="{{ $reservation->ref_num }}" data-user-name="{{ $user->name }}">
                                <div class='seats'>
                                    <?php $seats = explode(',', $reservation->seat); ?>
                                    @foreach ($seats as $seat)
                                        <a href='#{{ $reservation->id }}-{{ $seat }}'
                                            class='my-link seat'>{{ $seat }}</a>
                                    @endforeach
                                </div>
                                <div id='refcode-{{ $reservation->id }}' class='refcode' style='display:none'>
                                    <p>{{ $reservation->ref_num }}</p>
                                </div>
                                <div id='name-{{ $user->name }}' class='name'>
                                    <p>{{ $user->name }}</p>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

        <script>
            $(function() {
                $('body').on('click', '.my-link', function(e) {
                    e.preventDefault();

                    // get the reservation ID and seat number from the href attribute
                    var parts = $(this).attr('href').substring(1).split('-');
                    var resId = parts[0];
                    var seatNum = parts[1];

                    // retrieve data from list item using data attributes
                    var refcode = $('.reservation[data-reservation-id="' + resId + '"]').data('refcode');
                    var name = $('.reservation[data-reservation-id="' + resId + '"]').data('user-name');

                    // update span tags with retrieved data
                    $('#refcode-display').text(refcode);
                    $('#name-display').text(name);
                    $('#seat-display').text(seatNum);
                });
            });
        </script>


        <div style="padding-top: 0;margin-bottom: -3px;margin-top: -35px;"></div>
        <div class="row mb-5" style="margin-top: 48px;margin-bottom: 50px;">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fs-3" style="margin: 0px;"><strong>Passenger Details</strong></p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span><strong>Seat assigned:&nbsp;</strong></span>
                                    <span class="data-display" id="seat-display">Waiting for selection</span>
                                </li>
                                <li class="list-group-item">
                                    <span><strong>User Name:&nbsp;</strong></span>
                                    <span class="data-display" id="name-display">Waiting for selection here</span>
                                </li>
                                <li class="list-group-item">
                                    <span><strong>Payment Reference Code:&nbsp;</strong></span>
                                    <span class="data-display" id="refcode-display">Waiting for selection</span>
                                </li>
                                <li class="list-group-item">
                                    <span><strong>Amount Paid:&nbsp;</strong></span>
                                    <span class="data-display" id="amount-display">Waiting for selection here</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-5" style="margin-top: 48px;margin-bottom: 50px;">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fs-3" style="margin: 0px;"><strong>Trip Ticket Form</strong></p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="list-group">

                                <form method="POST" id="trip-form"
                                    action="{{ route('trip.OPupdate', ['id' => $trip->id]) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="van_plate"
                                        value="{{ request()->get('van_plate') }}">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <span><strong>Driver Status:&nbsp;</strong></span>
                                            <div>
                                                <input type="checkbox" id="driverstatus" name="driver_status"
                                                    value="1" {{ $trip->driver_status == 1 ? 'checked' : '' }}>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <span><strong>Passenger Status:&nbsp;</strong></span>
                                            <div>
                                                <input type="checkbox" id="passengerstatus" name="passenger_status"
                                                    value="1"
                                                    {{ $trip->passenger_status == 1 ? 'checked' : '' }}>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <span><strong>Payment Collection:&nbsp;</strong></span>
                                            <div>
                                                <input type="checkbox" id="paymentstatus" name="payment_status"
                                                    value="1" {{ $trip->payment_status == 1 ? 'checked' : '' }}>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <span><strong>Supervisor Confirmation:</strong>&nbsp;</span>
                                            <div>
                                                <input type="checkbox" id="supervisorstatus" name="supervisor_status"
                                                    value="1"
                                                    {{ $trip->supervisor_status == 1 ? 'checked' : '' }}>
                                            </div>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="bg-primary-gradient">
        <div class="container py-4 py-lg-5" style="padding-top: 0px;">
            <div class="row justify-content-center">
                <div
                    class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                    <div class="fw-bold d-flex align-items-center mb-2"></div><img
                        src="{{ asset('import/assets/img/main%20logo.png') }}">
                    <p class="text-muted copyright">Made with love by the siGÓ team &lt;3<br></p>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2022 siGÓ<br></p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('import/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/bs-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('import/assets/js/bold-and-bright.js') }}"></script>
    <script src="{{ asset('import/assets/js/Card-Carousel.js') }}"></script>
</body>

</html>
