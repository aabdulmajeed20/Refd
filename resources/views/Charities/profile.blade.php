@extends('Home.layout')

@push('custom_css')
<style>
	._dashboard__header_flex{
		display: flex;
		justify-content: space-between;
		width: 100%;
	}
	.status{
		display: flex;
		align-items: center;
	}
	.status p{
		padding: 0px 3px;

	}
	.status i{
		color:#197de4;
		font-size: 18px;
	}
	.bold{
		font-weight: 500;
		color:#197de4;
	}
	h6{
		font-weight: 400;
	}
	.completed_projects_thumb {
		max-height: 400px;
		overflow: hidden;
	}
</style>
@endpush

@section('content')
	


		<!-- ============================ Page Title Start================================== -->
		<div class="page-title bg-cover"
			style="background:url(https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=925&q=80)no-repeat;"
			data-overlay="5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12"></div>
				</div>
			</div>
		</div>
		<!-- ============================ Page Title End ================================== -->

		<!-- ============================ Main Section Start ================================== -->
		<section class="gray-bg pt-4">
			<div class="container-fluid">
				<div class="row m-0">
					<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12">
						<div class="dashboard-navbar overlio-top">

							<div class="d-user-avater">
								<img src="https://linkconnects.com/uploads/user_images/e2202d6d84cac089c7a803e90f3d76a9.png" class="img-fluid rounded" alt="">
								<h4>{{$charity->name}}</h4>
								<span>المملكة العربية السعودية</span>
							</div>

							<div class="d-navigation">
								<ul id="metismenu">
									<li><a href="my-profile.html">ملف الجمعية <i class="ti-user"></i></a></li>
									<li><a href="messages.html">الرسائل <i class="ti-email"></i></a></li>
									<li><a href="search-services-list.html">المشاريع  <i class="ti-layout-cta-btn-right"></i></a></li>
									<li><a href="{{route('charity.logout')}}">تسجيل الخروج <i class="ti-power-off"></i> </a></li>
								</ul>
							</div>

						</div>
					</div>
					<!-- Item Wrap Start -->
					<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<!-- Breadcrumbs -->
								<div class="bredcrumb_wrap">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
											<li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
											<li class="breadcrumb-item active" aria-current="page">الملف الشخصي</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">

								<!-- Single Wrap -->
								<div class="_dashboard_content">
									<div class="_dashboard_content_header">
										<div class="_dashboard__header_flex">
											<h4><i class="fa fa-user mr-1"></i>حسابي</h4>
											<div class="status">
												<p> حالة الجهة :</p>
												<p class="bold">موثقة</p>
												<i class="fas fa-clipboard-check"></i>
											</div>
											
										</div>
									</div>

									<div class="_dashboard_content_body">
										<div class="row">
											<div class="col-auto">
												<div class="custom-file avater_uploads">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
												</div>
											</div>

											<div class="col">
												<div class="row">
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>اسم الجمعية</label>
															<h6>جمعية الرحمة الخيرية </h6>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>البريد الالكتروني</label>
															<h6>alra7ma@gmail.com</h6>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>المنطقة</label>
															<h6>الرياض </h6>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>المدينة</label>
															<h6>جدة</h6>
														</div>
													</div>
												<div class="files_dates row" style="margin-top:20px;width: 100%;">
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>ملف مجلس الادارة </label>
															<h6><i class="fa fa-download" style="margin-left: 7px;color:#197de4"></i>ملف المجلس</h6>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>ملف التصريح </label>
															<h6><i class="fa fa-download" style="margin-left: 7px;color:#197de4"></i>ملف التصريح</h6>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>تاريخ انتهاء مجلس الادارة</label>
															<h6>21 / كانون الثاني / 2020</h6>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>تاريخ انتهاء التصريح</label>
															<h6>21 / كانون الثاني / 2023</h6>
														</div>
													</div>
												</div>
													
												</div>
											</div>

										</div>
									</div>
								</div>
								<!-- Single Wrap End -->
								<div class="_dashboard_content">
									<div class="_dashboard_content_header">
										<div class="_dashboard__header_flex">
											<h4><i class="ti-lock mr-1"></i>المشاريع المرفوعة</h4>
										</div>
									</div>

									<div class="_dashboard_content_body">
										<div class="row">
												<div class="col-lg-4 col-md-6 col-sm-12">
													<div class="completed_projects">
														<div class="completed_projects_thumb">
															<img src="http://cdn.shopify.com/s/files/1/0528/5576/7213/collections/photo_2021-03-18_01-18-55_1200x1200.jpg?v=1616025620"
																class="img-fluid rounded" alt="" />
														</div>
														<div class="_cp_flexed">
															<div class="_cp_flexed_left">
																<h5>جمعية نماء</h5>
																<span>17 يناير 2021</span>
															</div>
															<div class="_cp_flexed_right">
																<a href="#" class="prt_link"><i class="fa fa-link"></i></a>
															</div>
														</div>
													</div>
												</div>
	
												<div class="col-lg-4 col-md-6 col-sm-12">
													<div class="completed_projects">
														<div class="completed_projects_thumb">
															<img src="https://aqsana.org/wp-content/uploads/2018/06/WhatsApp-Image-2018-06-20-at-11.59.28-AM.jpeg"
																class="img-fluid rounded" alt="" />
														</div>
														<div class="_cp_flexed">
															<div class="_cp_flexed_left">
																<h5>جمعية إنسان</h5>
																<span>20 ديسمبر 2020</span>
															</div>
															<div class="_cp_flexed_right">
																<a href="#" class="prt_link"><i class="fa fa-link"></i></a>
															</div>
														</div>
													</div>
												</div>
	
												<div class="col-lg-4 col-md-6 col-sm-12">
													<div class="completed_projects">
														<div class="completed_projects_thumb img-fluid rounded">
															<img src="https://darelyateem.org/wp-content/uploads/2021/03/%D8%AA%D9%88%D9%8A%D8%AA%D8%B1.jpg"
																class="img-fluid rounded" alt="" />
														</div>
														<div class="_cp_flexed">
															<div class="_cp_flexed_left">
																<h5>حياة كريمة</h5>
																<span>17 اغسطس 20010</span>
															</div>
															<div class="_cp_flexed_right">
																<a href="#" class="prt_link"><i class="fa fa-link"></i></a>
															</div>
														</div>
													</div>
												</div>
	
												<button type="button" class="btn btn-primary">عرض المشاريع المرفوعة</button>
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- ============================ Main Section End ================================== -->
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

	
		<!-- Upload Resume -->

	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
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

	<script>
		$(".js-range-slider").ionRangeSlider({
			type: "double",
			min: 0,
			max: 100,
			from: 10,
			to: 30,
			grid: true
		});
	</script>

	<script>
		var vChipsList = [{
			tag: 'Photoshop',
		}, {
			tag: 'WordPress',
		}, {
			tag: 'Jquery',
		}];

		// INITIALIZATION OF AUTOCOMPLETE LIST
		var vTagList = {
			design: null,
			html: null,
			css: null,
			magento: null,
			drupal: null,
			business: null,
			java: null,
			joomla: null,
			css3: null,
			bootstrap: null
		};

		function fDisplayChips() {
			// FILLS THE CHIPS ZONE FROM THE LIST
			$('#lg-Chips').material_chip({
				data: vChipsList
			});
		}


		// ADDING A NEW CHIP
		function fChipAdd(lChipName) {
			lChipName = lChipName.toLowerCase();
			// test1 : minimum word size
			if (!(lChipName.length > 2)) {
				return 0;
			}
			// test2 :  no duplicates
			for (i = 0; i < vChipsList.length; i++) {
				if (lChipName == vChipsList[i].tag) {
					return 0;
				}
			}
			// tests Okay => add the chip and refresh the view
			vChipsList.push({ "tag": lChipName });
			fDisplayChips();
			return 1;
		};

		$(function () {
			// delete chip command
			$('#lg-Chips').on('chip.delete', function (e, chip) {
				vChipsList = $("#lg-Chips").material_chip('data');
			});


			$("#lg-Chips").focusin(function () {
				$("#lg-input").focus();
			});


			fDisplayChips();


			// NEW CHIP COMMAND
			$("#cmd-ChipsAjout").click(function () {
				fChipAdd($("#lg-input").val());
				$("#lg-input").val("");
			});

			$("#lg-input").autocomplete({
				data: vTagList
			});

		});
	</script>
@endsection