<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Peduli Diri</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-info shadow-sm text-center">
            <div class="container justify-content-center">
                <a class="navbar-brand font-monospace fs-3" style="text-align: center" href="{{ url('/') }}">
                    Peduli Diri
                </a>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nama }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right text-info"></i>  {{ __('Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> --}}
            </div>
        </nav>

        <main class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 me-2">
                        <div class="card bg-info border-0 text-center mb-3 p-2">
                            <img src="https://i.pinimg.com/474x/57/70/f0/5770f01a32c3c53e90ecda61483ccb08.jpg" width="70" class="rounded-circle mx-auto d-block mt-2 mb-3">
                            <h6 class="fw-bold text-white">{{ Auth::user()->nama }}</h3>
                        </div>
                        <ul class="list-group mb-3">
                            <a href="/home" class="text-decoration-none"><li class="list-group-item border-0"><i class="bi bi-house-door text-info me-2"></i> Dashboard</li></a>
                            <a href="catatan/create" class="text-decoration-none"><li class="list-group-item border-0"><i class="bi bi-journal-plus text-info me-2"></i> Tambah Catatan</li></a>
                            <a href="/catatan" class="text-decoration-none"><li class="list-group-item border-0"><i class="bi bi-journal-text text-info me-2"></i> Semua Catatan</li></a>
                            <a href="{{ route('logout') }}" class="text-decoration-none" onclick="event.preventDefault();
                                                                                                    document.getElementById('logout-form').submit();">
                                <li class="list-group-item border-0">
                                    <i class="bi bi-box-arrow-right text-info me-2"></i>  {{ __('Keluar') }}
                                </li>
                            </a>
            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
</html>
