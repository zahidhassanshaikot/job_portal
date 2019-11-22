<?php $__env->startSection('content'); ?>

	<section id="employer-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					<?php echo $__env->make('sidebar/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					<table class="table table-striped table-bordered">
					    <thead>
					      	<tr>
						        <th>Id</th>
						        <th>Job Title</th>
					        	<th>Post Date</th>
					        	<th>Deadline</th>
					        	<th>Total Apply</th>
					        	<th>Action</th>
					      	</tr>
					    </thead>
					    <tbody>
							<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
					      	<tr>
						        <td><?php echo e($job->id); ?></td>
						        <td><?php echo e($job->job_title); ?></td>
						        <td><?php echo e($job->created_at); ?></td>
						        <td><?php echo e($job->last_date); ?></td>
						        <td>
									<?php
										$total=App\JobApply::where('job_post_id', $job->id)->count();
									?>
									<?php echo e($total); ?>

								</td>
						        <td><a href="<?php echo e(route('candidate-list')); ?>">Show List</a></td>
					      	</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					    </tbody>
					  </table>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>