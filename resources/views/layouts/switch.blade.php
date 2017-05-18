<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="/assets/img/fav.jpg"/>

		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>SWITCH! Immersive Courses</title>

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
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
	<body data="course">
		<div class="wrapper clearfix m-b-80">
			<header class="clearfix dis-flex">
				<div class="container">
					<!--navbar begins here-->
					<nav class="navbar navbar-default m-b-0" role="navigation" id="main-nav">
						<div class="container animated">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header" style="padding-top: 3px;">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand animated" href="/">
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
				</div>
			</header>
			@yield('content')

			</footer>
	
		</div>
         <script src="https://js.paystack.co/v1/inline.js"></script>
       
		<!-- jQuery -->
		<script src="/assets/js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/assets/js/bootstrap.min.js"></script>
		 <script src="/js/payment.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>


	</body>
</html>