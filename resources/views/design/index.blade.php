@extends('layouts.app')

@section('content')
  <section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>Diseño</h2>
			<h6>Take a closer look into our amazing team. We won’t bite.</h6>
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="{{ asset('design/logo') }}"></a></div>
						<img src="{{ asset('img/team-leader-pic1.jpg') }}" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">Logo</h3>
					<span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="{{ asset('design/color') }}"></a></div>
						<img src="{{ asset('img/team-leader-pic2.jpg') }}" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">Color</h3>
					<span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="{{ asset('design/typography') }}"></a></div>
						<img src="{{ asset('img/team-leader-pic3.jpg') }}" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">Typografia</h3>
					<span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="{{ asset('design/infographic') }}"></a></div>
						<img src="{{ asset('img/team-leader-pic1.jpg') }}" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">Infografia</h3>
					<span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
			</div>
		</div>
	</section>
	<!--main-section team-end-->
@endsection
