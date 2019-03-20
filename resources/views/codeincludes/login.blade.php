<div class="flex2_top">
    <div class="flex2_top-input">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- email: -->
            <input id="email" type="email" class="" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

            <!-- password: -->
            <input id="" type="password" class=""  name="password" placeholder="Password" required>

            <!-- login button -->
            <button type="submit" class="login">
                {{ __('Login') }}
            </button>
        </form>
        <!-- password forgot: -->
        @if (Route::has('password.request'))
            <a class="forgot_password" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
</div>

