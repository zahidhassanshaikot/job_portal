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
						<h3>Candidates List for Software Engineer</h3>
					</div>
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
											{{-- <a href="{{ route('send-message',['id'=>$candidate->id]) }}" class="select">Message</a> --}}
											<button type="button" class="select" data-toggle="modal" data-target="#exampleModalCenter">
												Message
											</button>
						        		</li>
									</ul>
									
									<!-- Modal -->
									<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<form action="{{ route('send-message',['id'=>$candidate->id]) }}" method="POST">
												@csrf 
										<div class="modal-body">
											
												<textarea name="message" class="form-control" id="" cols="10" rows="5"></textarea>
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Send</button>
										</div>
										</form>
										</div>
									</div>
									</div>

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