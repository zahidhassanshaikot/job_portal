@extends('back-end.master')
@section('content')

	<section id="employer-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					  @include('sidebar/training-sidebar')
				</div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					
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
					<form action="{{ route('save-training-post') }}" method="POST" class="register-form post-job" enctype="multipart/form-data">
						@csrf
						<h3>Post Training</h3>
						<label for="training_title">Training Title</label>
						<input type="text" name="training_title" placeholder="Training Title" id="training_title" required>
						<label for="location">Location</label>
						<input type="text" name="location" placeholder="Location" id="location" required>
						<label for="tk">TK</label>
                        <input type="number" name="tk" placeholder="TK" id="tk" required> 
						<label for="tk">Total Hour</label>
                        <input type="number" name="total_hour" placeholder="total_hour" id="total_hour" required>
						<label >Short Description</label>
						<textarea name="short_description" cols="30" rows="30" placeholder="Short Description"></textarea>
						<label for="editor">Job Description</label>
						<textarea id="editor" name="training_description" cols="30" rows="30" placeholder="Training Description"></textarea>
						<label for="applied-email">Application email</label>
						<input type="email" name="email" required placeholder="Enter email address" id="applied-email">
						<label for="applied-email">Closing Date</label>
						<input type="date" name="last_date" placeholder="yyyy-mm-dd" id="applied-email">
						
						<input type="file" name="image" placeholder="Choose File">
						<button type="submit" class="submit-btn">Submit Your Job</button>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection