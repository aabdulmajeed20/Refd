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
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Custom CSS -->
        <link href="{{ URL::to('src/css/styles.css') }}" rel="stylesheet">
		<link href="{{ URL::to('src/css/rtl.css') }}" rel="stylesheet">
        @stack('custom_css')
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
			@yield('navigation')
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->

            @yield('content')
			
			
			<!-- =========================== Footer Start ========================================= -->
			@yield('footer')
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