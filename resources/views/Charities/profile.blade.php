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
			style="background:url({{URL::to('src/img/Header1.jpg')}})no-repeat;"
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
					@include('Charities.sideBar')
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
															<h6>{{$charity->name}} </h6>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>البريد الالكتروني</label>
															<h6>{{$charity->email}}</h6>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>المنطقة</label>
															<h6>الحجاز </h6>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label>المدينة</label>
															<h6>مكة</h6>
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
											<h4><i class="ti-lock mr-1"></i>المشاريع المرفوعة</h4> <a href="#">عرض الكل</a>
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
																<h5>مشروع افطار الصائمين</h5>
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
																<h5>مشروع فرحة اليتيم</h5>
																<span>20 مارس 2021</span>
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
																<h5>مشروع السلال الغذائية</h5>
																<span>17 فبراير 2021</span>
															</div>
															<div class="_cp_flexed_right">
																<a href="#" class="prt_link"><i class="fa fa-link"></i></a>
															</div>
														</div>
													</div>
												</div>
	
												<a href="{{route('charity.postProject')}}" class="btn btn-primary">رفع مشروع جديد</a>
										
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
		<!-- =========================== Footer Start ========================================= -->
		@include('Home.Common.footer')
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