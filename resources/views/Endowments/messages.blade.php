@extends('Endowments.layout')

@section('pageTitle')
	<div class="page-title bg-cover"
	style="background:url({{URL::to('src/img/Header1.jpg')}})no-repeat;"
	data-overlay="5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12"></div>
		</div>
	</div>
	</div>
@endsection

@section('content')
    @include('Endowments.sideBar', ['endowment' => $endowment])

						<!-- Item Wrap Start -->
						<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<!-- Breadcrumbs -->
									<div class="bredcrumb_wrap">
										<nav aria-label="breadcrumb">
										  <ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
											<li class="breadcrumb-item"><a href="#">لوح التحكم</a></li>
											<li class="breadcrumb-item active" aria-current="page">الرسائل</li>
										  </ol>
										</nav>	
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									
									<!-- Convershion -->
									<div class="messages-container margin-top-0">
										<div class="messages-headline">
											<h4>الجمعيات الخيرية</h4>
											<a href="#" class="message-action"><i class="ti-trash"></i> حذف المحادثة</a>
										</div>

										<div class="messages-container-inner">

											<!-- Messages -->
											<div class="dash-msg-inbox">
												<ul>
													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status online"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Tilly Bartlett</h5>
																	<span>36 min ago</span>
																</div>
																<p>Hello, I am a web designer with 5 year.. </p>
															</div>
														</a>
													</li>

													<li class="active-message">
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status offline"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>George Howarth</h5>
																	<span>2 hours ago</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>
													
													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status busy"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Harriet Ball</h5>
																	<span>Yesterday</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status online"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Sienna Bruce</h5>
																	<span>02.01.2020</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status busy"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Leo Stewart</h5>
																	<span>03.01.2020</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status online"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Shaurya Preet</h5>
																	<span>05.01.2020</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status offline"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Dan Preet</h5>
																	<span>04.01.2020</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status online"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Maddison</h5>
																	<span>31.05.2019</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status busy"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Maddison</h5>
																	<span>27.05.2019</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status busy"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Eleanor Lloyd</h5>
																	<span>24.05.2019</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status offline"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Anna Curtis</h5>
																	<span>05.01.2020</span>
																</div>
																<p>Hello, I am a web designer with 5 year..</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status online"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>Tyler Fraser</h5>
																	<span>07.01.2020</span>
																</div>
																<p>السلام عليكم، أود الاستفسار عن...</p>
															</div>
														</a>
													</li>

												</ul>
											</div>
											<!-- Messages / End -->

											<!-- Message Content -->
											<div class="dash-msg-content">

												<div class="message-plunch">
													<div class="dash-msg-avatar"><img src="https://image.flaticon.com/icons/png/512/145/145849.png" alt=""></div>
													<div class="dash-msg-text"><p>Hello, Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p></div>
												</div>

												<div class="message-plunch me">
													<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
													<div class="dash-msg-text"><p>looked up one of the more obscure Latin words, consectetur, from a Lorem</p></div>
												</div>

												<div class="message-plunch">
													<div class="dash-msg-avatar"><img src="https://image.flaticon.com/icons/png/512/145/145849.png" alt=""></div>
													<div class="dash-msg-text"><p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p></div>
												</div>

												<div class="message-plunch me">
													<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
													<div class="dash-msg-text"><p>please consider donating a small sum to help pay for the hosting and bandwidth bill.</p></div>
												</div>

												<div class="message-plunch">
													<div class="dash-msg-avatar"><img src="https://image.flaticon.com/icons/png/512/145/145849.png" alt=""></div>
													<div class="dash-msg-text"><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p></div>
												</div>

												<div class="message-plunch me">
													<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
													<div class="dash-msg-text"><p>numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p></div>
												</div>

												<div class="message-plunch">
													<div class="dash-msg-avatar"><img src="https://image.flaticon.com/icons/png/512/145/145849.png" alt=""></div>
													<div class="dash-msg-text"><p>But I must explain to you how all this mistaken idea of denouncing pleasure</p></div>
												</div>
												
												<!-- Reply Area -->
												<div class="clearfix"></div>
												<div class="message-reply">
													<textarea cols="40" rows="3" class="form-control with-light" placeholder="رسالتك ...."></textarea>
													<button class="btn dark-2">ارسال الرسالة</button>
												</div>
												
											</div>
											<!-- Message Content -->

										</div>

									</div>
									
								</div>
							</div>
							
						</div>
			<!-- ============================ Main Section End ================================== -->
            @endsection