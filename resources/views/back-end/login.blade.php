@extends('back-end.master')
@section('content')
	<section id="login-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-2 col-lg-2"></div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					<form action="" class="register-form">
						<h2>Login Page</h2>
						<label for="email">Email</label>
						<input type="email" placeholder="Enter your valid email" id="email">
						<label for="password">Password</label>
						<input type="password" placeholder="Enter your password" id="password">
						<button class="submit-btn">Login</button>
						<p>Don't have account ? <a href="{{ route('user-ragistration') }}">Sign Up Here</a></p>
					</form>
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2"></div>
			</div>
		</div>
	</section>
@endsection