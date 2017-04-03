<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="/assets/img/fav.jpg"/>

		<title>SWITCH! Immersive Courses</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<script>

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
			Date();a=s.createElement(o),

			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-89105955-1', 'auto');
			ga('send', 'pageview');

		</script>
	</head>
	<body data="index">
		<div class="wrapper clearfix">
			<header class="clearfix">
				<div class="th_4 clearfix">
					<div class="container">
						<!--navbar begins here-->
						<nav class="navbar navbar-default m-b-0" role="navigation" id="main-nav">
							<div class="container animated">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand animated" href="#">
										<img src="/assets/img/logo/logo.svg" alt="Switch" class="logo-default">
									</a>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav navbar-right main-nav-list">
										<li class="active"><a href="/courses">Courses</a></li>
										<li class="animated"><a href="/about-us">About</a></li>
										<li class="animated"><a href="/faq">FAQ</a></li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</div>
						</nav>
						<!--navbar ends here-->
						<div class="shapes clearfix">
							<div class="col-md-12">
								<h3 class="title">SWITCH! Immersive Courses</h3>
								<p class="introduction">It's time to SWITCH! Accelerate your career by taking our<br> immersive courses in web technologies. A good way to start a new<br> career or expand your skill-set.</p>
							</div>
							<!--<div class="col-md-6">
								<div class="thumbnail">
									<img src="assets/img/desktop.png">
								</div>
							</div>-->
						</div>
					</div>
					<img  src="assets/img/desktop.png" class="pos-abs desktop">
				</div>
				<div class="th_1">
					<form class="form-inline" method="post">
					  <span>I want to learn </span>
					  <div class="form-group">
			
						{{csrf_field()}}
					    <select name="course_id" class="selectpicker form-control" title="Choose a course...">
						  @foreach($courses as $course)
						  	<option value="{{ $course->slug }}"> {{ $course->name }}</option>
						  @endforeach
						</select>

					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control" name="email" id="email" placeholder="enter your email">
					  </div>
					  <button type="submit" class="btn btn_brand">Get Started</button>
					</form>
				</div>
			</header>
			<section class="work clearfix">
				<div class="container">
					<h3 class="text-center heading hr-blue">What you will learn</h3>
					<br><br>
					<div class="row">
						<div class="col-md-4">
							<div class="card">
	                            <div class="header">
	                                <img src="assets/img/com.png">
	                            </div>
	                            <div class="content">
	                                <h5>Market driven curriculum</h5>
	                                <p>Our curricula are developed with leading technology companies home andabroad willing to hire for skills. 
										We have tailored our content to current and future market need. 
										You are sure guaranteed you will complete ourcourses with market-ready skills.</p>
	                            </div>
	                       </div>
						</div>
						<div class="col-md-4">
							<div class="card">
	                            <div class="header">
	                                <img src="assets/img/chat.png">
	                            </div>
	                            <div class="content">
	                                <h5>Practical Training session</h5>
	                                <p>Our faculties are top in the industry and are hands-on in their approach to training. You spend time not ONLY learning the theories but also the practical step by steps of how things are built.</p>
	                            </div>
	                       </div>
						</div>
						<div class="col-md-4">
							<div class="card">
	                            <div class="header">
	                                <img src="assets/img/bag.png">
	                            </div>
	                            <div class="content">
	                                <h5>Work on real live project</h5>
	                                <p>While you study, you will be made to work on live projects to have a feel of how the real world works. This prepares you for the workplace.</p>
	                            </div>
	                       </div>
						</div>
					</div>
				</div>
			</section>
			<section class="course clearfix">
				<div class="container">
					<h3 class="text-center heading hr-white">Our Immersive Courses</h3>
					<br><br>
					<div class="row">
						@foreach($courses as $course)
						
						<div class="col-md-3">
							<div class="card">
	                            <div class="header text-center dis-flex">
	                                <img src="/assets/img/{{$course->image_reference}}">
	                            </div>
	                            <div class="content">
	                                <h5 class="text-center">{{$course->name}}</h5>
	                                <p class="text-center">{{$course->short_desc}}</p>
	                                <a href="/courses/{{$course->slug}}" class="btn btn-block btn_brand">view course</a>
	                            </div>
	                       </div>
						</div>
					
						@endforeach
					</div>
				</div>
			</section>
			<footer class="footer dis-flex clearfix">
				<div class="container">
					<!--navbar begins here-->
					<ul class="p-l-0">
						<li>
							<img src="assets/img/logo/logo.svg" width="150px">
							<span class="copyright">© {{date('Y')}} Switch All rights reserved</span>
						</li>
						<ul class="pull-right">
							{{--<li>
								<a href="#">Tell a Friend</a>
							</li>--}}
							<li>
								<a href="/about-us">About</a>
							</li>
							<li>
								<a href="/faq">FAQs</a>
							</li>
						</ul>
					</ul>
					<!--navbar ends here-->
				</div>
			</footer>
		</div>

		<!-- jQuery -->
		<script src="assets/js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>


	</body>
</html>