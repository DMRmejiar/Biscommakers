@extends('layouts.app')

@section('content')
  <section class="main-section paddind" id="Project">
    <!--main-section-start-->
    <div class="container">
      <h2>Proyecto</h2>
      <h6>Una breve descripción.</h6>
    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s isotope animated" style="visibility: visible; animation-name: fadeInUp; position: relative; overflow: hidden; height: 760px; width: 1140px;">
      <div class="Portfolio-box printdesign isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(15px, 0px, 0px);">
        <a href="{{ asset('project/food') }}"><img src="{{ asset('img/Portfolio-pic1.jpg') }}" alt=""></a>
        <h3>Alimento</h3>
        <p>Print Design</p>
      </div>
      <div class="Portfolio-box webdesign isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(390px, 0px, 0px);">
        <a href="{{ asset('project/transport') }}"><img src="{{ asset('img/Portfolio-pic2.jpg') }}" alt=""></a>
        <h3>Transporte</h3>
        <p>Web Design</p>
      </div>
      <div class="Portfolio-box branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(765px, 0px, 0px);">
        <a href="{{ asset('project/technology') }}"><img src="{{ asset('img/Portfolio-pic3.jpg') }}" alt=""></a>
        <h3>Tecnologia</h3>
        <p>Branding</p>
      </div>
      <div class="Portfolio-box photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(15px, 380px, 0px);">
        <a href="{{ asset('project/health') }}"><img src="{{ asset('img/Portfolio-pic4.jpg') }}" alt=""></a>
        <h3>Salud</h3>
        <p>Photography</p>
      </div>
      <div class="Portfolio-box branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(390px, 380px, 0px);">
        <a href="{{ asset('project/agroindustry') }}"><img src="{{ asset('img/Portfolio-pic5.jpg') }}" alt=""></a>
        <h3>Agroindustria</h3>
        <p>Branding</p>
      </div>
      <div class="Portfolio-box photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(765px, 380px, 0px);">
        <a href="{{ asset('project/esthetic') }}"><img src="{{ asset('img/Portfolio-pic6.jpg') }}" alt=""></a>
        <h3>Estética</h3>
        <p>Photography</p>
      </div>
    </div>
  </section>
@endsection
