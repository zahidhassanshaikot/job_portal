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
						        <th>#No</th>
						        <th>Job Title</th>
					        	<th>Post Date</th>
					        	<th>Deadline</th>
					        	<th>Total Apply</th>
					        	<th>Action</th>
					      	</tr>
					    </thead>
					    <tbody>
					      	<tr>
						        <td>01</td>
						        <td>Software Engineer</td>
						        <td>Wed, Aug 21, 2019 11:24 AM</td>
						        <td>Sun, Aug 25, 2019 12:00 AM</td>
						        <td>10</td>
						        <td><a href="{{ route('candidate-list') }}">Show List</a></td>
					      	</tr>
					      	<tr>
						        <td>02</td>
						        <td>Web Developer</td>
						        <td>Wed, Aug 21, 2019 11:24 AM</td>
						        <td>Sun, Aug 25, 2019 12:00 AM</td>
						        <td>5</td>
						        <td><a href="{{ route('candidate-list') }}">Show List</a></td>
					      	</tr>
					      	<tr>
						        <td>03</td>
						        <td>Software Engineer</td>
						        <td>Wed, Aug 21, 2019 11:24 AM</td>
						        <td>Sun, Aug 25, 2019 12:00 AM</td>
						        <td>9</td>
						        <td><a href="{{ route('candidate-list') }}">Show List</a></td>
					      	</tr>
					      	<tr>
						        <td>04</td>
						        <td>Web Developer</td>
						        <td>Wed, Aug 21, 2019 11:24 AM</td>
						        <td>Sun, Aug 25, 2019 12:00 AM</td>
						        <td>5</td>
						        <td><a href="{{ route('candidate-list') }}">Show List</a></td>
					      	</tr>
					    </tbody>
					  </table>
				</div>
			</div>
		</div>
	</section>
@endsection