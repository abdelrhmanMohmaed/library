<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    @yield('page-style')
    <title>@yield('tittle')</title>
</head>

<body>
    <div class="over-lay">
        <div class="over-lay1 ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <img src="{{ asset('img/istockphoto-1215255505-1024x1024.jpg') }}" height="40px" alt=""
                    class="border rounded">
                <h1 class=" h5 mx-2 ">
                    <a href="{{ url('/') }}">library </a>
                </h1>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse float-right" id="navbarNav">
                    {{-- form search --}}
                    @auth
                        <form action="{{ url('cats/search') }}" method="get" class="form-inline m-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                                value="search">Search</button>
                        </form>
                    @endauth
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                            @guest
                                <a class="nav-link" href="{{ url('/register') }}">Regester</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/login') }}">Login</a>
                            </li>
                        @endguest

                        @auth
                            <li class="nav-item">
                                <p class="nav-link text-decoration-none text-danger">Welcom :{{ Auth::user()->name }}</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-decoration-none text-danger"
                                    href="{{ url('/logout') }}">Logout</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>

            @yield('main')
        </div>
    </div>


    @yield('page-script')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
