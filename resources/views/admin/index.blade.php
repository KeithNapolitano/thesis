<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>test</title>
    <link rel="stylesheet" href="{{ asset('import/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Andika+New+Basic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anybody&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Narrow&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bayon&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cantarell&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chivo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('import/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Event-Schedule.css')}}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('import/assets/css/styles.css')}}">
</head>

<body style="padding-right: 0px;padding-left: 0px;background: rgb(205, 220, 235);font-family: Almarai, sans-serif;border-style: none;border-color: var(--bs-red);">
    <nav class="navbar navbar-light navbar-expand-xxl sticky-top bg-white" style="height: 77px;padding: 17px 0px;background: rgba(255,255,255,0.62);">
        <div class="container-fluid"><a class="navbar-brand text-end" href="#" style="height: 50px;"><img src="{{asset('import/assets/img/logo.png')}}" style="width: 100px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="height: 40px;width: 45px;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="width: 19px;height: 13px;"></span></button>
            <div class="collapse navbar-collapse text-center" id="navcol-1" style="margin: 22px;width: 356px;height: 100;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="trips">Trips</a></li>
                    <li class="nav-item"><a class="nav-link" href="account">Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin: 22px;">
        <div class="container text-center" style="color: var(--bs-gray-900);background: rgba(255,228,196,0);border-style: none;border-color: var(--bs-purple);margin-top: 25px;margin-bottom: 25px;">
            <section class="text-center d-inline" style="width: 381px;height: 102px;margin: 23px;">
                <div class="text-center">
                    <header class="text-center">
                        <p class="text-center" style="text-align: center;font-size: 35px;margin-bottom: 0px;">masigo sa siGÒ&nbsp;</p>
                    </header>
                </div>
            </section>
            <form style="margin: 0px;margin-top: -27px;margin-bottom: 23px;padding: 5px;background: rgba(255,228,196,0);border-style: none;">
                <h1 class="text-start" style="margin: 6px;width: 100%;font-family: 'Fira Sans Condensed', sans-serif;"><strong>Find a trip</strong></h1>
                <div class="text-start d-flex" style="margin: 6px;width: 100%;"><input class="form-control" type="text" style="height: 30px;margin-right: 14px;width: 100%;" placeholder="Destination"></div>
                <div style="margin: 6px;width: 100%;"><input class="form-control" type="date" style="width: 100%;"></div><button class="btn btn-primary" type="button" style="width: 100%;margin: 6px;">Search Trip</button>
            </form>
        </div>
        <div class="container" style="background: rgba(255,228,196,0);margin-top: 25px;margin-bottom: 25px;">
            <h1 style="width: 100%;margin: 6px;font-family: 'Fira Sans Condensed', sans-serif;"><strong>Today's Trips</strong></h1>
            <div class="table-responsive" style="border-style: solid;border-radius: 26px;">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Time of Departure</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>Davao</td>
                            <td>Tagum</td>
                            <td>8:00 AM</td>
                            <td>Arrived</td>
                        </tr>
                        <tr>
                            <td>Davao<br></td>
                            <td>Panabo</td>
                            <td>8:00 AM</td>
                            <td>Arrived</td>
                        </tr>
                        <tr>
                            <td>Davao</td>
                            <td>Cagayan</td>
                            <td>8:30 AM</td>
                            <td>Arrived</td>
                        </tr>
                        <tr>
                            <td>Davao</td>
                            <td>Gensan</td>
                            <td>9:00 AM</td>
                            <td>Departed</td>
                        </tr>
                        <tr>
                            <td>Davao</td>
                            <td>Panabo</td>
                            <td>9:00 AM</td>
                            <td>Departed</td>
                        </tr>
                        <tr>
                            <td>Davao</td>
                            <td>Tagum</td>
                            <td>10:30 AM</td>
                            <td>Departed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container" style="background: rgba(255,228,196,0);margin-top: 25px;margin-bottom: 25px;">
            <h1 style="margin: 6px;font-family: 'Fira Sans Condensed', sans-serif;"><strong>siGÒ provides...</strong><br></h1>
            <div class="row" style="background: rgba(255,255,255,0);border-style: none;">
                <div class="col-md-4" style="border-style: none;">
                    <div class="card" style="background: rgba(255,255,255,0);border-style: none;">
                        <div class="card-body text-center" style="background: rgba(205,255,255,0);border-style: none;border-color: rgba(33,37,41,0);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-lightning-charge text-start" style="width: 76px;height: 96px;">
                                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"></path>
                            </svg>
                            <p class="text-center card-text" style="font-size: 23px;">QUICK RESERVATION</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="border-style: none;">
                    <div class="card" style="background: rgba(255,255,255,0);border-style: none;">
                        <div class="card-body text-center"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle text-center" style="width: 76px;height: 96px;">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                            </svg>
                            <p class="card-text" style="height: 34.5px;font-size: 23px;">CONVENIENCE</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card" style="background: rgba(255,255,255,0);border-style: none;">
                        <div class="card-body" style="background: rgba(255,255,255,0);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="text-center" style="width: 76px;height: 96px;">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 10.5C19.6569 10.5 21 11.8431 21 13.5V19.5C21 21.1569 19.6569 22.5 18 22.5H6C4.34315 22.5 3 21.1569 3 19.5V13.5C3 11.8431 4.34315 10.5 6 10.5V7.5C6 4.18629 8.68629 1.5 12 1.5C15.3137 1.5 18 4.18629 18 7.5V10.5ZM12 3.5C14.2091 3.5 16 5.29086 16 7.5V10.5H8V7.5C8 5.29086 9.79086 3.5 12 3.5ZM18 12.5H6C5.44772 12.5 5 12.9477 5 13.5V19.5C5 20.0523 5.44772 20.5 6 20.5H18C18.5523 20.5 19 20.0523 19 19.5V13.5C19 12.9477 18.5523 12.5 18 12.5Z" fill="currentColor"></path>
                            </svg>
                            <p class="card-text" style="border-style: none;height: 34.5px;font-size: 23px;">SECURED TRANSACTION</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center d-sm-flex" style="width: 100%;border-style: none;border-color: var(--bs-purple);">
        <div class="container text-muted py-4 py-lg-5" style="background: rgba(251,251,251,0);margin-top: 25px;">
            <ul class="list-inline">
                <li class="list-inline-item me-4"><a class="link-secondary" href="#">Our Partners</a></li>
                <li class="list-inline-item me-4"><a class="link-secondary" href="#">About</a></li>
                <li class="list-inline-item"><a class="link-secondary" href="#">Support</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></li>
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></li>
            </ul>
            <p class="mb-0">Copyright © 2022&nbsp;siGÒ<br></p>
        </div>
    </footer>
    <script src="{{ asset('import/assets/bootstrap/js/bootstrap.min.js')}"></script>
    <script src="{{ asset('import/assets/js/Date-Range-Picker.js')}"></script>
    <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>

</html>