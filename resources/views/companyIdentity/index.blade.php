@extends('layouts.app')

@section('content')
  <section class="main-section team" id="team">
    <!--main-section team-start-->
    <div class="container">
      <h2>Identidad de la Compañia</h2>
      <h6>Take a closer look into our amazing team. We won’t bite.</h6>
      <div class="team-leader-block clearfix">
        <div class="row">
          <div class="team-leader-box col">
            <div class="team-leader wow fadeInDown delay-03s">
              <div class="team-leader-shadow"><a href="{{ asset('companyIdentity/mission') }}"></a></div>
              <img src="{{ asset('img/icon-mision.png') }}" alt="">
            </div>
            <h3 class="wow fadeInDown delay-03s">Misión</h3>
            <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
            <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
          </div>
          <div class="team-leader-box col">
            <div class="team-leader wow fadeInDown delay-03s">
              <div class="team-leader-shadow"><a href="{{ asset('companyIdentity/vision') }}"></a></div>
              <img src="{{ asset('img/icon-vision.png') }}" alt="">
            </div>
            <h3 class="wow fadeInDown delay-03s">Vision</h3>
            <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
            <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
          </div>
        </div>
        <div class="row">
          <div class="team-leader-box col">
            <div class="team-leader wow fadeInDown delay-03s">
              <div class="team-leader-shadow"><a href="{{ asset('companyIdentity/qualityPolicy') }}"></a></div>
              <img src="{{ asset('img/icon-politicas-de-calidad.png') }}" alt="">
            </div>
            <h3 class="wow fadeInDown delay-03s">Polícas de Calidad</h3>
            <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
            <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
          </div>
          <div class="team-leader-box col">
            <div class="team-leader wow fadeInDown delay-03s">
              <div class="team-leader-shadow"><a href="{{ asset('companyIdentity/organizationalStructure') }}"></a></div>
              <img src="{{ asset('img/icon-cuadro-organizacional.png') }}" alt="">
            </div>
            <h3 class="wow fadeInDown delay-03s">Cuadro Organizacional</h3>
            <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
            <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--main-section team-end-->
@endsection
