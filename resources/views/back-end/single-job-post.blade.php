@extends('back-end.master')
@section('content')
	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">

					@if ($errors->any())
						<br/>
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                     @if(Session::get('success'))
                     <br/>
                            <div class="alert alert-success" id="message">
                                <h3 class=" text-center text-success"> {{ Session::get('success') }}</h3>
                            </div>
					@endif
					@if(Session::get('error'))
                     <br/>
                            <div class="alert alert-danger" id="message">
                                <h3 class=" text-center text-danger"> {{ Session::get('error') }}</h3>
                            </div>
                    @endif


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
							<h6>Last Date: {{ \Carbon\Carbon::parse($job->created_at)->toFormattedDateString() }}</h6>
						</div>
						<div class="how-apply">
							
							<div class="apply-btn">
								<a @if($applyCheck == null) href="{{ route('apply-job',['id'=>$job->id]) }}" @else href="#"@endif>
									@if($applyCheck == null) Apply Job @else Applied @endif </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection