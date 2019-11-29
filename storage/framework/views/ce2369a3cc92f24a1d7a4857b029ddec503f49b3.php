<?php $__env->startSection('content'); ?>

	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="job-descriptions">
						<div class="title">
							<h3>Training Description</h3>
						</div>
						<div class="description">
							<?php echo e($training->short_description); ?>

						</div>
						<?php echo $training->training_description; ?>

						
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>