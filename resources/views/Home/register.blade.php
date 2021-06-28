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
	<style>
		body{
			height: 100vh;
			background-size: cover;
		}
		#main-wrapper{
			position: relative;
			height: 100%;
		}
		#main-wrapper .container{
			position: relative;
			z-index: 22;
		}
		#main-wrapper::after{
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background:rgba(255, 255, 255, 0.685);
			z-index: 0;
		}
	</style>
</head>

<body class="blue-skin" style="background-image: url({{URL::to('src/img/bg.jpg')}})">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="Loader"></div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<div class="header  dark-text">
			<div class="container">
				{{-- <div class="row">
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
				</div> --}}
			</div>
		</div>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================ Page Title Start================================== -->
		<div class="container">
			<div class="row">
				<div class="col-md-2">

				</div>
				<div class="col-md-8 flex-side" >
					<img src="{{URL::to('src/img/logo.png')}}" alt="" style="max-width: 130px;margin-bottom: 10px;">
						<ul class="tab ">
							<li class="active " data-conf="waqef">وقف</li>
							<li data-conf="charity">جمعية</li>
						</ul>
					
					<div class="signup-form waqef">
						<form action="{{route('auth.endowmentRegister')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="wqef">
							@csrf
							<div class="first-step-w ">
								<div class="form-group">
									<label>البريد الالكتروني</label>
									<input type="text" class="form-control" placeholder="mail@gmail.com">
								</div>
	
								<div class="form-group">
									<label>كلمة المرور</label>
									<input type="password" class="form-control" placeholder="*******">
								</div>
								<div class="form-group">
									<label>تأكيد كلمة المرور</label>
									<input type="password" class="form-control" placeholder="*******">
								</div>
								<div class="form-group space-between">
									<button class="btn dark-2 btn-md pop-login next-f-w"> الخطوة التالية <i class="fa fa-arrow-left"></i> </button>
								</div>
							</div>
							<div class="second-step-w hide">
								<div class="form-group">
									<label>اسم الجهة</label>
									<input type="text" class="form-control" placeholder="اسم الوقف">
								</div>
								<div class="row">
									<div class="col-md-6">
										<label> <strong>المنطقة</strong> </label>
									<div class="form-group  with-light">
										
										<select class="form-control ">
											<option value="0">الرياض</option>
											<option value="1">جدة</option>
											<option value="2">مكة</option>
											<option value="3">المدينة المنورة</option>
											<option value="4">الطائف</option>
										</select>
									</div>
									</div>
									<div class="col-md-6">
										<label> <strong>المدينة</strong> </label>
									<div class="form-group  with-light">
										
										<select  class="form-control ">
											<option value="0">الرياض</option>
											<option value="1">جدة</option>
											<option value="2">مكة</option>
											<option value="3">المدينة المنورة</option>
											<option value="4">الطائف</option>
										</select>
									</div>
									</div>
									
								</div>
								
								
								<div class="form-group">
									<label>رقم الجهة</label>
									<input type="text" class="form-control" placeholder="رقم الوقف">
								</div>
								<div class="form-group space-between">
									<button class="btn dark-2 btn-md pop-login back-first-w"><i class="fa fa-arrow-right"></i> الخطوة السابقة </button>
									<button  class="btn dark-3 btn-md pop-login next-final-w" > الخطوة التالية <i class="fa fa-arrow-left"></i></button>
								</div>
							</div>
							<div class="hide final-step-w">
								<div class="form-group">
									<label>رخصة الوقف</label>
									<div class="_file_caption">
										<div class="_file_caption_flex">
											<div class="_eltio_caption_body small">
												<h4>file.pdf</h4>
												<span>PDF</span>
											</div>
										</div>
										<div class="_file_caption_right">
											<a href="javascript:void(0);"><i class="fa fa-download"></i></a>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<label>صك الوقفية</label>
									<div class="_file_caption">
										<div class="_file_caption_flex">
											<div class="_eltio_caption_body small">
												<h4>file.pdf</h4>
												<span>PDF</span>
											</div>
										</div>
										<div class="_file_caption_right">
											<a href="javascript:void(0);"><i class="fa fa-download"></i></a>
										</div>
									</div>
								</div>
								
								<div class="form-group space-between">
									<button class="btn dark-2 btn-md pop-login back-s-w"><i class="fa fa-arrow-right"></i> الخطوة السابقة </button>
									<button type="submit" class="btn dark-3 btn-md pop-login" >سجل الآن <i class="fa fa-arrow-left"></i> </button>
									
								</div>
							</div>
						</form>
					</div>
					<div class="signup-form charity hide" >
						<form action="{{route('auth.charityRegister')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="charity">
							@csrf
							<div class="step first-step">
								<div class="form-group">
									<label>البريد الالكتروني</label>
									<input name="email" type="text" class="form-control" placeholder="mail@domain.com">
								</div>
	
								<div class="form-group">
									<label>كلمة المرور</label>
									<input type="password" class="form-control" placeholder="*******" name="password">
								</div>
								<div class="form-group">
									<label>تأكيد كلمة المرور</label>
									<input type="password" class="form-control" placeholder="*******" name="re-password">
								</div>
								<div class="form-group space-between">
									<button class="btn dark-2 btn-md pop-login next-second"> الخطوة التالية <i class="fa fa-arrow-left"></i></button>
								</div>
							</div>
							<div class="step hide second-step">
								<div class="form-group">
									<label>اسم الجمعية الخيرية </label>
									<input type="text" class="form-control" placeholder="اسم الجمعية الخيرية" name="charity_name">
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<label> <strong>المنطقة</strong> </label>
									<div class="form-group  with-light">
										
										<select class="form-control " name="region">
											<option value="0">الرياض</option>
											<option value="1">جدة</option>
											<option value="2">مكة</option>
											<option value="3">المدينة المنورة</option>
											<option value="4">الطائف</option>
										</select>
									</div>
									</div>
									<div class="col-md-6">
										<label> <strong>المدينة</strong> </label>
									<div class="form-group  with-light">
										
										<select  class="form-control " name="city">
											<option value="0">الرياض</option>
											<option value="1">جدة</option>
											<option value="2">مكة</option>
											<option value="3">المدينة المنورة</option>
											<option value="4">الطائف</option>
										</select>
									</div>
									</div>
									
								</div>
								<label> <strong>تصنيف الجهة</strong> </label>
								<div class="form-group with-light">
									<select  class="form-control " name="category">
										<option value="حكومية">حكومية</option>
										<option value="خيرية">خيرية</option>
										<option value="تجارية">تجارية</option>
										<option value="غير ربحية">غير ربحية</option>
									</select>
								</div>
								<div class="form-group">
									<label>رقم التواصل </label>
									<input type="text" class="form-control" placeholder="05XXXXXXXX" name="contact_number">
								</div>
								<div class="form-group space-between">
									<button class="btn dark-2 btn-md pop-login back-first"><i class="fa fa-arrow-right"></i> الخطوة السابقة </button>
									<button  class="btn dark-3 btn-md pop-login next-final" > الخطوة التالية <i class="fa fa-arrow-left"></i></button>
								</div>
							</div>
							<div class="hide final-step">
								<div class="form-group">
									<label>ملف مجلس الادارة</label>
									<div class="_file_caption">
										<div class="_file_caption_flex">
											<div class="_eltio_caption_body small">
												<input type="file" name="management_file">
											</div>
										</div>
										<div class="_file_caption_right">
											<a href="javascript:void(0);"><i class="fa fa-download"></i></a>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label> تاريخ انتهاء مجلس الادارة </label>
									<input placeholder="17/4/2022" type="text" name="management_date" id="" value="" class="calendar datepicker"><i class="fas fa-calendar-check icon"></i>
								</div>
								<div class="form-group">
									<label>ملف التصريح</label>
									<div class="_file_caption">
										<div class="_file_caption_flex">
											<div class="_eltio_caption_body small">
												<input type="file" name="permission_file">
											</div>
										</div>
										<div class="_file_caption_right">
											<a href="javascript:void(0);"><i class="fa fa-download"></i></a>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label> تاريخ انتهاء ملف التصريح </label>
									<input placeholder="17/4/2022" type="text" name="permission_date" id="" value="" class="calendar datepicker"><i class="fas fa-calendar-check icon"></i>
								</div>
								<div class="form-group space-between">
									<button class="btn dark-2 btn-md pop-login back-final"><i class="fa fa-arrow-right"></i> الخطوة السابقة </button>
									<button type="submit" class="btn dark-3 btn-md pop-login" >سجل الآن <i class="fa fa-arrow-left"></i> </button>
									
								</div>
							</div>
						</form>
					</div>
				
					<div class="flexy">
						<div class="mf-link"><i class="ti-user"></i>لديك حساب ؟ <a href="javascript:void(0)" class="theme-cl">تسجيل دخول</a></div>
					</div>
				</div>
				<div class="col-md-2">

				</div>

			</div>
		</div>

		<!-- ============================ Page Title End ================================== -->

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
	<script src="{{ URL::to('src/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::to('src/js/select2.min.js') }}"></script>
	<script src="{{ URL::to('src/js/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::to('src/js/ion.rangeSlider.min.js') }}"></script>
	<script src="{{ URL::to('src/js/counterup.min.js') }}"></script>
	<script src="{{ URL::to('src/js/materialize.min.js') }}"></script>
	<script src="{{ URL::to('src/js/metisMenu.min.js') }}"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
			jQuery('.datepicker').datepicker({
		dateFormat: 'yy-mm-dd',
		startDate: '+1d',
		dayNames: [ "الجمعة", "السبت", "الأحد", "الاثنين", "الثلاثاء", "الأربعاء", "الخميس" ] ,
		dayNamesMin: [ "ج", "س", "أح", "اث", "ث", "ار", "خ" ],
		isRTL: true,
		monthNames: [ "يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو", "يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر" ]

	});
	</script>
	<script src="{{ URL::to('src/js/custom.js') }}"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>

</html>