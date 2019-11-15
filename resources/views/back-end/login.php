<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="">
	<meta name="description" content="">
	<title>Login Page</title>

	<?php require 'header.php'; ?>

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
						<p>Don't have account ? <a href="register.php">Sign Up Here</a></p>
					</form>
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2"></div>
			</div>
		</div>
	</section>
	<?php require 'footer.php'; ?>