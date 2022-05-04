<html>
    <head>
        <meta charset="utf-8_czech_ci">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} / @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="container">
            <nav class='nav-bar'>
                @if (Route::has('login'))
                <div class="login-nav">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/blog">Blog</a>
                    @auth
                    <a href="{{ url('/logout') }}" ">Logout</a>
                    @endauth
                </div>
                @endif

                <h2 class="">
                    {{ __('Dashboard') }} / {{ auth()->user()->name }}
                </h2>

                <div class="">
                    <div class="">
                        <div class="">
                            <div class="">
                                You're logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </body>
</html>

