@extends('back-end.master')
@section('content')

	<section id="employer-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					@include('sidebar/sidebar')
				</div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					<div class="table-title">
						<h3>Select List for Software Engineer</h3>
					</div>
					<table class="table table-striped table-bordered">
					    <thead>
					      	<tr>
						        
						        <th>Job Title</th>
						        <th>Full Name</th>
					        	<th>Email</th>
					        	<th>Mobile</th>
					        	<th>Status</th>
					        	<th>Action</th>
					      	</tr>
					    </thead>
					    <tbody>
							@foreach ($candidates as $candidate)
								<tr>
						        <td>{{ $candidate->job_title }}</td>
						        <td>{{ $candidate->fname }} {{ $candidate->lname }}</td>
						        <td>{{ $candidate->email }}</td>
						        <td>{{ $candidate->phone_no }}</td>
						        <td>{{ $candidate->status }}</td>
						        <td>
						        	<ul>
						        		<li>
						        			<a href="{{ route('status-change',['status'=>'select','id'=>$candidate->job_apply_id]) }}" class="select">Select</a>
						        		</li>
						        		<li>
						        			<a href="{{ route('status-change',['status'=>'pending','id'=>$candidate->job_apply_id]) }}" class="pending">Pending</a>
						        		</li>
						        		<li>
						        			<a href="{{ route('status-change',['status'=>'reject','id'=>$candidate->job_apply_id]) }}" class="elinimate">Reject</a>
										</li>
										<li>
						        			<a href="#" class="select">Message</a>
						        		</li>
						        	</ul>
						        </td>
					      	</tr>
							@endforeach 
					      	
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
@endsection