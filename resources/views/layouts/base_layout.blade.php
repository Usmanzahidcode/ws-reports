<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bulma Css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    {{-- Awesome fonts --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>

    {{-- Core Css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    {{-- Page specific css --}}
    @stack('styles')

    <title>
        @yield('title')
    </title>
</head>
<body>

{{-- Navbar (Header)--}}
<div class="nav-bg-wrapper has-background-dark">
    <nav class="navbar container is-dark py-3 is-flex is-flex-direction-row is-justify-content-space-between"
         role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item has-text-black-bold title is-3" href="#">
                📃️WsReports
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>
                <a class="navbar-item">
                    Documentation
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        More
                    </a>
                    <div class="navbar-dropdown ">
                        <a class="navbar-item ">
                            About
                        </a>
                        <a class="navbar-item ">
                            Jobs
                        </a>
                        <a class="navbar-item ">
                            Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item ">
                            Report an issue
                        </a>
                    </div>
                </div>
            </div>
            <div class="navbar-end">
                @guest
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button" href="{{ route('auth.register.form') }}">
                                <strong>Register</strong>
                            </a>
                            <a class="button is-success is-dark" href="{{ route('auth.login.form') }}">
                                Log in
                            </a>
                        </div>
                    </div>
                @endguest

                @auth
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button">
                                <span class="icon is-small">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span>Manage Account</span>
                            </a>
                            <form action="{{ route('auth.logout.submit') }}" method="POST">
                                @csrf

                                <button class="button is-danger is-dark" type="submit">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>

                @endauth
            </div>
        </div>
    </nav>
</div>

{{-- Main Page Content --}}
<div class="page-wrapper container p-6 is-flex is-flex-direction-column is-justify-content-center">
    @session('success')
    <p class="notification is-success">{{ session('success') }}</p>
    @endsession

    @session('error')
    <p class="notification is-danger">{{ session('error') }}</p>
    @endsession

    @yield('page')
</div>

{{-- Footer --}}
<footer class="footer has-background-dark py-4">
    <div class="content has-text-centered has-text-white">
        <p>Copyright &copy; 2025 WsStack | Made with ❤️ by
            <a href="https://www.linkedin.com/in/usmanzahidx03/" target="_blank">Usman Zahid</a>
        </p>
    </div>
</footer>

{{-- Core Js scripts --}}
<script src="{{ asset('assets/js/app.js') }}"></script>

{{-- Page specific comments --}}
@stack('scripts')

</body>
</html>
