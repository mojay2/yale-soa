<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Yale School of Art'))</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

@php
    $logoSVG = file_exists(public_path('images/yale-logo.svg')) ? asset('images/yale-logo.svg') : null;
@endphp

<body class="d-flex flex-column min-vh-100">
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
            <div class="container-fluid">
                <a class="navbar-brand d-lg-none mx-auto d-flex justify-content-center" href="#">
                    <img src="{{ asset('images/yale-logo.svg') }}" alt="Yale School of Art Logo" width="30"
                        height="30" class="d-inline-block align-text-top">
                    Yale School of Art
                </a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11">
                    <a class="navbar-brand d-none d-lg-block mx-auto d-flex justify-content-center" href="#">
                        <img src="{{ asset('images/yale-logo.svg') }}" alt="Yale School of Art Logo" width="30"
                            height="30" class="d-inline-block align-text-top">
                        Yale School of Art
                    </a>

                    <ul class="navbar-nav col-lg-6 mx-auto align-items-center justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('about') }}">About Us</a></li>
                                <li><a class="dropdown-item" href="{{ route('about.study-areas') }}">Graduate Study
                                        Areas</a>
                                <li><a class="dropdown-item" href="{{ route('about.study-areas') }}">Undergraduate Study
                                        Areas</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('about') }}#people">People at SOA</a>
                                <li><a class="dropdown-item" href="{{ route('about') }}#history">History</a></li>
                                <li><a class="dropdown-item" href="{{ route('about') }}#facilities">Facilities</a></li>
                                <li><a class="dropdown-item" href="{{ route('about') }}#resources">Resources</a></li>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apply') }}">Apply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events') }}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @endauth
                    </ul>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="flex-grow-1 py-1">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="my-1 pt-4 bg-light mt-auto">
        <div class="container">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <a class="nav-link text-muted" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" aria-current="page" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="{{ route('apply') }}">Apply</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="{{ route('events') }}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="{{ route('contact') }}">Contact Us</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endauth
            </ul>
            <div class="d-flex flex-column flex-sm-row justify-content-between py-3 my-4">
                <p>© 2025 Yale School of Art. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="https://www.instagram.com/yaleschoolofart/">
                            <i class="bi bi-instagram" style="font-size: 24px;"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="https://www.facebook.com/YaleSchoolofArt/">
                            <i class="bi bi-facebook" style="font-size: 24px;"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="http://yaleart.org/youtube">
                            <i class="bi bi-youtube" style="font-size: 24px;"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </footer>
</body>

</html>
