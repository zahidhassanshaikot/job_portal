
<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design')); ?>/css/vendor/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design')); ?>/css/vendor/font-awesome/css/font-awesome.min.css">

	<!-- Font Poppins -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">

	<!-- Line Icon -->
	<link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="<?php echo e(asset('design')); ?>/css/style.css">
		<link type="text/css" href="<?php echo e(asset('ckeditor5')); ?>/sample/css/sample.css" rel="stylesheet" media="screen" />
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg">
		    <div class="navbar-brand">
		    	<a class="logo js-scroll-trigger" href="<?php echo e(route('/')); ?>">Job Portal</a>
		    </div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  	<span class="navbar-toggler-icon"></span>
		  	</button>
			
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link active js-scroll-trigger" href="<?php echo e(route('/')); ?>">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="<?php echo e(route('jobs')); ?>">Jobs</a>
				  </li>
				 
			      <li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="<?php echo e(route('training')); ?>">Training</a>
				  </li>
				<?php if(auth()->guard()->check()): ?>
				<li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="<?php echo e(route('my-job')); ?>">My Jobs</a>
				</li>
				 <?php if(Auth::user()->hasRole(['Admin', 'Employer'])): ?>
				 <li class="nav-item dropdown menu-padding">
			        <a class="nav-link js-scroll-trigger dropdown" href="<?php echo e(route('employer')); ?>">Post Job</a>
			      </li>
				 <li class="nav-item dropdown menu-padding">
			        <a class="nav-link js-scroll-trigger dropdown" href="<?php echo e(route('training-post')); ?>">Training Post</a>
			      </li>
			      
				<?php endif; ?>
				<li class="nav-item dropdown menu-padding">
			        <a class="nav-link js-scroll-trigger dropdown" href="#" data-toggle="modal" data-target="#notification">Notification <div class="notification"><span class="notify">3</span></div></a>
				  </li>
				<?php endif; ?>
				
				  <?php if(auth()->guard()->guest()): ?>
					<li class="nav-item dropdown menu-padding">
			        <a class="nav-link js-scroll-trigger" href="<?php echo e(route('user-login')); ?>">Login</a>
					</li>
					<li class="nav-item dropdown menu-padding">
						<a class="nav-link js-scroll-trigger" href="<?php echo e(route('user-ragistration')); ?>">Register</a>
					</li>
				  <?php endif; ?>
				  <?php if(auth()->guard()->check()): ?>
					  <li class="nav-item dropdown menu-padding">
						<a class="nav-link js-scroll-trigger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
						 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                            </form>
					</li>
				  <?php endif; ?>
			      
			    </ul>
			</div>
		</nav>
	</header>