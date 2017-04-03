@extends('layouts.switch')
@section('content')

<section class="forms clearfix">
				<div class="container" style="width: 60%; margin: 0 auto;">
					<section class="intros clearfix p-t-60">
						<div class="col-md-6 col-md-offset-3">
							<div class="card">
	                            <div class="header text-center dis-flex">
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
	                                <h3 class="course_title">{{$course->name}}</h3>
	                                <p class="course_duration">
	                                	<span>
	                                		<i class=""></i>
	                                		{{$course->duration}}
	                                	</span>
	                                	<span>
	                                		<i class=""></i>
											starts {{date('d M, Y', strtotime($course->start_date))}}
	                                	</span>
	                                </p>
	                                <a href="/courses/{{$course->slug}}/apply" class="btn btn_brand btn_enroll">Enroll for this Course</a>
	                            </div>
	                       </div>
						</div>
					</section>
					<hr>
					<section class="description">
						{!! $course->description !!}
					</section>
					<hr>
					<div class="text-center">
						<a href="/courses/{{$course->slug}}/apply" class="btn btn_brand btn_enroll">Enroll for this Course</a>
					</div>
					
				</div>
			</section>
@endsection