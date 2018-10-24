@extends('layouts.app')

@section('content')
  <section class="main-section paddind" id="Project">
    <!--main-section-start-->
    <div class="container">
      <h2>Proyecto</h2>
      <h6>En esta sección ofrecemos asesorías personalizadas para la creación de tu propio negocio.</h6>
    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s isotope animated" style="visibility: visible; animation-name: fadeInUp; position: relative; overflow: hidden; height: 1000px; width: 1140px;">
      <div class="Portfolio-box printdesign isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(15px, 0px, 0px);">
        <a href="{{ asset('project/food') }}"><img src="{{ asset('img/icon-alimento.png') }}" alt=""></a>
        <h3>Alimento</h3>
        <p>La industria alimentaria es la parte de la industria que se encarga de todos los procesos relacionados con la cadena alimentaria.</p>
      </div>
      <div class="Portfolio-box webdesign isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(390px, 0px, 0px);">
        <a href="{{ asset('project/transport') }}"><img src="{{ asset('img/icon-transporte.png') }}" alt=""></a>
        <h3>Transporte</h3>
        <p>La empresa de transportes incluye toda la infraestructura que se necesita para realizar el movimiento de personas o productos a su destino.</p>
      </div>
      <div class="Portfolio-box branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(765px, 0px, 0px);">
        <a href="{{ asset('project/technology') }}"><img src="{{ asset('img/icon-tecnologia.png') }}" alt=""></a>
        <h3>Tecnologia</h3>
        <p>Organizaciones que basan su actividad empresarial en la innovación tecnológica orientada al mercado, dedicándose a la comercialización y rentabilización de productos y servicios innovadores generados a partir de un uso intensivo del conocimiento científico y tecnológico.</p>
      </div>
      <div class="Portfolio-box photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(15px, 500px, 0px);">
        <a href="{{ asset('project/health') }}"><img src="{{ asset('img/icon-salud.png') }}" alt=""></a>
        <h3>Salud</h3>
        <p>Los servicios de salud son prestaciones que brindan asistencia sanitaria con un sistema de atención orientado al mantenimiento, la restauración y la promoción de la salud de las personas.</p>
      </div>
      <div class="Portfolio-box branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(390px, 500px, 0px);">
        <a href="{{ asset('project/agroindustry') }}"><img src="{{ asset('img/icon-agroindustria.png') }}" alt=""></a>
        <h3>Agroindustria</h3>
        <p>Comprende la producción, industrialización y comercialización de productos agropecuarios, forestales y otros recursos naturales biológicos.</p>
      </div>
      <div class="Portfolio-box photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(765px, 500px, 0px);">
        <a href="{{ asset('project/esthetic') }}"><img src="{{ asset('img/icon-estetica.png') }}" alt=""></a>
        <h3>Estética</h3>
        <p>Centros que ofrecen servicios y productos para el cuidado y el bienestar personal.</p>
      </div>
    </div>
  </section>
@endsection
