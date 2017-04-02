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
@endsection