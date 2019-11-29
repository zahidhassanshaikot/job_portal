
<div class="sidebar">
	<div class="title">
		<h3>Manage Job</h3>
	</div>
	<ul class="sidebar-items">
		<li><a href="<?php echo e(route('employer')); ?>">Post Job</a></li>
		<li><a href="<?php echo e(route('post-job-list')); ?>">Post Job List</a></li>
		<li><a href="<?php echo e(route('candidate-list')); ?>">Candidates List</a></li>
		<li><a href="<?php echo e(route('candidate-status',['status'=>'select'])); ?>">Select List</a></li>
		<li><a href="<?php echo e(route('candidate-status',['status'=>'pending'])); ?>">Pending List</a></li>
		<li><a href="<?php echo e(route('candidate-status',['status'=>'reject'])); ?>">Rejected List</a></li>
	</ul>
</div>
