<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="">
	<meta name="description" content="">
	<title>Registration Page</title>

	<?php require 'header.php'; ?>

	<section id="register-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-2 col-lg-2"></div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					<form action="" class="register-form">
						<h2>Register Form</h2>
						<label for="first-name">Fisrt Name</label>
						<input type="text" placeholder="First Name" id="first-name">
						<label for="last-name">Last Name</label>
						<input type="text" placeholder="Last Name" id="last-name">
						<label for="email">Email</label>
						<input type="email" placeholder="Enter your mail" id="email">
						<label for="phone">Phone</label>
						<input type="text" placeholder="Enter your phone number" id="phone">
						<label for="password">Password</label>
						<input type="password" placeholder="Enter password" id="password">
						<div class="type">
							<h5>Register as a</h5>
							<ul>
								<li>
									<input type="radio" id="user" name="type">
									<label for="user">User</label>
								</li>
								<li>
									<input type="radio" id="employer" name="type">
									<label for="employer">Employer</label>
								</li>
							</ul>
						</div>
						<div class="checkbox">
							<input type="checkbox" required id="checkbox">
							<label for="checkbox">Agree the turm and policy</label>
						</div>
						<button class="submit-btn">Submit</button>
						<p>Already have an accout ? <a href="login.php">Log In</a></p>
					</form>
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2"></div>
			</div>
		</div>
	</section>
	<?php require 'footer.php'; ?>