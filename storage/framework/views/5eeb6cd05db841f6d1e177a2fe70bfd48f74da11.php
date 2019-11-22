<?php $__env->startSection('content'); ?>
	<section id="register-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-2 col-lg-2"></div>
				<div class="col-sm-12 col-md-6 col-lg-8">
		
					<form action="<?php echo e(route('save-user-info')); ?>" method="POST" class="register-form">
						<?php echo csrf_field(); ?>
						<h2>Register Form</h2>
						<label for="first-name">Fisrt Name</label>
						<input type="text" placeholder="First Name" name="fname" id="first-name">
						<label for="last-name">Last Name</label>
						<input type="text" placeholder="Last Name" name="lname" id="last-name">
						<label for="email">Email</label>
						<input type="email" placeholder="Enter your mail" name="email" id="email">
						<label for="phone">Phone</label>
						<input type="text" placeholder="Enter your phone number" name="phone_no" id="phone">
						<label for="password">Password</label>
						<input type="password" placeholder="Enter password" name="password" id="password">
						<div class="type">
							<h5>Register as a</h5>
							<ul>
								<li>
									<input type="radio" id="user" value="User" name="type">
									<label for="user">User</label>
								</li>
								<li>
									<input type="radio" id="employer" value="Employer" name="type">
									<label for="employer">Employer</label>
								</li>
							</ul>
						</div>
						<div class="checkbox">
							<input type="checkbox" required id="checkbox">
							<label for="checkbox">Agree the turm and policy</label>
						</div>
						<button type="submit" class="submit-btn">Submit</button>
						<p>Already have an accout ? <a href="<?php echo e(route('user-login')); ?>">Log In</a></p>
					</form>
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2"></div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>