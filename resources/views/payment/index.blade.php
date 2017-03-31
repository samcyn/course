<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SWITCH! Immersive Courses</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
	</head>
	<body data="course">
		<div class="wrapper clearfix">
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
								<a class="navbar-brand animated" href="index.html">
									<img src="/assets/img/logo/logo.svg" alt="Switch" class="logo-default">
								</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav navbar-right main-nav-list">
									<li class="active"><a href="#course">Course</a></li>
									<li class="animated"><a href="#about">About</a></li>
									<li class="animated"><a href="#faq">FAQ</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				</div>
			</header>
			<section class="forms clearfix">
				<div class="container" style="margin: 0 auto;">
					<section class="intros clearfix p-t-60">
						<div class="col-md-7">
							<h3 class="m-t-0">FrontEnd Development</h3>
							<form>
								<div class="row">
								
									<div class="col-md-7">
										
									    <label class="control-label">Select a payment method</label>
									   
										<div class="form-group">
										    <label class="radio-inline"><input type="radio" name="method">Bank Transfer</label>
											<label class="radio-inline"><input type="radio" name="method" onclick="payWithPaystack('superirale@gmail.com', 1000, '2asdjkssssdkj')">ATM Card</label>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
										    <select class="selectpicker form-control" title="Choose Your Preferred Bank" name="range">
								  			  <option>Frontend Development</option>
											  <option>Backend Development</option>
											  <option>Product Design</option>
											  <option>Android Development</option>
											</select>
										</div>
									</div>
									<div class="col-md-7">
										<div class="clearfix text-center bank_details">
										    <img src="/assets/img/gtb.png">
										    <h6><strong>Guaranty Trust Bank</strong></h6>
										    <ul class="inline_block m-b-0">
										    	<li class="width-100p">
										    		<span class="pull-left">Account name:</span> 
										    		<span class="pull-right">Switch Nigeria</span>
										    	</li>
										    	<li class="width-100p">
										    		<span class="pull-left">Account Number:</span> 
										    		<span class="pull-right">0035429295</span>
										    	</li>
										    </ul>
										</div>
									</div>
									<div class="col-md-5">
										<div class="clearfix">
										    <p>Note: Please include the following code int the comment section when making payment: <b>SWITCHFED24<b></p>
										</div>
									</div>
								</div>
								<div class="clearfix m-t-20">
									<button type="submit" class="btn btn-default pull-left">
										Back
									</button>
									<button type="submit" class="btn btn_brand pull-right">Continue to Payment</button>
								</div>
								
							</form>
						</div>
						<div class="col-md-4 col-md-offset-1">
							<div class="card" style="border: 1px solid #EEE;">
	                            <div class="header text-center dis-flex" style="border: none;">
	                                <img src="/assets/img/frontend-icon@2x.png">
	                            </div>
	                            <div class="content text-center">
	                            	<p class="course_price">NGN 24,000</p>
	                                <h3 class="course_title">FrontEnd Development</h3>
	                                <p class="course_duration">
	                                	<span>
	                                		<i class=""></i>
	                                		12 weeks
	                                	</span>
	                                	<span>
	                                		<i class=""></i>
	                                		Starts 27 Mar, 2017
	                                	</span>
	                                </p>
	                            </div>
	                       </div>
						</div>
					</section>
				</div>
			</section>
		</div>
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <script src="/js/payment.js"></script>
		<!-- jQuery -->
		<script src="/assets/js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/assets/js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>


	</body>
</html>