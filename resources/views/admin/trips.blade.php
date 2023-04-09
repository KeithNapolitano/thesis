<!DOCTYPE html>
<html class="text-center" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>test</title>
    <link rel="stylesheet" href="{{asset('import_admin/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('import_admin/assets/bootstrap/css/styles.css') }}">
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
    <link rel="stylesheet" href="{{asset('import_admin/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('import_admin/assets/css/Event-Schedule.css')}}">
    <link rel="stylesheet" href="{{asset('import_admin/assets/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('import_admin/assets/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="background: rgb(205,220,235);">
    <nav class="navbar navbar-light navbar-expand-xxl sticky-top bg-white" style="height: 77px;padding: 17px 0px;background: rgba(255,255,255,0.62);">
        <div class="container-fluid"><a class="navbar-brand text-end" href="index" style="height: 50px;"><img src="{{asset('import_admin/assets/img/logo.png')}}" style="width: 100px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="height: 40px;width: 45px;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="width: 19px;height: 13px;"></span></button>
            <div class="collapse navbar-collapse text-center" id="navcol-1" style="margin: 22px;width: 356px;height: 100;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('trip.create') }}">Trips</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('trip.account') }}">Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="container text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center" style="background: rgba(255,228,196,0);">
            <section class="text-center d-inline" style="width: 381px;height: 102px;margin: 23px;">
                <div class="text-center">
                    <header class="text-center">
                        <p class="text-center" style="text-align: center;font-size: 35px;margin-bottom: 0px;font-family: 'Fira Sans Condensed', sans-serif;"><b>siGO ka sa [TERMINAL'S NAME]</b></p>
                    </header>
                </div>
            </section>
           
            <div class="card-group text-center" style="height: 100%;">
                <div class="card" style="border-style: none;margin: 10px;background: rgba(255,255,255,0);">
                    <div class="card-body" style="border: 3px solid rgb(12,37,126);border-radius: 15px;box-shadow: -3px 3px;width: 100%;">
                        <h4 class="card-title">Add Destination</h4>
                        <div class="row">
                            <div class="col">
                                <div><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalInstrucciones" style="width: 100%;"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-right: 10px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path>
                                        </svg></button>
                                                        <form action="{{ route('route.store') }}" method="POST" enctype="multipart/form-data">@csrf
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="modal fade" role="dialog" tabindex="-1" id="modalInstrucciones">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            
                                                                            <div class="modal-header">
                                                                                <h3 class="text-primary">Add Destination</h3><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <input class="margenesEspacio inputLargo" type="text" name='descr' placeholder="Destination" style="margin: 10px;width: 90%;" />
                                                                                </div>
                                                                                <div class="row">
                                                                                    <input class="margenesEspacio inputLargo" type="number" name='fare' placeholder="Fare" style="margin: 10px;width: 90%;" />
                                                                                </div>
                                                                            </div>
                                                            
                                                            <button type="submit" class="btn btn-primary">
                                                                Add Destination
                                                            </button>
                                                        </form>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="card text-xl-center text-xxl-center" style="border-style: none;margin: 10px;background: rgba(255,255,255,0);">
                    <div class="card-body" style="border-style: solid;border-color: rgb(12,37,126);border-radius: 15px;box-shadow: -3px 3px;width: 100%;">
                        <h4 class="card-title">Account</h4><a class="btn btn-primary" role="button" style="width: 100%;" href="account"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="margin-right: 10px;">
                                <path d="M14.9998 12C14.9998 13.6569 13.6566 15 11.9998 15C10.3429 15 8.99976 13.6569 8.99976 12C8.99976 10.3431 10.3429 9 11.9998 9C13.6566 9 14.9998 10.3431 14.9998 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2.45801 12C3.73228 7.94288 7.52257 5 12.0002 5C16.4778 5 20.2681 7.94291 21.5424 12C20.2681 16.0571 16.4778 19 12.0002 19C7.52256 19 3.73226 16.0571 2.45801 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container" style="background: rgba(255,228,196,0);font-family: 'Fira Sans Condensed', sans-serif;">
            <section class="text-center d-inline" style="width: 381px;height: 102px;margin: 23px;">
                <div class="text-center">
                    <header class="text-center">
                        <p class="text-center" style="text-align: center;font-size: 35px;margin-bottom: 0px;font-family: 'Fira Sans Condensed', sans-serif;"><strong>TRIPS FOR</strong>&nbsp;[<strong>TERMINAL'S NAME]</strong></p>
                    </header>
                </div>
            </section>
            <div>
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom: 24px;">
                    @foreach($routes as $route)
                        <li class="nav-item @if ($loop->first)
                            active
                        @endif" role="presentation">
                            <a class="nav-link" id="tab-{{ $route->id }}" data-toggle="tab" data-bs-target="#tab-pane-{{ $route->id }}" href="#tab-pane-{{ $route->id }}" role="tab" aria-controls="{{ $route->id }}" aria-selected="false">{{ $route->descr }}</a>
                        </li>
                    @endforeach
                </ul>
                
                <div class="tab-content">
                    @foreach ($routes as $rroute)
                    <div class="tab-pane fade" role="tabpanel" id="tab-pane-{{ $rroute->id }}" aria-labelledby="tab-{{ $rroute->id }}">
                        
                        <div class="text-center">
                            <a class="btn btn-primary btn-lg" role="button" href="#addModal-{{ $rroute->id }}" data-bs-toggle="modal" style="font-size: 13px;width: 100%;margin-bottom: 15px;">
                                Add Trip for {{ $rroute->descr }}
                            </a>
                            <a class="btn btn-primary btn-lg" role="button" href="#editModalDest-{{ $rroute->id }}" data-bs-toggle="modal" style="font-size: 13px;width: 100%;margin-bottom: 15px;">
                                Edit {{ $rroute->descr }} Details
                            </a>
                            <div id="addModal-{{ $rroute->id }}" class="modal fade" role="dialog" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Add Trip for {{ $rroute->descr }}</h4>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ route('trip.store') }}" class="form-custom">
                                            @csrf
                                            <input type="hidden" name="route_id" value="{{ $rroute->id }}">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="date">Date:</label>
                                                    <input class="form-control" type="date" name="date" id="date" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="van_plate">Van Plate Number:</label>
                                                    <input class="form-control" type="text" name="van_plate" id="van_plate" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="driver_name">Driver's Name:</label>
                                                    <select class="form-control" id="driver_name" name="driver_name">
                                                        @foreach ($users as $user)
                                                            @if ($user->userlvl==3)
                                                                <option value="{{ $user->name }}">{{ $user->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                                </div>
                            <div id="editModalDest-{{ $rroute->id }}" class="modal fade" role="dialog" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Edit {{ $rroute->descr }} Details</h4>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ route('route.update', $rroute->id) }}" class="form-custom">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="descr" class="form-label text-start">Destination:</label>
                                                    <input class="form-control" type="text" name="descr" id="descr" value="{{ $rroute->descr }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fare" class="form-label text-start">Fare:</label>
                                                    <input class="form-control" type="number" name="fare" id="fare" value="{{ $rroute->fare }}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="table-responsive text-center" style="border-style: solid;border-right-style: solid;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 137.297px;">DATE</th>
                                        <th class="text-center" style="width: 66.188px;">FARE</th>
                                        <th class="text-center" style="width: 94.422px;">VAN</th>
                                        <th class="text-center" style="width: 170.797px;">DRIVER</th>
                                        {{-- <th class="text-center">TRIP STATUS</th> --}}
                                        <th class="text-center" style="width: 42.172px;">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trips as $trip)
                                        @if ($trip->route_id  == $rroute->id)
                                            <tr>
                                                <td>{{ $trip->dates }}</td>
                                                <td class="text-center">{{ $trip->route->fare }}</td>
                                                <td class="text-center">{{ $trip->van_plate }}</td>
                                                <td class="text-center">{{ $trip->driver_name }}</td>
                                                {{-- <td style="width: 210.297px;"></td> --}}
                                                <td class="d-flex flex-row-reverse justify-content-center align-items-center" style="width: 100%;height: 66.5px;">
                                                    <form method="POST" action="{{ route('trip.destroy', $trip->id) }}" class="form-custom">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-primary" type="submit" style="border-radius: 66px;width: 43px;min-width: 43px;height: 43px;"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                    
                                                    <div style="width: 43px;">
                                                        <a class="btn btn-primary btn-lg fs-6 text-center" role="button" href="#editModal-{{ $trip->id }}" data-bs-toggle="modal" style="border-radius: 65px;height: 43px;width: 43px;">
                                                            <i class="fas fa-pen" style="font-size: 10px;"></i>
                                                        </a>
                                                        <div id="editModal-{{ $trip->id }}" class="modal fade" role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4>Edit Trip for {{ $trip->route->descr }}</h4>
                                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="POST" action="{{ route('trip.update', ['id' => $trip->id]) }}">
                                                                            @csrf
                                                                            @method('PUT')
                                                                        
                                                                            <div class="modal-body">
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="dates">Dates:</label>
                                                                                    <input type="date" class="form-control" id="date" name="date" value="{{ $trip->dates }}" >
                                                                                </div>
                                                                        
                                                                                <div class="form-group">
                                                                                    <label for="van_plate">Van Plate:</label>
                                                                                    <input type="text" class="form-control" id="van_plate" name="van_plate" value="{{ $trip->van_plate }}">
                                                                                </div>
                                                                        
                                                                                <div class="form-group">
                                                                                    <label for="driver_name">Driver Name:</label>
                                                                                    <input type="text" class="form-control" id="driver_name" name="driver_name" value="{{ $trip->driver_name }}">
                                                                                </div>
                                                                            </div>
                                                                        
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                                                                <button class="btn btn-primary" type="submit">Edit</button>
                                                                            </div>
                                                                        </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
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
    <script src="{{asset('import_admin/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('import_admin/assets/js/Date-Range-Picker.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $('#myTab a').on('click', function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>

</body>

</html>