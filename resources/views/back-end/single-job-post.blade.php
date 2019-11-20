@extends('back-end.master')
@section('content')
	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="job-descriptions">
						<div class="title">
							<h3>Job Description</h3>
						</div>
						<div class="description">
							{!! $job->job_description !!}
						</div>
						<div class="description">
							<h6>Salary: {{ $job->salary }}</h6>
							<h6>Job Type: {{ $job->job_type }}</h6>
							<h6>Email: {{ $job->email }}</h6>
							<h6>Job Type: {{ $job->company_name }}</h6>
							<h6>Job Type: {{ $job->web_url }}</h6>
							<h6>Last Date: {{\Carbon\Carbon::parse($job->created_at)->toFormattedDateString()}}</h6>
						</div>
						<div class="how-apply">
							
							<div class="apply-btn">
								<a href="single-job-post.php">Apply Job</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection