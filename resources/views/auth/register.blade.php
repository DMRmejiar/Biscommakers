@extends('layouts.app')

@section('content')
  <header class="header">
    <div class="container">
      <h1 class="form-heading">Crea tus sueños</h1>
      <div class="register-form">
        <div class="main-div main-div-reg">
          <div class="panel">
            <h2>{{ __('Register') }}</h2>
          </div>
          <form method="POST" action="{{ route('register') }}" id="Register">
            @csrf

            <div class="form-group row">
              <div class="col-lg-4">
                <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
              </div>
              <div class="col-md-8 col-lg-8">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-4">
                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
              </div>
              <div class="col-md-8 col-lg-8">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-4">
                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
              </div>
              <div class="col-md-8 col-lg-8">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-4">
                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
              </div>
              <div class="col-md-8 col-lg-8">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-2">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>
@endsection
