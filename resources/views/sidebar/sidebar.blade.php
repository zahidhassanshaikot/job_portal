
<div class="sidebar">
	<div class="title">
		<h3>Manage Job</h3>
	</div>
	<ul class="sidebar-items">
		<li><a href="{{ route('employer') }}">Post Job</a></li>
		<li><a href="{{ route('post-job-list') }}">Post Job List</a></li>
		<li><a href="{{ route('candidate-list') }}">Candidates List</a></li>
		<li><a href="{{ route('candidate-status',['status'=>'selected']) }}">Select List</a></li>
		<li><a href="{{ route('candidate-status',['status'=>'pending']) }}">Pending List</a></li>
		<li><a href="{{ route('candidate-status',['status'=>'rejected']) }}">Rejected List</a></li>
	</ul>
</div>
