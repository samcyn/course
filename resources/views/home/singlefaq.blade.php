@extends('layouts.new-switch')

@section('content')
<section class="clearfix height-350p" style="background-image: url('/assets/img/about/bg.jpeg')">
				<div class="container">
					
				</div>
			</section>

            <section class="clearfix p-t-50 p-b-50 faq">
				<div class="container">
					
					<div class="row">
                        
                        <div class="col-md-8">
                            <h3 class="heading hr-blue m-t-0 text-left">{{$faq->title}}</h3>
                            <p class="align-justify">
                                {{$faq->content}}
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="hr-blue">Related Question</h4>
                            <ul class="list_style_none ">
                                 @foreach($other_faqs as $faq)
                                <li>
                                    <a href="/faq/{{$faq->slug}}">{{$faq->title}}</a>
                                </li>
                                @endforeach
                                
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
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" placeholder="Password">
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
							<img src="/assets/img/logo/logo.svg" width="150px">
							<span class="copyright">© 2016 Great Simple All rights reserved</span>
						</li>
						<ul class="pull-right">
							<li>
								<a href="#">Tell a Friend</a>
							</li>
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