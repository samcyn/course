@extends('layouts.switch')

@section('content')
<section class="forms clearfix m-t-80">
				<div class="container">
					<section class="text-center enrollment">
						<img src="/assets/img/success.png">
						<h3 class="enroll_title">Enrollment Successful</h3>
						<p class="text-center">Your enrollment for the {{$course->name}} has been<br> received. Course details will be sent to you via email. Looking<br> forward to watching you grow!</p>
						<div style="width: 156px; height: 1px; background-color: #ebebeb; margin: 20px auto;"></div>
						<p class="friend">TELL YOUR FRIENDS</p>
						<div class="social_button">
							<a href="#" class="btn">Twitter</a>
							<a href="#" class="btn btn-primary">Facebook</a>
						</div>
					</section>
				</div>
			</section>
@endsection