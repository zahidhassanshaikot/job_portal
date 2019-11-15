<?php $__env->startSection('content'); ?>

	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="page-title">
						<h2>Training</h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<article class="job-feature">
						<div class="job-details">
							<div class="feature-image">
								<img src="<?php echo e(asset('design')); ?>/img/training1.jpg" alt="">
							</div>
							<h2 class="job-title"><a href="<?php echo e(route('single-training-post')); ?>">Professional Web Design</a></h2>
							<p>TK: <span>15000</span></p>
							<div class="job-description">
								<p>Total Hour: 20</p>
							</div>
							<div class="apply-btn">
								<a href="<?php echo e(route('single-training-post')); ?>">Enrol Now</a>
							</div>
						</div>
					</article>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<article class="job-feature">
						<div class="job-details">
							<div class="feature-image">
								<img src="<?php echo e(asset('design')); ?>/img/training2.jpg" alt="">
							</div>
							<h2 class="job-title"><a href="<?php echo e(route('single-training-post')); ?>">Web Design and Development</a></h2>
							<p>TK: <span>20000</span></p>
							<div class="job-description">
								<p>Total Hour: 30</p>
							</div>
							<div class="apply-btn">
								<a href="<?php echo e(route('single-training-post')); ?>">Enrol Now</a>
							</div>
						</div>
					</article>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<article class="job-feature">
						<div class="job-details">
							<div class="feature-image">
								<img src="<?php echo e(asset('design')); ?>/img/training3.jpg" alt="">
							</div>
							<h2 class="job-title"><a href="<?php echo e(route('single-training-post')); ?>">Professional Web Development(Laravel)</a></h2>
							<p>TK: <span>25000</span></p>
							<div class="job-description">
								<p>Total Hour: 40</p>
							</div>
							<div class="apply-btn">
								<a href="<?php echo e(route('single-training-post')); ?>">Enrol Now</a>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>