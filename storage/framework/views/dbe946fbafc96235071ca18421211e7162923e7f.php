<?php $__env->startSection('content'); ?>

	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="page-title">
						<h2>My Job</h2>
					</div>
				</div>
<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	

				<div class="col-sm-12 col-md-4 col-lg-4">
					<article class="job-feature">
						<div class="job-details">
							<div class="feature-image">
								<img src="<?php echo e(asset($job->image)); ?>" alt="">
							</div>
							<h2 class="job-title"><a href="<?php echo e(route('single-job-post',['id'=>$job->id])); ?>">App Developer</a></h2>
							<p>Salary: <span><?php echo e($job->salary); ?></span></p>
							<div class="job-description">
								<p><?php echo e($job->short_description); ?></p>
								<a href="<?php echo e(route('single-job-post',['id'=>$job->id])); ?>" class="see-more-btn">See More</a>
							</div>
							<div class="apply-btn">
								<a href="<?php echo e(route('single-job-post',['id'=>$job->id])); ?>">Apply</a>
							</div>
							<div class="post-meta">
								<ul>
									<li>
										<p><i class="fas fa-map-marker-alt"></i> <?php echo e($job->location); ?></p>
									</li>
									<li>
										<p><i class="fas fa-calendar-alt"></i><?php echo e(\Carbon\Carbon::parse($job->created_at)->toFormattedDateString()); ?></p>
									</li>
									<li>
										<p><i class="far fa-clock"></i><?php echo e($job->job_type); ?></p>
									</li>
								</ul>
							</div>
						</div>
					</article>
				</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
			<?php echo $jobs->links(); ?>

		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>