<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SWITCH! Immersive Courses</title>

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
							<h3 class="m-t-0 course_title">{{$course->name}}</h3>
								<!--wizard here-->
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

					                    <li role="presentation" class="active">
					                        <a href="#">
					                            <span class="round-tab">
					                                <span class="badge bg-transparent">
					                                    2
					                                </span>
					                                Personal Information
					                            </span>
					                        </a>
					                    </li>
					                    <li role="presentation" >
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

							<!-- wizard ended -->
							<p class="fellow_info">Please take some time and provide some background information about yourself</p>
							<br>
							<form method="post">
								{{csrf_field()}}
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first">First Name:</label>
										    <input type="text" class="form-control" name="first_name" id="first" value="{{old('first_name')}}">
											@if ($errors->has('first_name'))
												<span class="help-block">
													<strong>{{ $errors->first('first_name') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="last">Last Name:</label>
										    <input type="text" name="last_name" class="form-control" id="last" value="{{old('last_name')}}">
											@if ($errors->has('last_name'))
												<span class="help-block">
													<strong>{{ $errors->first('last_name') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="email">Email address:</label>
										    <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
											@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="phone">Phone:</label>
										    <input type="text" name="phone" class="form-control" id="phone" value="{{old('phone')}}">
											@if ($errors->has('phone'))
												<span class="help-block">
													<strong>{{ $errors->first('phone') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="range">What is your age range?</label>
										    <select name="age_range" class="selectpicker form-control" title="Choose a course..." name="range">
								  			  <option value="18-23"  @if(old('age_range') == "18-23") selected  @endif>18 - 23</option>
											  <option value="24-29" @if(old('age_range') == "24-29") selected  @endif>24 - 29</option>
											  <option value="30-34" @if(old('age_range') == "30-34") selected  @endif>30 - 34</option>
											  <option value="35-above" @if(old('age_range') == "35-above") selected  @endif>35 - above</option>
											</select>
											@if ($errors->has('age_range'))
												<span class="help-block">
													<strong>{{ $errors->first('age_range') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="prefered_session">Preferred training session</label>
										    <select name="prefered_session" class="selectpicker form-control" title="Choose a course..." id="prefered_session">
								  			  <option value="weekdays" @if(old('prefered_session') == "weekdays") selected  @endif>Weekdays</option>
											  <option value="weekends" @if(old('prefered_session') == "weekends") selected  @endif>Weekends</option>
											</select>
											@if ($errors->has('prefered_session'))
												<span class="help-block">
													<strong>{{ $errors->first('prefered_session') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
										    <label for="why_course">Why do you want to take this course?</label>
										    <textarea name="why_course" id="why_course" class="form-control" rows="3">{{old('why_course')}}</textarea>
											@if ($errors->has('why_course'))
												<span class="help-block">
													<strong>{{ $errors->first('why_course') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="employment_status">What is your employment status?</label>
										    <select name="employment_status" class="selectpicker form-control" title="Choose a course..." id="employment_status">
								  			  <option value="employed" @if(old('employment_status') == "employed") selected  @endif>Employed</option>
											  <option value="self-employed" @if(old('employment_status') == "self-employed") selected  @endif>Self Employed</option>
											  <option value="unemployed" @if(old('employment_status') == "unemployed") selected  @endif>Unemployed</option>
											</select>
											@if ($errors->has('employment_status'))
												<span class="help-block">
													<strong>{{ $errors->first('employment_status') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="prev_training">Do you have any training in web technologies?</label>
										    <select name="prev_training" class="selectpicker form-control" title="Choose a course..." id="prev_training">
								  			  <option value="no" @if(old('prev_training') == "no") selected  @endif> No </option>
											  <option value="yes" @if(old('prev_training') == "yes") selected  @endif>Yes</option>
											</select>
											@if ($errors->has('prev_training'))
												<span class="help-block">
													<strong>{{ $errors->first('prev_training') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="referral">How did you hear about this course?</label>
										    <select name="referral" class="selectpicker form-control" title="Choose a course..." id="referral">
								  			  <option value="advert" @if(old('referral') == "advert") selected  @endif>Advert</option>
								  			  <option value="blog" @if(old('referral') == "blog") selected  @endif>Blog</option>
								  			  <option value="a friend" @if(old('referral') == "a friend") selected  @endif>A friend</option>
											</select>
											@if ($errors->has('referral'))
												<span class="help-block">
													<strong>{{ $errors->first('referral') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="proficiency">Rate your computer proficiency</label>
										    <select name="computer_proficiency" class="selectpicker form-control" title="Choose a course..." id="proficiency">
								  			  <option value="bad" @if(old('computer_proficiency') == "bad") selected  @endif> Bad</option>
											  <option value="okay" @if(old('computer_proficiency') == "okay") selected  @endif>Okay</option>
											  <option value="good" @if(old('computer_proficiency') == "good") selected  @endif>Good</option>
											  <option value="excellent" @if(old('computer_proficiency') == "excellent") selected  @endif>Excellent</option>
											</select>
											@if ($errors->has('computer_proficiency'))
												<span class="help-block">
													<strong>{{ $errors->first('computer_proficiency') }}</strong>
												</span>
											@endif
										</div>
									</div>
									
									
									
								</div>
								<div class="clearfix">
									<a href="/courses/{{$course->slug}}" type="submit" class="btn btn-default pull-left w-104">
								
										<i class="fa fa-arrow-left"></i>
										Back
									</a>
									<button type="submit" class="btn btn_brand pull-right">Continue to Payment
										<i class="fa fa-arrow-right"></i>
									</button>
								</div>
								
							</form>
						</div>
					

						<div class="col-md-4 col-md-offset-1">
							<div class="card" style="border: 1px solid #EEE;">
	                            <div class="header text-center dis-flex" style="border: none;">
	                                <img src="/assets/img/{{$course->image_reference}}">
	                            </div>
	                            <div class="content text-center">
	                            	@if($course->discount_percentage > 0)
										<?php $ds_price = $course->price - ($course->price * ($course->discount_percentage/100));?>
	                            		<p class="course_price">NGN {{number_format($ds_price)}}</p>
									@else
										<p class="course_price">NGN {{number_format($course->price)}}</p>
									@endif
									@if($course->discount_percentage > 0)
										<p class="course_price_ds m-b-0 m-t-0">
											<span style="color: #ff4d4d; text-decoration:line-through; margin-right: 5px;">
												
												<span style="color: #778aa1;">NGN {{number_format($course->price)}}</span>
											</span>
										
										 {{$course->discount_percentage}}% discount
										</p>
									@endif
	                                <h3 class="course_title2">{{$course->name}}</h3>
	                                <p class="course_duration">
	                                	<span>
	                                		<i class=""></i>
	                                		{{$course->duration}}
	                                	</span>
	                                	<span>
	                                		<i class=""></i>
	                                		Starts {{date('d M, Y', strtotime($course->start_date))}}
	                                	</span>
	                                </p>
	                            </div>
	                       </div>
						</div>
					</section>
				</div>
			</section>
		</div>


		<!-- jQuery -->
		<script src="/assets/js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/assets/js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>


	</body>
</html>