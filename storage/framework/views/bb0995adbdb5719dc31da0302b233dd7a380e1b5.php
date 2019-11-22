<?php $__env->startSection('content'); ?>

	<section id="employer-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					  <?php echo $__env->make('sidebar/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					
				<?php if($errors->any()): ?>
                     <br/>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                     <?php if(Session::get('success')): ?>
                     <br/>
                            <div class="alert alert-success" id="message">
                                <h3 class=" text-center text-success"> <?php echo e(Session::get('success')); ?></h3>
                            </div>
                    <?php endif; ?>
					<form action="<?php echo e(route('save-job-post-info')); ?>" method="POST" class="register-form post-job" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
						<h3>Post New Job</h3>
						<label for="job-title">Job Title</label>
						<input type="text" name="job_title" placeholder="Job Title" id="job_title" required>
						<label for="location">Location</label>
						<input type="text" name="location" placeholder="Location" id="location" required>
						<label for="location">Salary</label>
						<input type="number" name="salary" placeholder="Salary" id="salary" required>
						<label >Job Type</label>
						<input type="text" name="job_type" placeholder="Full Time/Part Time" required>
						<label >Short Description</label>
						<textarea name="short_description" cols="30" rows="30" placeholder="Short Description"></textarea>
						<label for="editor">Job Description</label>
						<textarea id="editor" name="job_description" cols="30" rows="30" placeholder="Job Description"></textarea>
						<label for="applied-email">Application email</label>
						<input type="email" name="email" required placeholder="Enter email address" id="applied-email">
						<label for="applied-email">Closing Date</label>
						<input type="date" name="last_date" placeholder="yyyy-mm-dd" id="applied-email">
						<h3 class="title">Company Details</h3>
						<label for="company">Company</label>
						<input type="text" name="company_name" required placeholder="Write Company Name" id="company">
						<label for="website">Website</label>
						<input type="text" name="web_url" placeholder="Website Link" id="website">
						<input type="file" name="image" placeholder="Choose File">
						<button type="submit" class="submit-btn">Submit Your Job</button>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>