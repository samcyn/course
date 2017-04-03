@extends('layouts.switch')

@section('content')
<section class="course clearfix">
				<div class="container">
					<h3 class="text-center heading hr-white">Our Immersive Courses</h3>
					<br><br>
					<div class="row">
                    @foreach($courses as $course)
						<div class="col-md-3">
							<div class="card">
	                            <div class="header text-center dis-flex">
	                                <img src="assets/img/{{$course->image_reference}}">
	                            </div>
	                            <div class="content">
	                                <h5 class="text-center">{{$course->name}}</h5>
	                                <p class="text-center">
	                                	{{$course->short_desc}}
	                                </p>
	                                <a href="/courses/{{$course->slug}}" class="btn btn-block btn_brand">view course</a>
	                            </div>
	                       </div>
						</div>
                    @endforeach
				
					</div>
				</div>
			</section>
			<footer class="footer dis-flex clearfix height-120">
				<div class="container">
					<!--navbar begins here-->
					<ul class="p-l-0">
						<li>
							<img src="assets/img/logo/logo.svg" width="150px">
							<span class="copyright">© {{date('Y')}} Switch All rights reserved</span>
						</li>
						<ul class="pull-right">
							<!--<li>
								<a href="#">Tell a Friend</a>
							</li>-->
							<li>
								<a href="about_us.html">About</a>
							</li>
							<li>
								<a href="faq.html">FAQs</a>
							</li>
						</ul>
					</ul>
					<!--navbar ends here-->
				</div>
			</footer>
@endsection