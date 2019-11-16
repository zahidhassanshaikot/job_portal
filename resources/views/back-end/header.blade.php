
<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('design')}}/css/vendor/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('design')}}/css/vendor/font-awesome/css/font-awesome.min.css">

	<!-- Font Poppins -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">

	<!-- Line Icon -->
	<link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{asset('design')}}/css/style.css">
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg">
		    <div class="navbar-brand">
		    	<a class="logo js-scroll-trigger" href="{{ route('/') }}">Job Portal</a>
		    </div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  	<span class="navbar-toggler-icon"></span>
		  	</button>
			
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link active js-scroll-trigger" href="{{ route('/') }}">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="{{ route('jobs') }}">Jobs</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="{{ route('my-job') }}">My Jobs</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="{{ route('training') }}">Training</a>
			      </li>
			      <li class="nav-item dropdown menu-padding">
			        <a class="nav-link js-scroll-trigger dropdown" href="{{ route('employer') }}">Employers</a>
			      </li>
			      <li class="nav-item dropdown menu-padding">
			        <a class="nav-link js-scroll-trigger dropdown" href="#" data-toggle="modal" data-target="#notification">Notification <div class="notification"><span class="notify">3</span></div></a>
			      </li>
			      <li class="nav-item dropdown menu-padding">
			        <a class="nav-link js-scroll-trigger" href="{{ route('post-job') }}">Post Job</a>
				  </li>
				  @guest
					<li class="nav-item dropdown menu-padding">
			        <a class="nav-link js-scroll-trigger" href="{{ route('user-login') }}">Login</a>
					</li>
					<li class="nav-item dropdown menu-padding">
						<a class="nav-link js-scroll-trigger" href="{{ route('user-ragistration') }}">Register</a>
					</li>
				  @endguest
				  @auth
					  <li class="nav-item dropdown menu-padding">
						<a class="nav-link js-scroll-trigger" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
						 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
					</li>
				  @endauth
			      
			    </ul>
			</div>
		</nav>
	</header>