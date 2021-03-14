@extends('layout')

@section('content')
<section class="d-flex align-items-center">
</section>
<section id="register" class="register">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="box">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email" class="col-md-4">{{ __('E-Mail Address') }}</label>

                            <div >
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="col-md-4">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label remember" for="remember" id="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div id="buttons" class="buttons" >
                            <div class="buttons">
                                <button type="submit" class="btn btn-primary order-button is-link" id="loginbutton">
                                    {{ __('Login') }}
                                </button>
                                

                                @if (Route::has('password.request'))
                                    <a class="btn btn-primary order-button is-link" id="forgotpassword" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection
