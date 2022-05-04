<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

            <nav class="nav-bar">
                <h1 class="main-header">{{ config('app.name') }}</h1>
                @if (Route::has('login'))
                <div id="navBar" class="login-nav   ">
                    <a href="/">Domov</a>
                    <a href="/about">O mne</a>
                    <a href="/post">Blog</a>
                    <a href="/recipes">Maglajzy</a>
                    @auth
                    <h1>Si prihlaseny</h1>
                    <a href="{{ url('/dashboard') }}" >{{ auth()->user()->name }}</a>

                    @else
                    <a href="{{ route('login') }}" >Log in</a>

                    <!--                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif-->
@endauth
                </div>
                @endif
            </nav>
            <main class="main-content">
                @yield('content')
            </main>

            <aside class="pre-footer">
                <div class="socials">
                    <div class="post-footer">
                        <div class="social-icons">
                            <h3>Find me on</h3>
                            <div>
                                <img src="https://img.icons8.com/ios/50/fa314a/instagram-new--v1.png"/>
                                <img src="https://img.icons8.com/ios/50/fa314a/facebook-new.png"/>
                            </div>
                        </div>
                    </div>
                    <form class="subscribe-form">
                        <h3>Subscribe to my newsletter</h3>
                        <div>
                            <input type="email" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
                <footer class="footer">
                    <p>Copyright © 2022 Majky</p>
                </footer>
            </aside>
        </div>
    </body>
</html>
