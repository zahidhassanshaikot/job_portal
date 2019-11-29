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
				@foreach ($trainings as $training)
					<div class="col-sm-12 col-md-4 col-lg-4">
						<article class="job-feature">
							<div class="job-details">
								<div class="feature-image">
									<img src="{{ asset($training->image) }}" alt="img">
								</div>
								<h2 class="job-title"><a href="{{ route('single-training-post',['id'=>$training->id]) }}">{{ $training->training_title }}</a></h2>
								<p>TK: <span>{{ $training->tk }}</span></p>
								<div class="job-description">
									<p>Total Hour: {{ $training->total_hour }}</p>
								</div>
								<div class="apply-btn">
									<a href="{{ route('single-training-post',['id'=>$training->id]) }}">Enrol Now</a>
								</div>
							</div>
						</article>
					</div> 
				@endforeach
	
			</div>
			{!! $trainings->links() !!}
		</div>
	</section>
@endsection