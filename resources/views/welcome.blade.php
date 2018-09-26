@extends('layouts.app')
@section('content')
  <header class="header" id="header">
    <!--header-start-->
    <div class="container">
      <figure class="logo animated fadeInDown delay-07s">
        <a href=""><img src="img/logo.png" alt=""></a>
      </figure>
      <h1 class="animated fadeInDown delay-07s">Bienvenido a Biscommakers</h1>
      @guest
        <ul class="we-create animated fadeInUp delay-1s">
          <li>Registrate y empieza a progresar</li>
        </ul>
        <ul>
          <a class="link animated fadeInUp delay-12s servicelink" href="{{ route('login') }}">{{ __('Login') }}</a>
        </ul>
        <ul>
          <a class="link under-link animated fadeInUp delay-12s servicelink" href="{{ route('register') }}">{{ __('Register') }}</a>
        </ul>
      @else
        <ul class="we-create animated fadeInUp delay-1s">
          <li>{{ Auth::user()->name }}, ahora lo tienes todo para emprender</li>
        </ul>
        <ul>
          <a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
        </ul>
        <ul>
          <a class="link under-link animated fadeInUp delay-12s servicelink" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </ul>
      @endguest
    </div>
  </header>
  <!--header-end-->
@endsection
