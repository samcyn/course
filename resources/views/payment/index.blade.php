@extends('layouts.switch')

@section('content')
<section class="forms clearfix">
				<div class="container" style="margin: 0 auto;">
					<section class="intros clearfix p-t-60">
						<div class="col-md-7">
							<h3 class="m-t-0">{{$applicant->course->name}}</h3>
							<form>
								<div class="row">
								
									<div class="col-md-7">
										
									    <label class="control-label">Select a payment method</label>
									   
										<div class="form-group">
										    <label class="radio-inline"><input type="radio" name="method">Bank Transfer</label>
											<label class="radio-inline"><input type="radio" name="method" onclick="payWithPaystack({{$applicant->id}})">ATM Card</label>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
										    <select id="selectedBank" class="selectpicker form-control" title="Choose Your Preferred Bank" name="range">
								  			  <option value="gtbank">GTBank</option>
											  <option value="uba">UBA</option>
								
											</select>
										</div>
									</div>
									<div class="col-md-7">
										<div class="clearfix text-center bank_details" id="gtbank">
										    <img src="/assets/img/gtb.png">
										    <h6><strong>Guaranty Trust Bank</strong></h6>
										    <ul class="inline_block m-b-0" id="gtbank">
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
										    <img src="/assets/img/gtb.png">
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
									<div class="col-md-5">
										<div class="clearfix">
										    <p>Note: Please include the following code int the comment section when making payment: <b>SWITCHFED24<b></p>
										</div>
									</div>
								</div>
								<div class="clearfix m-t-20">
									{{--<button type="submit" class="btn btn-default pull-left">
										Back
									</button>--}}
									<a href="/checkout/{{$applicant->id}}" class="btn btn_brand pull-right">Continue to Payment</a>
								</div>
								
							</form>
						</div>
						<div class="col-md-4 col-md-offset-1">
							<div class="card" style="border: 1px solid #EEE;">
	                            <div class="header text-center dis-flex" style="border: none;">
	                                <img src="/assets/img/frontend-icon@2x.png">
	                            </div>
	                            <div class="content text-center">
	                            	<p class="course_price">NGN {{number_format($applicant->course->price)}}</p>
	                                <h3 class="course_title">{{$applicant->course->name}}</h3>
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
@endsection