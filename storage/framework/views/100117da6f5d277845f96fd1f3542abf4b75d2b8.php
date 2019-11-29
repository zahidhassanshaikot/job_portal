<?php $__env->startSection('content'); ?>

	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="page-title">
						<h2>Training</h2>
					</div>
				</div>
				<?php $__currentLoopData = $trainings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $training): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<article class="job-feature">
							<div class="job-details">
								<div class="feature-image">
									<img src="<?php echo e(asset($training->image)); ?>" alt="img">
								</div>
								<h2 class="job-title"><a href="<?php echo e(route('single-training-post',['id'=>$training->id])); ?>"><?php echo e($training->training_title); ?></a></h2>
								<p>TK: <span><?php echo e($training->tk); ?></span></p>
								<div class="job-description">
									<p>Total Hour: <?php echo e($training->total_hour); ?></p>
								</div>
								<div class="apply-btn">
									<a href="<?php echo e(route('single-training-post',['id'=>$training->id])); ?>">Enrol Now</a>
								</div>
							</div>
						</article>
					</div> 
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
			</div>
			<?php echo $trainings->links(); ?>

		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>