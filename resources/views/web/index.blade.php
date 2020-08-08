@extends('layouts.web')

@section('content')


		<!-- SECTION MAIN -->
		<section class="section-divider textdivider divider1 level" id="home">

				<div class="container-fluid text-center">
					<div class="display: table-cell; vertical-align: middle;">
						<h2 style="color: white !important;" class="hidden-sm hidden-xs"><strong>Taking Corporate Access into the <br/>Digital Age</strong></h2>
						<h2 style="color: black !important;" class="hidden-lg hidden-md"><strong>Taking Corporate Access into the <br/>Digital Age</strong></h2>
					</div>

					<div class="text-center">
						<a class="btn btn-primary btn-lg" style="margin-top: 50px" href="{{ url('are-you-a-institutional-investor')}}"><strong>Investor Login</strong></a>
					</div>
				</div>
		</section>

		<!--
		=== WHY MYA SECTION
		-->
		<section class="textdivider" id="why">
			<div class="container text-center">
				<h1 class="black">WHO IS MY</h1>
				<hr/>
				<p class="black">Magellan Yates (MY) is the first and only global web-based video platform that delivers a direct connection between the buy-side Investor and companies they invest in, making the "art" of corporate access more efficient.</p>
			</div>
		</section>

		<section>
			<div class="row">
				<!--<div class="col-xs-12 col-sm-12 col-md-3" style="padding-right:0; height:330px">
					<span  style="color: #428bca; position:absolute; bottom:0; right:0; font-weight: bold">CLICK HERE TO PLAY VIDEO <i class="fa fa-arrow-right"></i></span>
				</div>-->
				<div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center">
				<span  class="click-here-arrow">CLICK HERE TO PLAY VIDEO <i class="fa fa-arrow-right"></i></span>
					<iframe class="video-iframe" src="https://player.vimeo.com/video/361685159?title=0&byline=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen ></iframe>
				</div>
			</div>
		</section>
		<!--
		== END OF WHY MYA SECTION
		-->

		<!--
		=== WHAT WE DO SECTION
		-->

		<section class="textdivider" id="whatwedo">
			<div class="container text-center">
				<h1 class="black">What we do<br/>for Investors</h1>
				<hr/>
			</div>

			<div class="container-fluid text-center">

				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<p class="black"><span class="fa fa-video-camera"></span> <br/>Using established video technology to deliver high-quality content "corporate access 2.0"</p>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<p class="black"><span class="fa fa-users"></span><br/>Making interaction between corporate management and their Investors more efficient</p>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<p class="black"><span class="fa fa-minus"></span><br/>Eliminating the biased "middleman" through a compliant portal (MiFID2)</p>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<p class="black"><span class="fa fa-key"></span><br />Giving access to the "real story" and eliminating the "pay as you go" sell-side alternative</p>
				</div>
			</div>
		</section>

		<section class="mountain">

		</section>

		<section class="textdivider" id="whatwedo">
                        <div class="container text-center">
                                <h1 class="black">What we do for<br/>Listed Companies</h1>
				<hr/>
                        </div>

                        <div class="container-fluid text-center">

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <p class="black"><span class="fa fa-vimeo"></span> <br/>A platform for video content directed to Institutional Investors</p>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <p class="black"><span class="fa fa-comments-o"></span><br/>An unbiased outlet for communicating a message</p>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <p class="black"><span class="fa fa-mobile"></span><br/>An efficient technology-based solution to enhance the IR function</p>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <p class="black"><span class="fa fa-line-chart"></span><br />A true value proposition for taking "corporate access" into the 21<sup>st</sup> Century</p>
                                </div>
                        </div>
                </section>

		<section class="rio">

		</section>

		<!--
		=== ABOUT SECTION
		-->
		<section class="textdivider" id="about">
			<div class="container text-center">
				<h1 class="black">ABOUT</h1>
				<hr/>
				<p class="black">Magellan Yates was founded by buy-side professionals with over 30 years of financial service and investing experience in international markets. As fundamental investors, the founders faced big data overkill, which resulted in direct access to company managements becoming the most important tool to make investment decisions. The founders realized that “corporate access” was stuck in the dark ages and have subsequently used bespoke technology to  create a platform to "disrupt" this service.</p>
			</div>
		</section>



		<section class="section-divider divider6" id="contact">

			<div class="container">
                @if (session('message'))
                <div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <strong>Thanks!</strong> Your message has been sent successfully.
                </div>
                @endif
                @if (count($errors) > 0)
                <div class="alert alert-danger fade in alert-dismissable" style="margin-top:18px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <strong>The recaptcha field is required</strong>
                </div>
                @endif
				<h1><strong>CONTACT US</strong></h1>
                <h2><strong>info@magyates.com</strong></h2>
				<hr>
				<form role="form" class="form-horizontal col-md-6 col-md-offset-3" action="{{URL::to('/contact')}}" method="POST">
                    {{ csrf_field() }}
						<div class="form-group">
							<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
								<p><strong>Name </strong><span class="red">*</span></p>
							</div>
							<div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required  />
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
								<p><strong>E-mail </strong><span class="red">*</span></p>
							</div>
							<div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
								<input type="text" class="form-control" id="email" name="email" placeholder="Enter your e-mail" required />
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
								<p><strong>Message </strong><span class="red">*</span></p>
							</div>
							<div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
								<textarea required class="form-control" name="message" id="message" placeholder="Enter your message" rows="3"></textarea>
							</div>
						</div>
                        <div class="form-group">
                            <div class="col-lg-12"><div class="pull-right">{!! Recaptcha::render() !!}</div></div>
                        </div>
						<div class="form-group">
							<input type="submit" class="btn btn-default" name="submit" value="Send" />
						</div>
				</form>
			</div>
		</section>



@endsection


