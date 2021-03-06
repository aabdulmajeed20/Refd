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
																	<h5>جمعية البر بالرياض</h5>
																	<span>قبل 36 دقيقة</span>
																</div>
																<p>نشكر لكم دعمكم السخي ونتطلع للمزيد من المشاريع المشتركة </p>
															</div>
														</a>
													</li>

													<li class="active-message">
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status offline"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>جمعية مساجد الطرق</h5>
																	<span>قبل ساعتين</span>
																</div>
																<p>نشكر لكم تعاونكم</p>
															</div>
														</a>
													</li>
													
													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status busy"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>جمعية إنسان لرعاية الأيتام</h5>
																	<span>أمس</span>
																</div>
																<p>السلام عليكم، نود الاستفسار عن موعد الدفعات القادمة</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status online"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>جمعية إطعام</h5>
																	<span>02.01.2020</span>
																</div>
																<p>لدينا استفسار بخصوص المشروع الخاص بالتحفيظ</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status busy"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>جمعية البر بالدمام</h5>
																	<span>03.01.2020</span>
																</div>
																<p>نفيدكم بأنه تم رفع المتطلبات في صفحة المشروع</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status online"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>جمعية رواء لسقيا الماء</h5>
																	<span>05.01.2020</span>
																</div>
																<p>نتشرف بزيارتكم لفرع الجمعية بالمدينة المنورة</p>
															</div>
														</a>
													</li>

													

													<li>
														<a href="#">
															<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""><span class="_user_status online"></span></div>

															<div class="message-by">
																<div class="message-by-headline">
																	<h5>جمعية ابن باز لتيسير الزواج</h5>
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
													<div class="dash-msg-text"><p>السلام عليكم</p></div>
												</div>

												<div class="message-plunch me">
													<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
													<div class="dash-msg-text"><p>وعليكم السلام، حياكم الله</p></div>
												</div>

												<div class="message-plunch">
													<div class="dash-msg-avatar"><img src="https://image.flaticon.com/icons/png/512/145/145849.png" alt=""></div>
													<div class="dash-msg-text"><p>شكرًا لموافقتكم على دعم المشروع، نود الاستفسار عن موعد الدفعات المالية القادمة</p></div>
												</div>

												<div class="message-plunch">
													<div class="dash-msg-avatar"><img src="https://image.flaticon.com/icons/png/512/145/145849.png" alt=""></div>
													<div class="dash-msg-text"><p>متى يحين وقتها؟</p></div>
												</div>

												<div class="message-plunch me">
													<div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
													<div class="dash-msg-text"><p>ستكون بإذن الله بعد شهر من الآن، نرجو التأكد من رفع جميع المتطلبات حتى يتم الدعم</p></div>
												</div>

												<div class="message-plunch">
													<div class="dash-msg-avatar"><img src="https://image.flaticon.com/icons/png/512/145/145849.png" alt=""></div>
													<div class="dash-msg-text"><p>نشكر لكم تعاونكم</p></div>
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