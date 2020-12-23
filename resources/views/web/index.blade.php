@extends('layouts.web')
@section('content')

<div role="main" class="main" id="home">
    <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <iframe class="video-iframe" src="https://player.vimeo.com/video/478550925?title=0&byline=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen ></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-container rev_slider_wrapper">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
            <ul>
                <li class="slide-overlay" data-transition="fade">
                    <img src="{{ URL::asset('img/slides/new-york.jpeg') }}"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                    <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 text-center"
                        data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center" data-voffset="['-100','-30','-30','-30']"
                        data-fontsize="['60','60','60','60']"
                        data-lineheight="['65','55','55','95']">Taking Investor Access into <br>the digital age</h1>
                    <a class="tp-caption btn btn-primary btn-rounded font-weight-semibold"
                       data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                       data-hash
                       data-hash-offset="85"
                       data-toggle="modal"
                       data-target="#video-modal"
                       data-x="center" data-hoffset="0"
                       data-y="center" data-voffset="['133','133','133','255']"
                       data-whitespace="nowrap"
                       data-fontsize="['14','14','14','33']"
                       data-paddingtop="['15','15','15','40']"
                       data-paddingright="['45','45','45','110']"
                       data-paddingbottom="['15','15','15','40']"
                       data-paddingleft="['45','45','45','110']">WHAT WE DO</a>
                </li>
            </ul>
        </div>
    </div>
    <section id="about" class="section section-height-3 border-0 m-0 p-0 appear-animation" data-appear-animation="fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="container m-3 p-5">
                    <h1>Who<span class="font-weight-bold"> We Are</span></h1>
                    <h2 class="about-h2">Magellan Yates is a financial communications and <strong>content creation platform</strong> with a proprietary
                        video technology that aims to take corporate access into the digital age.</h2>
                    <h2 class="about-h2">Magellan Yates is a <strong>MIFID2 compliant platform</strong> that investors can embrace, to hear straight from
                        corporate issuers.</h2>
                    <h2 class="about-h2">Magellan Yates believes the future of investor communication is <strong>“IR Digital Marketing”</strong>.</h2>
                </div>
            </div>
            <div class="col-lg-6 bg-red">
                <div class="container m-3 p-5">
                    <h3 class="text-white font-weight-bold">7 reasons why IRs should adapt video marketing </h3>
                    <ul class="text-white p-0">
                        <li>Converting new investors: Product video can increase sales conversions by 80%.  Correlation for corporate videos, increase transparency and disclosure</li>
                        <li>ROI is high: over 80% of companies that use video report good ROI.  Technology has lowered the cost of video production which can increase corp profile</li>
                        <li>Video builds trust: Trust is the foundation of conversions and sales. Emphasize the “G” in ESG</li>
                        <li>Video appeals to mobile users. 90% of consumers watch videos on their mobile devices.  Mobile video consumption growing 100% yoy.  Investors are people to.</li>
                        <li>Video marketing can explain everything. 98% of video marketers say video helps increase understanding.  IR is telling a story.  Video is the most effective way.</li>
                        <li>Video engages: Video is a great tool for learning and its easy to use. Reading research is passé. Investors want to see the product/management in action</li>
                        <li>Video is affordable and no longer frustrating IR and investor budgets are constrained.  Technology has made video production reasonable which is driving the base case for video in IR</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="section section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="services-back-button">
            <h4>
							<span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1" onClick="showServices()">
								<i class="fa fa-arrow-left"></i> Back to services</span>
            </h4>
        </div>
        <div id="services-content" class="container my-3">
            <div class="row mb-5">
                <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <h2 class="font-weight-bold text-color-light mb-2">Services</h2>
                    <p class="text-color-light opacity-7">MORE THAN A SIMPLE VIDEO PLATFORM</p>
                </div>
            </div>
            <div class="row mb-lg-4">
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-check text-color-light"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold text-color-light text-4 mb-2">Video communications Portal</h4>
                            <p class="text-color-light opacity-7">Facilitation of virtual 1on1 and group
                                meetings.</p>
                            <span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1 cur-pointer" onClick="showServiceImage(1)">See More...</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-check text-color-light"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold text-color-light text-4 mb-2">Digital Video Marketing and content production</h4>
                            <p class="text-color-light opacity-7">Using our infrastructure, investor relations, financial marketers, and research providers can record video content which we edit, produce, and distribute to institutional investors.</p>
                            <span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1 cur-pointer" onClick="showServiceImage(2)">See More...</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-check text-color-light"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold text-color-light text-4 mb-2">Consulting and Script preparation</h4>
                            <p class="text-color-light opacity-7">MY can help corporate executives and research providers organize their reports and thoughts into effective video content.</p>
                            <span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1 cur-pointer" onClick="showServiceImage(3)">See More...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-check text-color-light"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold text-color-light text-4 mb-2">Large Event production</h4>
                            <p class="text-color-light opacity-7">We produce large scale video live stream events which include Investor/Capital markets Days, AGMs, and Product launches.</p>
                            <span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1 cur-pointer" onClick="showServiceImage(4)">See More...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tech" class="section section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container my-3">
            <div class="row mb-5">
                <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <h2 class="font-weight-bold text-color-dark mb-2">Our Technology</h2>
                    <p class="text-color-dark opacity-7">Magellan Yates created a proprietary video technology platform specifically for corporate access</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold text-color-dark text-4 mb-2">Adaptive to network conditions</h4>
                            <p class="text-color-dark opacity-7">MY’s platform is browser based that allows to adapt to a wide array of network conditions. The important competitive advantage produces a skilled use of bandwidth conveys the best possible video and voice and communications</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    <img src="img/tech.png" width="100%">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeftShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold text-color-dark text-4 mb-2">Secure</h4>
                            <p class="text-color-dark opacity-7">Secure RTP protocol is used for authentication and encryption and for both voice and video. This is exclusively beneficial over WiFi networks and also prevents eavesdrop of the video and voice.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold text-color-dark text-4 mb-2">Advanced video and voice quality</h4>
                            <p class="text-color-dark opacity-7">VP8 video codec and Opus Audio codec ensures compatibility and avoids the need for malicious code and downloads</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="projects" class="container">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-lg-9 text-center">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-bold mb-2">Projects</h2>
                    <p class="mb-4">COMPANIES OF ALL SIZES AND GLOBAL DOMICILES USE MAGELLAN YATES FOR DIGITAL MEDIA AND VIRTUAL EVENTS</p>
                </div>
            </div>
        </div>
        <div class="row pb-5 mb-5">
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                <div class="portfolio-item">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/projects-1.jpg" class="img-fluid border-radius-0" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Virtual Corporate Conference sponsored by a leading stock exchange and a global bank.</span>
										</span>
									</span>
								</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                <div class="portfolio-item">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/projects-2.jpg" class="img-fluid border-radius-0" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Virtual Investor/Capital Markets Day for a global energy conglomerate.</span>
										</span>
									</span>
								</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                <div class="portfolio-item">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/projects-3.jpg" class="img-fluid border-radius-0" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Produced an ESG focused and targeted video for a global leader</span>
											</span>
									</span>
								</span>
                </div>
            </div>
        </div>
    </div>
    <section id="clients" class="section section-height-4 mt-0 mb-3 border-0 overlay overlay-show overlay-op-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="font-weight-bold text-color-light mb-2">Clients</h2>
                            <p class="text-color-light opacity-7">OUR HAPPY CLIENTS TALK ABOUT US</p>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-style-2 mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 100}">
                        <div class="text-center">
                            <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                                <blockquote>
                                    <p class="text-5 line-height-5 mb-0">The Virtual conference was professionally produced, and I was very happy with the investor participation.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">- Listed regional Telecom provider in Latin America</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                                <blockquote>
                                    <p class="text-5 line-height-5 mb-0">The video that MY produced for us have been great for targeting new investors.  The process has been easy and efficient.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">- Leading Chinese education company</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                                <blockquote>
                                    <p class="text-5 line-height-5 mb-0">Magellan Yates is not just a technology provider but has a vast investor client database which has been very helpful in expanding our exposure.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">- Global leader in construction materials</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="section section-height-3 border-0 m-0 p-0 appear-animation" data-appear-animation="fadeIn">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-lg-9 text-center">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-bold mb-2">Pricing</h2>
                    <p class="mb-4">LET'S TALK ABOUT THE RIGHT PLAN FOR YOU</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="container m-3 p-5">
                    <h3 class="font-weight-bold">Video Production</h3>
                    <ul class="p-10">
                        <li>End to end solution</li>
                        <li>Filming</li>
                        <li>Editing</li>
                        <li>Final production</li>
                        <li>Distribution</li>
                    </ul>
                    <a class="tp-caption btn btn-primary btn-rounded font-weight-semibold" href="#contact">LET'S TALK</a>
                </div>
            </div>
            <div class="col-lg-4 bg-red">
                <div class="container m-3 p-5">
                    <h3 class="font-weight-bold text-white">Live Stream events</h3>
                    <p class="text-white">State of the art remote and on-site video streaming quality.</p>
                    <p class="text-white">Specialized project mangers for complete delivery</p>
                    <p class="text-white">Our no concern pledge for all events where we work with client to oversea the entire operation of the live stream broadcast, so the event occurs without incidents</p>
                    <a class="tp-caption btn btn-primary btn-rounded font-weight-semibold" href="#contact">LET'S TALK</a>
                </div>
            </div>
            <div class="col-lg-4 bg-blue">
                <div class="container m-3 p-5">
                    <h3 class="text-white font-weight-bold">Virtual corporate access  and roadshows</h3>
                    <p class="text-white">MY provides a MIFID2 compliant investor access service specializing in virtual one on one and small group meetings.  All regions are covered.</p>
                    <p class="text-white">Virtual Roadshows are priced based on number of days needed etc. </p>
                    <a class="tp-caption btn btn-primary btn-rounded font-weight-semibold" href="#contact">LET'S TALK</a>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="container pb-4">
        <div class="row pt-5 mt-5 mb-4">
            <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
                <h2 class="font-weight-bold mb-1">Team</h2>
                <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
            </div>
        </div>
        <div class="row pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="col-6 offset-3 col-sm-5 offset-sm-4 col-md-4 offset-md-4 col-lg-2 offset-lg-5 mb-4 mb-lg-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="img/team/thomas.jpg" class="img-fluid" alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Thomas Samuelson</h3>
									<span class="text-2 mb-0">FOUNDER</span>
									<span class="thumb-info-social-icons">
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</span>
								</span>
							</span>
            </div>
        </div>
        <div class="row pb-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom p-3 bg-blue">
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-white text-4 line-height-1 mt-3 mb-0">Matias Sampietro</h3>
									<span class="text-2 mb-0 text-color-white font-weight-bold">CTO - Technology and Research</span>
<!--									<span class="thumb-info-caption-text pt-1 text-color-white">Software Analyst and web development expert.</span>-->
								</span>
							</span>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-sm-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom p-3 bg-blue">
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-white text-4 line-height-1 mt-3 mb-0">Christine Pang</h3>
									<span class="text-2 mb-0 font-weight-bold text-color-white">Business Development - Asia</span>
<!--									<span class="thumb-info-caption-text pt-1 text-color-white">A brief description of Christine</span>-->
								</span>
							</span>
            </div>
            <div class="col-sm-6 col-lg-4 offset-sm-3 offset-lg-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom p-3 bg-blue">
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-white text-4 line-height-1 mt-3 mb-0">Eve Chaikin</h3>
									<span class="text-2 mb-0 font-weight-bold text-color-white ">Business Development – US/Latam</span>
<!--									<span class="thumb-info-caption-text pt-1 text-color-white">A brief description of Eve</span>-->
								</span>
							</span>
            </div>
        </div>
    </section>

    <section id="contact" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 p-5 my-5 contact-box">
                    <div class="px-4">
                        <h2 class="font-weight-bold line-height-1 mb-2 text-color-light">Contact Us</h2>
                        <p class="text-3 mb-4">STAY IN TOUCH WITH US</p>
                        <form class="form-style-2 pr-xl-5" action="{{URL::to('/contact')}}" method="POST">
                            {{ csrf_field() }}
                            <div id="contact_id"></div>
                            @if (session('message'))
                            <div class="contact-form-success alert alert-success mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>
                            @endif
                            @if (count($errors) > 0)
                            <div class="contact-form-error alert alert-danger  mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>
                            @endif

                            <div class="form-row">
                                <div class="form-group col-xl-4">
                                    <input type="text" id="name"  maxlength="100" class="form-control" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group col-xl-8">
                                    <input type="email" id="email" value="" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <textarea maxlength="5000" id="message"  rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div>
                                {!!  GoogleReCaptchaV3::renderOne('contact_id','contact') !!}
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="submit" value="SEND" class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-primary border-0 m-0">
        <div class="container">
            <div class="row justify-content-center text-center text-lg-left py-4">
                <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
                        <div class="feature-box-icon">
                            <i class="icon-location-pin icons text-color-light"></i>
                        </div>
                        <div class="feature-box-info pl-1">
                            <h5 class="font-weight-light text-color-light opacity-7 mb-0">ADDRESS</h5>
                            <p class="text-color-light font-weight-semibold mb-0">41 Purdy Ave #295<br>Rye, New York 10580</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
                    </div>
                </div>
                <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <div class="feature-box feature-box-style-2 d-block d-lg-flex">
                        <div class="feature-box-icon">
                            <i class="icon-share icons text-color-light"></i>
                        </div>
                        <div class="feature-box-info pl-1">
                            <h5 class="font-weight-light text-color-light opacity-7 mb-0">FOLLOW US</h5>
                            <p class="mb-0">
                                <span class="social-icons-twitter pl-3"><a href="http://www.twitter.com/" target="_blank" class="text-color-light font-weight-semibold" title="Twitter"><i class="mr-1 fab fa-twitter"></i> TWITTER</a></span>
                                <span class="social-icons-instagram pl-3"><a href="http://www.linkedin.com/" target="_blank" class="text-color-light font-weight-semibold" title="Linkedin"><i class="mr-1 fab fa-linkedin"></i> LINKEDIN</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {!!  GoogleReCaptchaV3::init() !!}
</div>
@endsection


