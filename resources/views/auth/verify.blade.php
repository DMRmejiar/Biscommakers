@extends('layouts.app')

@section('content')
  <header class="header">
    <div class="container">
      <h1 class="form-heading">{{ __('Verify Your Email Address') }}</h1>
        <div class="login-form">
          <div class="main-div">
            <div class="panel">
              @if (session('resent'))
                <div class="alert alert-success" role="alert">
                  {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
              @endif

              {{ __('Before proceeding, please check your email for a verification link.') }}
              {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection
