<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm" style="background-color: #6B7176">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/accueil') }}" style="color: white;">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rdv') }}">{{ __('Prendre rendez-vous') }}</a>
                        </li>
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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-center text-lg-start bg-light text-muted">
            <section class="" style="background-color: #6B7176; opacity: 88%; color: white; padding-top: 1px;">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="bi bi-info-square me-3"></i>Salon Patrick
                            </h6>
                            <p>
                                Patrick vous accueille dans son salon de coiffure.
                            </p>
                        </div>

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contenu 2
                            </h6>
                            <p>
                                <a href="#" class="text-reset">Lien 1</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Lien 2</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Lien 3</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Lien 4</a>
                            </p>
                        </div>

                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                Lien Utiles
                            </h6>
                            <p>
                                <a href="#" class="text-reset">Lien 1</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Lien 2</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Lien 3</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Lien 4</a>
                            </p>
                        </div>

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="bi bi-house me-3"></i> 38 rue du bois, 62840 Neuve Chapelle</p>
                            <p>
                                <i class="bi bi-envelope me-3"></i>
                                salonpatrick.vittu@wanadoo.fr
                            </p>
                            <p><i class="bi bi-phone me-3"></i> +33321020460</p>
                            <p><i class="bi bi-phone me-3"></i>03 21 02 04 60</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-center p-2" style="background-color: #6B7176; color: white;">
                © 2022 Copyright | Salon Patrick
            </div>
        </footer>
    </div>
</body>
</html>
