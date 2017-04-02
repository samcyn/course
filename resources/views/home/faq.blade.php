@extends('layouts.new-switch')

@section('content')
 	<section class="clearfix height-350p" style="background-image: url('assets/img/banner.png'); 
			background-repeat: no-repeat; background-size: cover; background-position: 0px -150px;">
				<div class="container">
					
				</div>
			</section>

            <section class="clearfix p-t-50 p-b-50 faq">
				<div class="container">
					
					<div class="row">
                        
                        <div class="col-md-8">
                            <h3 class="heading hr-blue m-t-0 text-left">Who is Switch?</h3>
                            <p class="align-justify">
                               At SWITCH!, our goal is to increase the pool of quality developers in the country and as such helping people get employed and companies innovative. We are focus on the success of every persons that join SWITCH!
                            </p>

                            <h3 class="heading hr-blue m-t-0 text-left">Am I eligible?</h3>
                            <p class="align-justify">
                                Who said you are not? Only you can prove that! We assess everyone who apply to join our programme and help guide them to make right decision as to which segment of tech career they should settle for.
                            </p>

                             <h3 class="heading hr-blue m-t-0 text-left">How can I be in Switch?</h3>
                            <p class="align-justify">
                                We have programme for everyone. If you are a young graduate and looking for an opportunity to get your foot in the door, join our fellowship. If you are willing switch your career or advance current one, join our immersive courses to be on your way to success.
                            </p>

                             <h3 class="heading hr-blue m-t-0 text-left">How much does it cost?</h3>
                            <p class="align-justify">
                                Our prices range from course to course but we have tried as much as possible to heavily discount our prices to give access to more people to SWITCH!
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="hr-blue">Related Question</h4>
                            <ul class="list_style_none ">
                                <li ><a href="faq.html">Am I eligible?</a></li>
                                <li>
                                    <a href="faq.html">How can I be in Switch?</a>
                                </li>
                                <li>
                                    <a href="faq.html">What's the length of the course?</a>
                                </li>
                                <li>
                                    <a href="faq.html">How much does it cost?</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
				</div>
			</section>

            <section class="faq-contact">
                <div class="container">
					<h4 class="hr-white text-center">Not satisfy? </h4>
                    <h3 class="text-center heading hr-white m-t-0">Contact Us</h3>
					<br><br>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
							<form>
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<input type="text" class="form-control" id="subject" placeholder="Subject">
								</div>
								<div class="form-group">
									<label for="comment">Comment</label>
									<textarea class="form-control" id="comment" rows="3"></textarea>
								</div>
								<button type="submit" class="btn btn_brand">Submit</button>
							</form>
						</div>
                    </div>
                </div>
            </section>
            <footer class="footer dis-flex clearfix">
				<div class="container">
					<!--navbar begins here-->
					<ul class="p-l-0">
						<li>
							<img src="assets/img/logo/logo.svg" width="150px">
							<span class="copyright">© 2016 Switch All rights reserved</span>
						</li>
						<ul class="pull-right">
							{{--<li>
								<a href="#">Tell a Friend</a>
							</li>--}}
							<li>
								<a href="/about-us">About</a>
							</li>
							<li>
								<a href="/faq">FAQs</a>
							</li>
						</ul>
					</ul>
					<!--navbar ends here-->
				</div>
			</footer>
@endsection