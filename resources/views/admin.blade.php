<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/app/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/index.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">

                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                <img src="{{ asset('images/user/user.png') }}" alt="user" class="img-user me-2">
                                <div class="d-block">
                                    <p class="fw-bold m-0 lh-1">{{ Auth::user()->name }}</p>
                                    <small>{{ Auth::user()->email }}</small>
                                </div>
                            </div>

                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">

                    <p class="fw-bold mb-0 lh-1 text-white">{{ Auth::user()->name }}</p>
                    <small class="text-white">{{ Auth::user()->email }}</small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="#">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                    </a>
                    <hr class="soft my-1 bg-white">

                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Delete User
                    </a>
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-calendar fa-lg box-icon" aria-hidden="true"></i>Report Community
                    </a>
                    <hr class="soft my-1 bg-white">

                    <a class="nav-link px-3" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>
            </div>
        </div>

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>Hello {{ Auth::user()->name }}</h2>
                            <p>Easily monitor and manage user and community activities on the platform. 
                                As an admin, you can monitor user development and ensure the community runs harmoniously. 
                                Keep creating the best experience for all members!</p>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">122</h5>
                                    <p class="card-text">Users</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Your Users</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-calendar float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">122</h5>
                                    <p class="card-text">Communities</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">The Community</small>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Chart --}}
                <div class="row g-2">
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                            <canvas id="myChartOne"></canvas>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                            <canvas id="myChartTwo"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="{{ asset('dist/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/app/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('dist/js/index.js') }}"></script>

</body>

</html>