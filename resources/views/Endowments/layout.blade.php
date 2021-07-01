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
						@yield('content')


				</div>
			</div>
		</section>
		<!-- ============================ Main Section End ================================== -->

		<!-- =========================== Footer Start ========================================= -->
		@include('Home.Common.footer')
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
	<script src="{{ URL::to('src/js/jquery.min.js') }}"></script>
	<script src="{{ URL::to('src/js/popper.min.js') }}"></script>
	<script src="{{ URL::to('src/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::to('src/js/select2.min.js') }}"></script>
	<script src="{{ URL::to('src/js/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::to('src/js/ion.rangeSlider.min.js') }}"></script>
	<script src="{{ URL::to('src/js/counterup.min.js') }}"></script>
	<script src="{{ URL::to('src/js/materialize.min.js') }}"></script>
	<script src="{{ URL::to('src/js/metisMenu.min.js') }}"></script>
	<script src="{{ URL::to('src/js/custom.js') }}"></script>

	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>

</html>