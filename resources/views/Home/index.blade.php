<!DOCTYPE html>
<html lang="ar">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>منصة رِفد - منصة خيرية موثوقة</title>
		
        <!-- All Plugins Css -->
        <link href="{{ URL::to('src/css/plugins.css') }}" rel="stylesheet">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Custom CSS -->
        <link href="{{ URL::to('src/css/styles.css') }}" rel="stylesheet">
		<link href="{{ URL::to('src/css/rtl.css') }}" rel="stylesheet">
    </head>
	
    <body class="blue-skin">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="Loader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-transparent dark-text">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<nav id="navigation" class="navigation navigation-landscape">
								<div class="nav-header">
									<a class="nav-brand" href="#">
										<img src="{{URL::to('src/img/logo.png')}}" class="logo" alt="" />
									</a>
									<div class="nav-toggle"></div>
								</div>
								<div class="nav-menus-wrapper">
									<ul class="nav-menu">
									
										<li class="active"><a href="#">الرئيسية</a></li>
										<li><a href="#about">عن المنصة</a></li>
										<li><a href="#process">آلية العمل </a></li>
										<li><a href="#stat">الاحصائيات </a></li>
										<li><a href="#projects">المشاريع </a></li>
										<li><a href="#contact">تواصل معنا </a></li>						
									</ul>
									
									<ul class="nav-menu nav-menu-social align-to-right">
										
										<li>
											<a href="signup.html" >
												سجل الآن
											</a>
										</li>
										<li class="add-listing dark-bg">
											<a href="login.html" >
												 <i class="ti-user mr-1"></i> تسجيل الدخول
											</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
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
								<h2> آلية عمل <span class="theme-cl-2">منصة رِفد</span></h2>
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
								<h2>احصائيات منصة<span class="theme-cl-2"> رِفد </span></h2>
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
								<h2>مشاريع  <span class="theme-cl-2">رفد</span></h2>
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
			<section class="call-to-act" id= " contact"style="background:#2944c1 url({{URL::to('src/img/landing-bg.png')}}) no-repeat">
				<div class="container">
					<div class="row justify-content-center">
					
						<div class="col-lg-7 col-md-8">
							<div class="clt-caption text-center mb-4">
								<h3 class="text-light">النشرة الاخبارية</h3>
								<p class="text-light">اشترك في نشرتنا الاخبارية لتصلك أحدث الاحصائيات عن مشاريعنا</p>
							</div>
							<div class="inner-flexible-box subscribe-box">
								<div class="input-group">
									<input type="text" class="form-control large" placeholder="بريدك الالكتروني">
									<button class="btn btn-subscribe bg-dark" type="button"><i class="fa fa-arrow-left"></i></button>
								</div>
							</div>
						</div>				
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
			
			<!-- =========================== Footer Start ========================================= -->
			<footer class="dark-footer skin-dark-footer">
				<div>
					<div class="container">
						<div class="row">
	
							<div class="col-lg-4 col-md-6">
								<div class="footer-widget">
									<img src="{{URL::to('src/img/logo.png')}}" class="img-fluid f-logo" width="120" alt="">
									<p>منصة إجتماعية موثوقة <br>السعودية,الرياض</p>
									<ul class="footer-bottom-social">
										<li><a href="#"><i class="ti-facebook"></i></a></li>
										<li><a href="#"><i class="ti-twitter"></i></a></li>
										<li><a href="#"><i class="ti-instagram"></i></a></li>
										<li><a href="#"><i class="ti-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">روابط ذات صلة</h4>
									<ul class="footer-menu">
										<li><a href="#">من نحن</a></li>
										<li><a href="#">الأسئلة الشائعة</a></li>
										<li><a href="#">مشروعك</a></li>
										<li><a href="#">تسجيل الدخول</a></li>
									</ul>
								</div>
							</div>
	
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">تصنيفات المشاريع</h4>
									<ul class="footer-menu">
										<li><a href="#">صحة</a></li>
										<li><a href="#">تعليم</a></li>
										<li><a href="#">زواج</a></li>
										<li><a href="#">آبار</a></li>
									</ul>
								</div>
							</div>
	
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">الجمعيات</h4>
									<ul class="footer-menu">
										<li><a href="#">من نحن</a></li>
										<li><a href="#">المشاريع</a></li>
										<li><a href="#">أحدث أخبارنا</a></li>
										<li><a href="#">تواصل معنا</a></li>
									</ul>
								</div>
							</div>
	
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">التواصل</h4>
									<ul class="footer-menu">
										<li><a href="#">دعم</a></li>
										<li><a href="#">اعرض مشروعك</a></li>
										<li><a href="#">الاحكام &amp; السياسات</a></li>
									</ul>
								</div>
							</div>
	
						</div>
					</div>
				</div>
	
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
	
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">جميع الحقوق محفوظة لدى <a href="{{URL::to('/')}}">رِفد</a> © 2021 </p>
							</div>
	
						</div>
					</div>
				</div>
			</footer>
			<!-- =========================== Footer End ========================================= -->
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{ URL::to('src/js/jquery.min.js') }}"></script>
		<script src="{{ URL::to('src/js/popper.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
		<script src="{{ URL::to('src/js/bootstrap.min.js') }}"></script>
		
		<script>
				$('.js-tilt').tilt({
				scale: .8,
				speed: 1100
			});
		</script>
		
		<script src="{{ URL::to('src/js/select2.min.js') }}"></script>
		<script src="{{ URL::to('src/js/owl.carousel.min.js') }}"></script>
		<script src="{{ URL::to('src/js/ion.rangeSlider.min.js') }}"></script>
		<script src="{{ URL::to('src/js/counterup.min.js') }}"></script>
		<script src="{{ URL::to('src/js/materialize.min.js') }}"></script>
		<script src="{{ URL::to('src/js/metisMenu.min.js') }}"></script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
		  AOS.init();
		</script>
	  	<script src="{{ URL::to('src/js/custom.js') }}"></script>
		
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

		
	</body>
</html>