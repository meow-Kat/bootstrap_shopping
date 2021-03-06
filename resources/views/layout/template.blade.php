<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- title --}}
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="./css/head+foot.css">

    @yield('css')
</head>

<body>
    <!-- NAV -->
    <nav class="nav-container navbar navbar-expand-lg navbar-light mx-auto d-flex align-items-center nav-window">
        <a class="navbar-brand p-3" href="#">
            <img src="./img/logo.svg" width="106" height="60" alt="" class="nav-img">
        </a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-hidden" id="navbarNav">
            <div class="navbar-nav ml-auto d-flex align-items-center">
                <a class="nav-item nav-link active px-3 ml-3 my-link-ctrl text-center"
                    href="{{ asset('/shopping-1') }}">Shopping List</a>
                <a class="nav-item nav-link px-3 ml-3 my-link-ctrl text-center"
                    href="{{ asset('/product') }}">Product</a>
                <a class="nav-item nav-link px-3 ml-3 my-link-ctrl text-center" href="#">About</a>
                <a class="nav-item nav-link px-3 ml-3 my-link-ctrl text-center" href="#">Contact</a>

                <div class="btn-group ml-3 ">
                    <a class="navbar-brand m-0" href="{{ asset('/shopping-1') }}">
                        <i class="fas fa-shopping-cart my-icon icon-car p-2 "></i>
                    </a>
                    <button type="button" class="btn" data-toggle="dropdown" data-display="static"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle my-icon"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg-right position-absolute login-option">
                        {{-- ???????????????????????? --}}
                        @guest
                            <a href="{{ asset('/login') }}"><button class="dropdown-item" type="button">Login</button></a>
                        @else
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('main')

    <footer class="">
        <div class=" container ">
            <div class="  row py-5">
        <div class="col d-block d-md-flex flex-wrap align-items-center">
            <div class="col-12 col-md-3 text-center text-md-left">
                <div class="col-6 col-md-12 m-auto p-0">
                    <div class="logo-footers d-flex mb-2 text-center justify-content-center justify-content-md-start">
                        <div class="logo-footer-pic">
                            <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #162446;
                                        }

                                        .cls-2 {
                                            fill: #fff;
                                        }

                                    </style>
                                </defs>
                                <title>?????? 2</title>
                                <g id="??????_2" data-name="?????? 2">
                                    <g id="??????_1-2" data-name="?????? 1">
                                        <circle class="cls-1" cx="20" cy="20" r="20"></circle>
                                        <path class="cls-2"
                                            d="M20,7l7.13,4.11a7.91,7.91,0,0,1,3.95,6.84v6.8l-8.61-5V18.32l7.37,4.26V18.63a7.89,7.89,0,0,0-3.95-6.85L21.28,9.1V33.25L9,26.14V13.35l5.89,3.4a7.91,7.91,0,0,1,3.95,6.85v4.76l-1.23-.71V24.31a7.92,7.92,0,0,0-4-6.85l-3.42-2v9.94L20,31.11Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h5 class="m-2">????????????</h5>
                    </div>

                    <span class="text-ctrl">Air plant banjo lyft occupy retro adaptogen indego</span>
                </div>

            </div>
            <div class="col d-block d-md-flex flex-wrap">
                <div class="card col-12 col-md-6 col-lg-3 border-0">
                    <div class="card-body d-flex flex-column text-center text-md-left">
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-3 border-0">
                    <div class="card-body d-flex flex-column text-center text-md-left">
                        <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-3 border-0">
                    <div class="card-body d-flex flex-column text-center text-md-left">
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-3 border-0">
                    <div class="card-body d-flex flex-column text-center text-md-left">
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                        <a href="#" class="foot-link">Card link</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        <div class="row py-3 px-5 no-gutters bg-light text-dark">
            <div class="container d-md-flex text-center justify-content-md-between ">
                <p>?? 2020 Tailblocks ??? @knyttneve</p>
                <div class="">
                    <i class=" fab fa-facebook-f mx-2"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram mx-2"></i>
                    <i class="fab fa-invision"></i>
                </div>
            </div>

        </div>
    </footer>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    @yield('swiper-index')

    @yield('calc')

    @yield('js')

</body>

</html>
