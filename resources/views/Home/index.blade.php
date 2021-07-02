@extends('Home.layout')

@section('navigation')
	@include('Home.Common.navigation')
@endsection

@section('content')
	

		
            
            <!-- Start Navigation -->
			
			
			<!-- End Navigation -->
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="hero-banner full jumbo-banner" style="background:#f4f9fd url({{URL::to('src/img/bg2.png')}});">
				<div class="container">
					<div class="row align-items-center">	
					
						<div class="col-lg-7 col-md-8">
							<a href="#" class="header-promo light w-inline-block">
								<div class="header-promo-text">منصة خيرية </div>
								<div class="label bg-success">موثوقة</div>
							</a>
							<h1>
								منصة  
								<span class="text-info">رفد</span>
								للمشاريع الخيرية
							</h1>
							<p class="lead">حيث الخير والعطاء</p>		
						</div>
						
						<div class="col-lg-5 col-md-4">
							<img src="{{URL::to('src/img/hero-bg.png')}}" alt="latest property" class="img-fluid">
						</div>
					
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			<!-- ========================== About Elements ============================= -->
			<section id="about" data-aos="fade-up">
				<div class="container">
					<div class="row align-items-center">
								
						
						
						<!-- Single Box -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="about-captione">
								<h6 class="text-blue">ما هي منصة رفد</h6>
								<h2>نماء للخير .. وتعظيم للأثر</h2>
								<p>حيث يوجد العديد من المشاريع التي تهدف الى الارتقاء بالعمل الخيري وتعظيم منفعته، وُجدت منصة رفد، وهي مشروع خيري يهدف إلى تنمية المشاريع الخيرية في مختلف المجالات من خلال الربط بين الجمعيات الخيرية والأوقاف المانحة. وتلتزم منصة رِفد في دعمها بهذه المبادئ:</p>
								<ul class="lists-3 mt-3">
									<li>موثوقية الجمعيات المسجلة وصلاحيتها </li>
									<li>محاولة إبراز أكثر المشاريع الخيرية احتياجًا للدعم لتعظيم الأثر</li>
									<li>الشفافية في عرض تفاصيل المشاريع وثمارها</li>
								</ul>
								<a href="#" class="btn dark-2 btn-rounded">تفاصيل أكثر</a>
							</div>
						</div>
						<!-- Single Box -->
						<div class="col-lg-6 col-md-6 col-sm-12 js-tilt" data-tilt>
							<img src="https://www.watchonista.com/sites/default/files/watchographer/1/paragraphs/472041/pictures/charity_water_2.jpg" alt="" class="img-fluid">
						</div>
					</div>
						
				</div>
			</section>
			<!-- ========================== About Elements ============================= -->
			<!-- ============================ Setup Process Start ==================================== -->
			<section class="gray-light" id="process" data-aos="fade-up">
				<div class="container">
					<div class="row align-items-center">
					
						<div class="col-lg-5 col-md-6 js-tilt">
							<img src="{{URL::to('src/img/logo.png')}}" class="img-fluid" alt="" />
						</div>
					
						<div class="col-lg-7 col-md-6">
							<div class="_setup_process">
								<h2> آلية عمل <span class="text-info">منصة رِفد</span></h2>
								<p>تجربة المستخدم وسلاسة الإجراءات هي من ركائز عمل المنصة، تبدأ بخطوات يسيرة خلال عملية التسجيل سواء للجمعية الخيرية أو للجهة الوقفية، ثم التحقق من صحة المعلومات المرفقة في مدة وجيزة، ليتم العمل على الآليات التالية:</p>
							</div>
							<div class="row">
						
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="yel098_7uw">
										<div class="ye_lk23">
											<i class="ti-package"></i>
										</div>
										<div class="yel_7bcx">
											<h4>رفع المشاريع</h4>
											<p>يتم رفع المشاريع من خلال حساب الجمعية الخيرية، حتى يتم عرضها على الأوقاف المانحة.</p>									
										</div>
									</div>
								</div>
								
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="yel098_7uw">
										<div class="ye_lk23">
											<i class="ti-mouse-alt"></i>
										</div>
										<div class="yel_7bcx">
											<h4>ساحة الخير</h4>
											<p>تعرض المشاريع على جميع الأوقاف في ساحة الخير، حتى تختار الجهة الوقفية المشروع المتناسب مع مصارفها.</p>								
										</div>
									</div>
								</div>
								
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="yel098_7uw">
										<div class="ye_lk23">
											<i class="ti-layers"></i>
										</div>
										<div class="yel_7bcx">
											<h4>متابعة المشاريع</h4>
											<p>تتمكن الجمعية الخيرية والجهة الوقفية من متابعة حالة المشروع والإجراءات التي تمت.</p>								
										</div>
									</div>
								</div>
								
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="yel098_7uw">
										<div class="ye_lk23">
											<i class="ti-mobile"></i>
										</div>
										<div class="yel_7bcx">
											<h4>التواصل المباشر</h4>
											<p>يتم إنشاء علاقة بين الجمعية والجهة الوقفية ليكونا على تواصل من خلال المنصة.</p>								
										</div>
									</div>
								</div>
							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ========================== About Elements ============================= -->
			<section id="stat" data-aos="fade-up">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-9">
							<div class="sec-heading">
								<h2>احصائيات منصة<span class="text-info"> رِفد </span></h2>
								<p>تترجم الأرقام التالية بعض الإنجازات التي تمت -بفضل الله- عن طريق المنصة:</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="achievement-wrap">
								<div class="achievement-content">
									<div class="ache-icon purple"><i class="ti-agenda"></i></div>
									<h4><span class="cto">11</span>K</h4>
									<p>مشروع تم دعمه</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="achievement-wrap">
								<div class="achievement-content">
									<div class="ache-icon green"><i class="ti-user"></i></div>
									<h4><span class="cto">4</span>K</h4>
									<p>جمعية مسجلة</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="achievement-wrap">
								<div class="achievement-content">
									<div class="ache-icon yellow"><i class="ti-medall-alt"></i></div>
									<h4><span class="cto">135</span>K</h4>
									<p>المستفيدين</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="achievement-wrap">
								<div class="achievement-content">
									<div class="ache-icon red"><i class="ti-face-smile"></i></div>
									<h4><span class="cto">20+</span></h4>
									<p>مدينة حول المملكة</p>
								</div>
							</div>
						</div>
						
					</div>
						
				</div>
			</section>
			<!-- ========================== About Elements ============================= -->
			
			<!-- ============================ Newest Designs End ==================================== -->
			<section class="light-w">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-9">
							<div class="sec-heading">
								<h2>مشاريع  <span class="text-info">رفد</span></h2>
								<p>نبذة عن بعض المشاريع التي تم دعمها عن طريق المنصة</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="owl-carousel owl-theme middle-arrow-hover" id="theme-slide">
								<!-- Single Items -->
								
								<!-- Single Items -->
								<div class="themes-slides">
									<div class="_jb_list73">
										<div class="_jb_list73_header">
											
											<div class="_jb_list72_flex">
												<div class="_jb_list72_first">
													<div class="_jb_list72_yhumb small-thumb">
														<img src="https://via.placeholder.com/100x100" class="img-fluid" alt="">	
													</div>
												</div>
												<div class="_jb_list72_last">
													<h4 class="_jb_title"><a href="search-services-list.html">مشروع نماء</a></h4>
													<div class="_times_jb">المملكة العربية السعودية ,الرياض</div>
												</div>
											</div>
											
										</div>
										<div class="_jb_list73_middle">
											<div class="_jb_list73_middle_flex">
												<h4 class="_jb_title"><a href="search-services-list.html">وصف المشروع</a></h4>
												<div class="_times_jb"><p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى</p></div>
												<a href="search-services-list.html" class="_jb_apply">تفاصيل المشروع</a>
											</div>
											
										</div>
										
									</div>
								</div>
								<div class="themes-slides">
									<div class="_jb_list73">
										<div class="_jb_list73_header">
											
											<div class="_jb_list72_flex">
												<div class="_jb_list72_first">
													<div class="_jb_list72_yhumb small-thumb">
														<img src="https://via.placeholder.com/100x100" class="img-fluid" alt="">	
													</div>
												</div>
												<div class="_jb_list72_last">
													<h4 class="_jb_title"><a href="search-services-list.html">مشروع نماء</a></h4>
													<div class="_times_jb">المملكة العربية السعودية ,الرياض</div>
												</div>
											</div>
											
										</div>
										<div class="_jb_list73_middle">
											<div class="_jb_list73_middle_flex">
												<h4 class="_jb_title"><a href="search-services-list.html">وصف المشروع</a></h4>
												<div class="_times_jb"><p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى</p></div>
												<a href="search-services-list.html" class="_jb_apply">تفاصيل المشروع</a>
											</div>
											
										</div>
										
									</div>
								</div>
								<div class="themes-slides">
									<div class="_jb_list73">
										<div class="_jb_list73_header">
											
											<div class="_jb_list72_flex">
												<div class="_jb_list72_first">
													<div class="_jb_list72_yhumb small-thumb">
														<img src="https://via.placeholder.com/100x100" class="img-fluid" alt="">	
													</div>
												</div>
												<div class="_jb_list72_last">
													<h4 class="_jb_title"><a href="search-services-list.html">مشروع نماء</a></h4>
													<div class="_times_jb">المملكة العربية السعودية ,الرياض</div>
												</div>
											</div>
											
										</div>
										<div class="_jb_list73_middle">
											<div class="_jb_list73_middle_flex">
												<h4 class="_jb_title"><a href="search-services-list.html">وصف المشروع</a></h4>
												<div class="_times_jb"><p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى</p></div>
												<a href="search-services-list.html" class="_jb_apply">تفاصيل المشروع</a>
											</div>
											
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ News Updates End ==================================== -->
			
			<!-- ============================ Call To Action Start ================================== -->
			@include('Home.Common.subscribe-news')
			@include('Home.Common.footer')
@endsection
			<!-- ============================ Call To Action End ================================== -->