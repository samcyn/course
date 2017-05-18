@extends('layouts.new-switch')

@section('content')
 	<section class="clearfix height-350p" style="background-image: url('assets/img/banner.jpg'); 
			background-repeat: no-repeat; background-size: cover; background-position: 0px -10px;">
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
                            <!--
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
                                
                            </ul>-->
                        </div>
                    </div>
				</div>
			</section>

			<section class="faq-contact hr-white">
                <div class="container">
					<h4 class="hr-white text-center">Not satisfied ?</h4>
                    <h3 class="text-center heading  m-t-0">Contact Us</h3>
					<br><br>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
							<ul class="list_style_none text-center f-15">
								<li class="m-b-10"><img src="/assets/img/fav/email.png"> info@switch.ng</li>
								<li class="m-b-10"><img src="/assets/img/fav/phone.png"> +2349089667871</li>
								<li><img src="/assets/img/fav/location.png"> 1st Floor Adepate House<br> 42 Montgomery Road Yaba Lagos Nigeria.</li>
							</ul>
					
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