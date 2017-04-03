<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>SWITCH! Immersive Courses</title>

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
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
<section class="forms clearfix">
				<div class="container" style="margin: 0 auto;">
					<section class="intros clearfix p-t-60">
						<div class="col-md-7">
							<h3 class="m-t-0 course_title">{{$applicant->course->name}}</h3>
							<div class="wizard">
								<div class="wizard-inner">
					               
					                <ul class="nav nav-tabs">

					                    <li role="presentation" >
					                        <a href="#">
					                            <span class="round-tab">
					                                <span class="badge bg-brand">
					                                	<i class="fa fa-check"></i>
					                                </span>
					                                Select Course
					                            </span>
					                        </a>
					                    </li>

					                    <li role="presentation">
					                        <a href="#">
					                            <span class="round-tab">
					                                <span class="badge bg-brand">
					                                    <i class="fa fa-check"></i>
					                                </span>
					                                Personal Information
					                            </span>
					                        </a>
					                    </li>
					                    <li role="presentation" class="active">
					                        <a href="#">
					                            <span class="round-tab">
					                                <span class="badge bg-transparent">3</span>
					                                Make Payment
					                            </span>
					                        </a>
					                    </li>

					                    <li role="presentation">
					                        <a href="#">
					                            <span class="round-tab">
					                                <span class="badge bg-transparent">4</span>
					                                Complete
					                            </span>
					                        </a>
					                    </li>
					                </ul>
					            </div>
				            </div>
							<form>
								<div class="row">
								
									<div class="col-md-8">
										
									    <label class="control-label">Select a payment method</label>
									   <div>
									   		<br>
									   </div>
										<div class="form-group payment_method">
										    <label class="radio-inline"><input type="radio" name="method"><img src="/assets/img/bank.png"> Bank Transfer</label>

											<label class="radio-inline"><input type="radio" name="method" onclick="payWithPaystack({{$applicant->id}})">ATM Card</label>
										</div>
										<div>
									   		<br>
									   </div>
									</div>

									<div class="col-md-8">
										<div class="form-group">
								  			<select id="selectedBank" class="selectpicker form-control" title="Choose Your Preferred Bank" name="range">
								  			  <option value="gtbank">GTBank</option>
											  <option value="uba">UBA</option>
											</select>
											</select>
										</div>
									</div>
									<div>
								   		<br>
								   </div>
									<div class="col-md-8">
										<div class="clearfix text-center bank_details" id="gtbank">
										    <img src="/assets/img/gtb.png">
										    <h6><strong>Guaranty Trust Bank</strong></h6>
										    <ul class="inline_block m-b-0">
										    	<li class="width-100p">
										    		<span class="pull-left">Account name:</span> 
										    		<span class="pull-right">SWITCH Express Innovation</span>
										    	</li>
										    	<li class="width-100p">
										    		<span class="pull-left">Account Number:</span> 
										    		<span class="pull-right">0240817012</span>
										    	</li>
										    </ul>
										</div>
										<div class="clearfix text-center bank_details" id="uba">
										    <img src="/assets/img/uba.png">
										    <h6><strong>United Bank for Africa</strong></h6>
										    <ul class="inline_block m-b-0" id="gtbank">
										    	<li class="width-100p">
										    		<span class="pull-left">Account name:</span> 
										    		<span class="pull-right">SWITCH Express Innovation</span>
										    	</li>
										    	<li class="width-100p">
										    		<span class="pull-left">Account Number:</span> 
										    		<span class="pull-right">1020151422</span>
										    	</li>
										    </ul>									
										</div>
									</div>
									<div class="col-md-4">
										<div class="clearfix">
										    <p class="align-justify">Note:<br> Please include the following code int the comment section when making payment: <b>SWITCHFED24<b></p>
										</div>
									</div>
								</div>
								<div>
									<br>
								</div>
								<div class="clearfix m-t-20">
									{{-- <button type="submit" class="btn btn-default pull-left w-104">
										<i class="fa fa-arrow-left "></i> Back
									</button>--}}
									<a href="/checkout/{{$applicant->id}}" type="submit" class="btn btn_brand btn_enroll pull-right">Complete Enrollment</a>
								</div>
								
							</form>
						
						</div>
						<div class="col-md-4 col-md-offset-1">
							<div class="card" style="border: 1px solid #EEE;">
	                            <div class="header text-center dis-flex" style="border: none;">
	                                <img src="/assets/img/{{$applicant->course->image_reference}}">
	                            </div>
	                            <div class="content text-center">
	                            	@if($applicant->course->discount_percentage > 0)
										<?php $ds_price = $applicant->course->price - ($applicant->course->price * ($applicant->course->discount_percentage/100));?>
	                            		<p class="course_price">NGN {{number_format($ds_price)}}</p>
									@else
										<p class="course_price">NGN {{number_format($applicant->course->price)}}</p>
									@endif
									@if($applicant->course->discount_percentage > 0)
										<p class="course_price_ds m-b-0 m-t-0">
											<span style="color: #ff4d4d; text-decoration:line-through; margin-right: 5px;">
												
												<span style="color: #778aa1;">NGN {{number_format($applicant->course->price)}}</span>
											</span>
										
										 {{$applicant->course->discount_percentage}}% discount
										</p>
									@endif
	                                <h3 class="course_title2">{{$applicant->course->name}}</h3>
	                                <p class="course_duration">
	                                	<span>
	                                		<i class=""></i>
	                                		{{$applicant->course->duration}}
	                                	</span>
	                                	<span>
	                                		<i class=""></i>
	                                		Starts {{ date('d M,Y', strtotime($applicant->course->start_date))}}
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
		<!-- jQuery -->
		<script src="/assets/js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/assets/js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("input[type='radio']").on("change", function(){
					//console.log($(this).parent());
					$(".payment_method").find(".current").removeClass("current");
					$(this).parent().addClass("current");
					
				});

				    $("#uba").hide();
					$("#gtbank").hide();


					$("#selectedBank").change(function(){
						$("#uba").hide();
					$("#gtbank").hide();
						if($(this).val() == "gtbank")
							$("#gtbank").show();
						
						if($(this).val() == "uba")
							$("#uba").show();
					});
			});
		</script>
		<script src="/js/payment.js"></script>
		
	</body>
</html>