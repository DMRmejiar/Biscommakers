@extends('layouts.app')

@section('content')
  <header class="header">
    <div class="container">
      <h1 class="form-heading">Crea tus sueños</h1>
      <div class="login-form">
        <div class="main-div">
          <div class="panel">
            <h2>{{ __('Login') }}</h2>
            <p>Please enter your email and password</p>
          </div>
          <form method="POST" action="{{ route('login') }}" id="Login">
            @csrf
            <div class="form-group">
              <input id="email" type="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group">
              <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            <div class="forgot">
              <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
            </div>
            <a class="link under-link animated fadeInUp delay-12s servicelink" href="{{ route('register') }}">{{ __('Register') }}</a>
          </form>
        </div>
      </div>
    </div>
  </header>
@endsection
