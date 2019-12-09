<?php $__env->startSection('content'); ?>

	<section id="employer-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					<?php echo $__env->make('sidebar/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					<div class="table-title">
						<h3>Candidates List for Software Engineer</h3>
					</div>
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
						        		<li>
											
											<button type="button" class="select" data-toggle="modal" data-target="#exampleModalCenter">
												Message
											</button>
						        		</li>
									</ul>
									
									<!-- Modal -->
									<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<form action="<?php echo e(route('send-message',['id'=>$candidate->id])); ?>" method="POST">
												<?php echo csrf_field(); ?> 
										<div class="modal-body">
											
												<textarea name="message" class="form-control" id="" cols="10" rows="5"></textarea>
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Send</button>
										</div>
										</form>
										</div>
									</div>
									</div>

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