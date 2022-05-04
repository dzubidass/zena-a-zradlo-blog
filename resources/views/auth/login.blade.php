<x-guest-layout class='karta'>
    <div class='screen'>
        <!-- Session Status -->
        <x-auth-session-status class="msg" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="msg" :errors="$errors" />

        <form class='login' method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="login__field">
                <x-input id="email" class="login__input" type="email" placeholder='email' name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="login__field">
                <x-input id="password" placeholder='password' class="login__input"
                         type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="login__field">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="login__field">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="button login__submit">
                    <span class="button__text">Log In</span>
                </button>
            </div>
        </form>
        </div>
</x-guest-layout>

