<?php $__env->startSection('content'); ?>
	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">

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
					<?php if(Session::get('error')): ?>
                     <br/>
                            <div class="alert alert-danger" id="message">
                                <h3 class=" text-center text-danger"> <?php echo e(Session::get('error')); ?></h3>
                            </div>
                    <?php endif; ?>


					<div class="job-descriptions">
						<div class="title">
							<h3>Job Description</h3>
						</div>
						<div class="description">
							<?php echo $job->job_description; ?>

						</div>
						<div class="description">
							<h6>Salary: <?php echo e($job->salary); ?></h6>
							<h6>Job Type: <?php echo e($job->job_type); ?></h6>
							<h6>Email: <?php echo e($job->email); ?></h6>
							<h6>Job Type: <?php echo e($job->company_name); ?></h6>
							<h6>Job Type: <?php echo e($job->web_url); ?></h6>
							<h6>Last Date: <?php echo e(\Carbon\Carbon::parse($job->created_at)->toFormattedDateString()); ?></h6>
						</div>
						<div class="how-apply">
							
							<div class="apply-btn">
								<a <?php if($applyCheck == null): ?> href="<?php echo e(route('apply-job',['id'=>$job->id])); ?>" <?php else: ?> href="#"<?php endif; ?>>
									<?php if($applyCheck == null): ?> Apply Job <?php else: ?> Applied <?php endif; ?> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>