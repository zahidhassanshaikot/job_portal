<?php $__env->startSection('content'); ?>

	<section id="employer-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					<?php echo $__env->make('sidebar/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					<div class="table-title">
						<h3>Select List for Software Engineer</h3>
					</div>
					<table class="table table-striped table-bordered">
					    <thead>
					      	<tr>
						        
						        <th>Job Title</th>
						        <th>Full Name</th>
					        	<th>Email</th>
					        	<th>Mobile</th>
					        	<th>Status</th>
					        	<th>Action</th>
					      	</tr>
					    </thead>
					    <tbody>
							<?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
						        <td><?php echo e($candidate->job_title); ?></td>
						        <td><?php echo e($candidate->fname); ?> <?php echo e($candidate->lname); ?></td>
						        <td><?php echo e($candidate->email); ?></td>
						        <td><?php echo e($candidate->phone_no); ?></td>
						        <td><?php echo e($candidate->status); ?></td>
						        <td>
						        	<ul>
						        		<li>
						        			<a href="<?php echo e(route('status-change',['status'=>'select','id'=>$candidate->job_apply_id])); ?>" class="select">Select</a>
						        		</li>
						        		<li>
						        			<a href="<?php echo e(route('status-change',['status'=>'pending','id'=>$candidate->job_apply_id])); ?>" class="pending">Pending</a>
						        		</li>
						        		<li>
						        			<a href="<?php echo e(route('status-change',['status'=>'reject','id'=>$candidate->job_apply_id])); ?>" class="elinimate">Reject</a>
						        		</li>
						        	</ul>
						        </td>
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