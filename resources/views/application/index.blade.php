@extends('layouts.switch')
@section('content')
	<section class="forms clearfix">
				<div class="container" style="margin: 0 auto;">
					<section class="intros clearfix p-t-60">
						<div class="col-md-7">
							<h3 class="m-t-0">{{$course->name}}</h3>
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
										    <input type="text" name="last_name" class="form-control" id="last">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="email">Email address:</label>
										    <input type="email" name="email" class="form-control" id="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="phone">Phone:</label>
										    <input type="text" name="phone" class="form-control" id="phone">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="range">What is your age range?</label>
										    <select name="age_range" class="selectpicker form-control" title="Choose a course..." name="range">
								  			  <option value="18-23">18 - 23</option>
											  <option value="24-29">24 - 29</option>
											  <option value="30-34">30 - 34</option>
											  <option value="35-above">35 - above</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="prefered_session">Preferred training session</label>
										    <select name="prefered_session" class="selectpicker form-control" title="Choose a course..." id="prefered_session">
								  			  <option value="evening">Evening</option>
											  <option value="weekend">Weekend</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
										    <label for="why_course">Why do you want to take this course?</label>
										    <textarea name="why_course" id="why_course" class="form-control" rows="3" required="required"></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="employment_status">What is your employment status?</label>
										    <select name="employment_status" class="selectpicker form-control" title="Choose a course..." id="employment_status">
								  			  <option value="employed">Employed</option>
											  <option value="unemployed">Unemployed</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="prev_training">Do you have any training in web technologies?</label>
										    <select name="prev_training" class="selectpicker form-control" title="Choose a course..." id="prev_training">
								  			  <option value="no"> No </option>
											  <option value="yes">Yes</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="referral">How did you hear about this course?</label>
										    <select name="referral" class="selectpicker form-control" title="Choose a course..." id="referral">
								  			  <option value="advert">Advert</option>
								  			  <option value="blog">Blog</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="proficiency">Rate your computer proficiency</label>
										    <select name="computer_proficiency" class="selectpicker form-control" title="Choose a course..." id="proficiency">
								  			  <option value="bad"> Bad</option>
											  <option value="okay">Okay</option>
											  <option value="good">Good</option>
											  <option value="excellent">Excellent</option>
											</select>
										</div>
									</div>
									
									
									
								</div>
								<div class="clearfix">
									<a href="/courses/{{$course->slug}}" type="submit" class="btn btn-default pull-left">
										Back
									</a>
									<button type="submit" class="btn btn_brand pull-right">Continue to Payment</button>
								</div>
								
							</form>
						</div>
						<div class="col-md-4 col-md-offset-1">
							<div class="card" style="border: 1px solid #EEE;">
	                            <div class="header text-center dis-flex" style="border: none;">
	                                <img src="/assets/img/{{$course->image_reference}}">
	                            </div>
	                            <div class="content text-center">
	                            	<p class="course_price">NGN {{number_format($course->price)}}</p>
	                                <h3 class="course_title">{{$course->name}}</h3>
	                                <p class="course_duration">
	                                	<span>
	                                		<i class=""></i>
	                                		{{$course->duration}}
	                                	</span>
	                                	<span>
	                                		<i class=""></i>
	                                		Starts {{date('d M,Y', strtotime($course->start_date))}}
	                                	</span>
	                                </p>
	                            </div>
	                       </div>
						</div>
					</section>
				</div>
			</section>

@endsection