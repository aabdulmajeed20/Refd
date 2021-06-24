<!DOCTYPE html>
<html lang="ar">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>منصة رِفد</title>
		
        <!-- All Plugins Css -->

		<link href="{{ URL::to('src/css/plugins.css') }}" rel="stylesheet">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
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
			<div class="header">
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
									
										<li class="active"><a href="#">الرئيسية<span class="submenu-indicator"></span></a></li>
										
										<li><a href="#">ساحة الخير<span class="submenu-indicator"></span></a></li>
										
										<li><a href="#">المشاريع المدعومة</a></li>
										<li><a href="#">الجمعيات </a></li>
										<li><a href="#">تواصل معنا </a></li>
										
										<!-- <li><a href="#">Pages<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="about-us.html">About Us</a></li> 
												<li><a href="blog.html">Blogs Page</a></li>                                    
												<li><a href="blog-detail.html">Blog Detail</a></li>                                     
												<li><a href="pricing.html">Pricing</a></li>
												<li><a href="contact.html">Contact Us</a></li>
												<li><a href="components.html">Components</a></li>												
												<li><a href="faq.html">FAQ's</a></li>
												<li><a href="checkout.html">CheckOut</a></li>
											</ul>
										</li> -->
										
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

		<!-- ============================ Page Title Start================================== -->
		
		@yield('pageTitle')
		<!-- ============================ Page Title End ================================== -->

		<!-- ============================ Main Section Start ================================== -->
		<section class="gray-bg pt-4">
			<div class="container-fluid">
				<div class="row m-0">
					<!-- Item Wrap Start -->
					@yield('mainSection')


				</div>
			</div>
		</section>
		<!-- ============================ Main Section End ================================== -->

		<!-- ============================ Call To Action Start ================================== -->
		<section class="call-to-act" style="background:#2944c1 url(assets/img/landing-bg.png) no-repeat">
			<div class="container">
				<div class="row justify-content-center">

					<div class="col-lg-7 col-md-8">
						<div class="clt-caption text-center mb-4">
							<h3 class="text-light">النشرة الاخبارية</h3>
							<p class="text-light">اشترك في نشرتنا الاخبارية لتصلك المشاريع الجديدة</p>
						</div>
						<div class="inner-flexible-box subscribe-box">
							<div class="input-group">
								<input type="text" class="form-control large" placeholder="بريدك الالكتروني">
								<button class="btn btn-subscribe bg-dark" type="button"><i
										class="fa fa-arrow-left"></i></button>
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
							<p class="mb-0">جميع الحقوق محفوظة لدى <a href="https://hakkam.co/Refd">رِفد</a> © 2021 </p>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	<script>
        var xValues = ["المشاريع المعروضة" , "مشاريع قيد المراجعة " , "مشاريع مقبولة", "الجميعات"];
        var yValues = [55, 49, 44, 24];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#e8c3b9"
        ];
        
        new Chart("myChart", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            
          }
        });
        </script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/ion.rangeSlider.min.js"></script>
	<script src="assets/js/counterup.min.js"></script>
	<script src="assets/js/materialize.min.js"></script>
	<script src="assets/js/metisMenu.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>

</html>