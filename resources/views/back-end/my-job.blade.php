@extends('back-end.master')
@section('content')

	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="page-title">
						<h2>My Job</h2>
					</div>
				</div>
@foreach ($jobs as $job)
	

				<div class="col-sm-12 col-md-4 col-lg-4">
					<article class="job-feature">
						<div class="job-details">
							<div class="feature-image">
								<img src="{{asset($job->image)}}" alt="">
							</div>
							<h2 class="job-title"><a href="{{ route('single-job-post',['id'=>$job->id]) }}">App Developer</a></h2>
							<p>Salary: <span>{{ $job->salary }}</span></p>
							<div class="job-description">
								<p>{{ $job->short_description }}</p>
								<a href="{{ route('single-job-post',['id'=>$job->id]) }}" class="see-more-btn">See More</a>
							</div>
							<div class="apply-btn">
								<a href="{{ route('single-job-post',['id'=>$job->id]) }}">Apply</a>
							</div>
							<div class="post-meta">
								<ul>
									<li>
										<p><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</p>
									</li>
									<li>
										<p><i class="fas fa-calendar-alt"></i>{{\Carbon\Carbon::parse($job->created_at)->toFormattedDateString()}}</p>
									</li>
									<li>
										<p><i class="far fa-clock"></i>{{ $job->job_type }}</p>
									</li>
								</ul>
							</div>
						</div>
					</article>
				</div>
@endforeach

			</div>
			{!! $jobs->links() !!}
		</div>
	</section>
@endsection