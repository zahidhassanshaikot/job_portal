<?php $__env->startSection('content'); ?>
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
						<p>Don't have account ? <a href="<?php echo e(route('user-ragistration')); ?>">Sign Up Here</a></p>
					</form>
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2"></div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>