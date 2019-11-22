@extends('back-end.master')
@section('content')

	<section id="employer-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					@include('sidebar/sidebar')
				</div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					<table class="table table-striped table-bordered">
					    <thead>
					      	<tr>
						        <th>Id</th>
						        <th>Job Title</th>
					        	<th>Post Date</th>
					        	<th>Deadline</th>
					        	<th>Total Apply</th>
					        	<th>Action</th>
					      	</tr>
					    </thead>
					    <tbody>
							@foreach ($jobs as $job) 
					      	<tr>
						        <td>{{ $job->id }}</td>
						        <td>{{ $job->job_title }}</td>
						        <td>{{ $job->created_at }}</td>
						        <td>{{ $job->last_date }}</td>
						        <td>
									@php
										$total=App\JobApply::where('job_post_id', $job->id)->count();
									@endphp
									{{ $total }}
								</td>
						        <td><a href="{{ route('candidate-list') }}">Show List</a></td>
					      	</tr>
							@endforeach
					    </tbody>
					  </table>
				</div>
			</div>
		</div>
	</section>
@endsection