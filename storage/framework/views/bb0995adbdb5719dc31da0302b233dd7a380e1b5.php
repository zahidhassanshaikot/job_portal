<?php $__env->startSection('content'); ?>

	<section id="employer-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					  <?php echo $__env->make('sidebar/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					<form action="" class="register-form post-job">
						<h3>Post New Job</h3>
						<label for="job-title">Job Title</label>
						<input type="text" placeholder="Write Job Title" id="job-title">
						<label for="company">Company</label>
						<input type="text" placeholder="Write Company Name" id="company">
						<label for="location">Location</label>
						<input type="text" placeholder="Location" id="location">
						<label for="job-description">Job Description</label>
						<textarea id="job-description" cols="30" rows="10" placeholder="Job Description"></textarea>
						<label for="applied-email">Application email/ URL</label>
						<input type="text" placeholder="Enter email address or website URL" id="applied-email">
						<label for="applied-email">Closing Date</label>
						<input type="date" placeholder="yyyy-mm-dd" id="applied-email">
						<h3 class="title">Company Details</h3>
						<label for="company">Company</label>
						<input type="text" placeholder="Write Company Name" id="company">
						<label for="website">Website</label>
						<input type="text" placeholder="Website Link" id="website">
						<input type="file" placeholder="Choose File">
						<button class="submit-btn">Submit Your Job</button>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>