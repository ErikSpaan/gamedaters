<div class="flex2_middle debug">

    <!-- Register header: -->
    <div class="register_head">
        Sign up now
    </div>

    <!-- register form: -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="register_content debug">
            <!--name -->
            <label for="name" class=""><span>N</span>ame</label>
                <input id="name" type="text" class="" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif

            <!-- email -->
            <label for="email" class=""><span>E</span>-Mail Address</label>
            {{-- <div class="password_error"> --}}
                <input id="" type="email" class="" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="password_error2" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

            <!-- password -->
            <label for="password" class=""><span>P</span>assword</label>
                {{-- <div class="password_error">  --}}
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                    <span class="password_error2" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

            <!-- password-confirm -->
            <label for="password-confirm" class=""><span>C</span>onfirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        
            <!-- terms -->
            <div id="terms">
                <input type="checkbox" checked="checked" required><span id="terms2">agree with our terms.</span>
            </div>

            {{-- <div class="register_button"> --}}
            <button type="submit" id="registerButton" class="">
                {{ __('Register') }}
            </button>
            {{-- </div> --}}
        </div>
    </form>
</div>
