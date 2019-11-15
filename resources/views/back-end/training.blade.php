@extends('back-end.master')
@section('content')

	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="page-title">
						<h2>Training</h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<article class="job-feature">
						<div class="job-details">
							<div class="feature-image">
								<img src="{{asset('design')}}/img/training1.jpg" alt="">
							</div>
							<h2 class="job-title"><a href="single-job-post.php">Professional Web Design</a></h2>
							<p>TK: <span>15000</span></p>
							<div class="job-description">
								<p>Total Hour: 20</p>
							</div>
							<div class="apply-btn">
								<a href="single-training-post.php">Enrol Now</a>
							</div>
						</div>
					</article>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<article class="job-feature">
						<div class="job-details">
							<div class="feature-image">
								<img src="{{asset('design')}}/img/training2.jpg" alt="">
							</div>
							<h2 class="job-title"><a href="single-job-post.php">Web Design and Development</a></h2>
							<p>TK: <span>20000</span></p>
							<div class="job-description">
								<p>Total Hour: 30</p>
							</div>
							<div class="apply-btn">
								<a href="single-training-post.php">Enrol Now</a>
							</div>
						</div>
					</article>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<article class="job-feature">
						<div class="job-details">
							<div class="feature-image">
								<img src="{{asset('design')}}/img/training3.jpg" alt="">
							</div>
							<h2 class="job-title"><a href="single-job-post.php">Professional Web Development(Laravel)</a></h2>
							<p>TK: <span>25000</span></p>
							<div class="job-description">
								<p>Total Hour: 40</p>
							</div>
							<div class="apply-btn">
								<a href="single-training-post.php">Enrol Now</a>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
@endsection