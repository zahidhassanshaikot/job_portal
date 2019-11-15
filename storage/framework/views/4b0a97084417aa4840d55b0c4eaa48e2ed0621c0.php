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
						        <th>#No</th>
						        <th>Full Name</th>
					        	<th>Email</th>
					        	<th>Mobile</th>
					        	<th>Action</th>
					      	</tr>
					    </thead>
					    <tbody>
					      	<tr>
						        <td>01</td>
						        <td>Jamal Hossain</td>
						        <td>jamal@gmail.com</td>
						        <td>01728242323</td>
						        <td>
						        	<ul>
						        		<li>
						        			<a href="#" class="pending">Pending</a>
						        		</li>
						        		<li>
						        			<a href="#" class="elinimate">Reject</a>
						        		</li>
						        	</ul>
						        </td>
					      	</tr>
					      	<tr>
						        <td>02</td>
						        <td>Jamal Hossain</td>
						        <td>jamal@gmail.com</td>
						        <td>01728242323</td>
						        <td>
						        	<ul>
						        		<li>
						        			<a href="#" class="pending">Pending</a>
						        		</li>
						        		<li>
						        			<a href="#" class="elinimate">Reject</a>
						        		</li>
						        	</ul>
						        </td>
					      	</tr>
					      	<tr>
						        <td>03</td>
						        <td>Jamal Hossain</td>
						        <td>jamal@gmail.com</td>
						        <td>01728242323</td>
						        <td>
						        	<ul>
						        		<li>
						        			<a href="#" class="pending">Pending</a>
						        		</li>
						        		<li>
						        			<a href="#" class="elinimate">Reject</a>
						        		</li>
						        	</ul>
						        </td>
					      	</tr>
					      	<tr>
						        <td>04</td>
						        <td>Jamal Hossain</td>
						        <td>jamal@gmail.com</td>
						        <td>01728242323</td>
						        <td>
						        	<ul>
						        		<li>
						        			<a href="#" class="pending">Pending</a>
						        		</li>
						        		<li>
						        			<a href="#" class="elinimate">Reject</a>
						        		</li>
						        	</ul>
						        </td>
					      	</tr>
					    </tbody>
					  </table>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>