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
            {{-- <!-- Start Navigation -->
			<div class="header header-light">
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
									
										<li class="active"><a href="#">الرئيسية<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="#">Job Board<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="index.html" class="active">Home Style 1</a></li>                                    
														<li><a href="home-2.html">Home Style 2</a></li>                                    
														<li><a href="home-3.html">Home Style 3</a></li> 
														<li><a href="home-4.html">Home Style 4</a></li> 
														<li><a href="home-5.html">Home Style 5</a></li> 
														<li><a href="home-6.html">Home Style 6</a></li>  														
													</ul>
												</li>
												<li><a href="#">Freelancing<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="freelancer-1.html">Freelancing 1</a></li>                                    
														<li><a href="freelancer-2.html">Freelancing 2</a></li>  
														<li><a href="freelancer-3.html">Freelancing 3</a></li> 
														<li><a href="freelancer-4.html">Freelancing 4</a></li>  														
													</ul>
												</li>
											</ul>
										</li>
										
										<li><a href="#">الأقسام <span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="#">Search Job<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="search-job-grid-1.html">Search Job 01</a></li>                                    
														<li><a href="search-job-grid-2.html">Search Job 02</a></li>  
														<li><a href="search-job-grid-3.html">Search Job 03</a></li>  	
														<li><a href="search-job-list-1.html">Search Job List 01</a></li>
														<li><a href="search-job-list-2.html">Search Job List 02</a></li>
													</ul>
												</li>
												<li><a href="#">Services<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="search-services.html">Search Services 01</a></li>                                    
														<li><a href="search-services-grid-2.html">Search Services 02</a></li>  
														<li><a href="search-services-list.html">Search Services List</a></li>    														
													</ul>
												</li>
												<li><a href="#">Freelancers<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="search-freelancers.html">Search Freelancers</a></li>                                    
														<li><a href="search-freelancers-grid-2.html">Search Freelancers 02</a></li>  
														<li><a href="search-freelancers-list.html">Search Freelancers List</a></li>
														<li><a href="freelancer-detail.html">Freelancer Detail</a></li>	
													</ul>
												</li>
												<li><a href="#">Candidates<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="search-candidates.html">Search Canddates</a></li>                                    
														<li><a href="search-candidates-list.html">Search Candidates List</a></li>
														<li><a href="candidate-detail.html">Candidate Detail</a></li>	
													</ul>
												</li>
												<li><a href="#">Employers<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="search-employers.html">Search Employers</a></li>                                    
														<li><a href="search-employers-list.html">Search Employers List</a></li>
														<li><a href="employer-detail.html">Employer Detail</a></li>	
													</ul>
												</li>
												<li><a href="#">Detail Page<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="job-detail-1.html">Job Detail 01</a></li>                                    
														<li><a href="job-detail-2.html">Job Detail 02</a></li> 
  														<li><a href="job-detail-3.html">Job Detail 03</a></li> 
														<li><a href="service-detail.html">Service Detail</a></li> 
														<li><a href="project-detail.html">Project Detail</a></li> 														
													</ul>
												</li>
												<li><a href="advance-search-1.html">Advance Search 01</a></li>
												<li><a href="advance-search-2.html">Advance Search 02</a></li>
											</ul>
										</li>
										
										<li><a href="dashboard.html">لوحة التحكم</a></li>
										
										<li><a href="#">الصفحات<span class="submenu-indicator"></span></a>
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
										</li>
										
									</ul>
									
									<ul class="nav-menu nav-menu-social align-to-right">
										
										<li>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#upload-resume">
												رفع ملف <i class="fa fa-upload mr-1"></i>
											</a>
										</li>
										<li class="add-listing">
											<a href="index.html"> تسجيل الدخول <i class="ti-user mr-1"></i></a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End Navigation --> --}}
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
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
											<li class="breadcrumb-item active" aria-current="page">اضافة مشروع</li>
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
												<h4><i class="ti-briefcase mr-1"></i> يرجى تعبئة البيانات ادناه</h4>	
											</div>
										</div>
										
										<div class="_dashboard_content_body">
											<div class="row">

												<div class="col-xl-4 col-lg-6">
													<div class="form-group">
														<label>عنوان المشروع</label>
														<input type="text" class="form-control with-light">
													</div>
												</div>
												
												<div class="col-xl-4 col-lg-6">
													<div class="form-group with-light">
														<label>المصرف</label>
														<select id="jb-category" class="form-control ">
															<option value=""></option>
															<option value="1">بناء المساجد</option>
															<option value="2">التعليم</option>
															<option value="3">الخدمات الطبية</option>
															<option value="4">الفقراء والمساكين</option>
															<option value="5">رعاية الأيتام</option>
														</select>
													</div>
												</div>
												<div class="col-xl-4 col-lg-6">
													<div class="form-group">
														<label>تكلفة المشروع</label>
														<input type="text" class="form-control with-light">
													</div>
												</div>
												
												<div class="col-xl-12 col-lg-12">
													<div class="form-group">
														<label>فكرة مختصرة عن المشروع</label>
														<textarea name="" id="" cols="30" rows="10" class="form-control with-light"></textarea>
													</div>
												</div>
												
												<div class="col-xl-12 col-lg-12">
													<div class="form-group with-light">
														<label>مسوغات المشروع</label>
														<textarea name="" id="" cols="30" rows="10" class="form-control with-light"></textarea>
													</div>
												</div>
												
												<div class="col-xl-12 col-lg-12">
													<div class="form-group with-light">
														<label> مخرجات المشروع</label>
														<textarea name="" id="" cols="30" rows="10" class="form-control with-light"></textarea>
													</div>
												</div>
												
											
												<div class="col-xl-6 col-lg-12">
													<div class="form-group">
														<label>مكان التنفيذ</label>
														<input type="text" class="form-control with-light">
													</div>
												</div>
												<div class="col-xl-6 col-lg-12">
													<div class="form-group with-light">
														<label>مدة المشروع بالأيام</label>
														<input type="text" class="form-control with-light">
													</div>
												</div>
												<div class="col-xl-6 col-lg-12">
													<div class="form-group with-light">
														<label> الفئة المستهدفة</label>
														<input type="text" class="form-control with-light">
													</div>
												</div>
												<div class="col-xl-6 col-lg-12">
													<div class="form-group">
														<label>عدد المستفيدين</label>
														<input type="text" class="form-control with-light">
													</div>
												</div>
												
												<div class="col-xl-12 col-lg-12">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="upfile">
														<label class="custom-file-label" for="upfile">ارفع الملفات من هنا</label>
													</div><span class="uploadButton-file-name">يرجى ارفاق الخطة المالية التفصيلية , ملف المشروع مفصلاً</span>
												</div>
												
											</div>
										</div>
									</div>
									<!-- Single Wrap End -->
									
									<button type="button" class="btn btn-save">اضافة مشروع</button>
									
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
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
		</script>

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
		
		<script>
			var vChipsList =  [{
				tag: 'Photoshop',
			}, {
				tag: 'WordPress',
			}, {
				tag: 'Jquery',
			}];

			// INITIALIZATION OF AUTOCOMPLETE LIST
			var vTagList =  {
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
			function fChipAdd(lChipName){
				lChipName = lChipName.toLowerCase();
				// test1 : minimum word size
				if (!(lChipName.length > 2)){
					return 0;
				}
				// test2 :  no duplicates
				for(i=0;i<vChipsList.length;i++) {
					if(lChipName == vChipsList[i].tag){
						return 0;
					}
				}
				// tests Okay => add the chip and refresh the view
				vChipsList.push({"tag":lChipName});
				fDisplayChips();
				return 1;
			};

			$(function() {
			// delete chip command
				$('#lg-Chips').on('chip.delete', function(e, chip){
					vChipsList = $("#lg-Chips").material_chip('data');
				});


				$("#lg-Chips").focusin(function () {
					$("#lg-input").focus();
				});


				fDisplayChips();


			// NEW CHIP COMMAND
				$("#cmd-ChipsAjout").click(function () {
					fChipAdd($("#lg-input").val()) ;
					$("#lg-input").val("");
				});

				$("#lg-input").autocomplete({
					data: vTagList
				});

			});
		</script>
		
	</body>
</html>