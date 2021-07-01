@extends('Endowments.layout')

@section('pageTitle')
	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">

					<h2 class="ipt-title">صفحة المشاريع</h2>
					<span class="ipn-subtitle">استعراض كل كل المشارع</span>

				</div>
			</div>
		</div>
	</div>
@endsection

@section('content')
	<div class="row">

		
		<div class="col-lg-4 col-md-12 col-sm-12">
			<div class="simple-sidebar sm-sidebar">

				<div class="search-sidebar_header">
					<h4 class="ssh_heading">تصفية البحث</h4>
					<a href="javascript:void(0);" class="clear_all">محو الكل</a><a href="#search_open"
						data-toggle="collapse" aria-expanded="false" role="button"
						class="collapsed _filter-ico"><i class="fa fa-sliders"></i></a>
				</div>

				<!-- Find New Property -->
				<div class="sidebar-widgets collapse miz_show" id="search_open" data-parent="#search_open">

					<div class="search-inner p-0">

						<div class="filter-search-box pb-0">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="ابحث بكلمات مناسبة...">
							</div>
							<div class="form-group">
								<input type="text" class="form-control"
									placeholder="الموقع، الرمز البريدي..">
							</div>
						</div>

						<div class="filter_wraps">

							<!-- Job categories Search -->
							<div class="single_search_boxed">
								<div class="widget-boxed-header">
									<h4>
										<a href="#categories" data-toggle="collapse" aria-expanded="true"
											role="button">مصارف المشروع</a>
									</h4>

								</div>
								<div class="widget-boxed-body collapse show" id="categories"
									data-parent="#categories">
									<div class="side-list no-border">
										<!-- Single Filter Card -->
										<div class="single_filter_card">
											<div class="card-body pt-0">
												<div class="inner_widget_link">
													<ul class="no-ul-list filter-list">
														<li>
															<input id="a1" class="checkbox-custom"
																name="ADA" type="checkbox" checked="">
															<label for="a1"
																class="checkbox-custom-label">المصرف الأول </label>
														</li>
														<li>
															<input id="a2" class="checkbox-custom"
																name="Parking" type="checkbox">
															<label for="a2"
																class="checkbox-custom-label">المصرف الثاني</label>
														</li>
														<li>
															<input id="a3" class="checkbox-custom"
																name="Coffee" type="checkbox">
															<label for="a3"
																class="checkbox-custom-label">المصرف الثالث</label>
														</li>
														<li>
															<input id="a4" class="checkbox-custom"
																name="Mother" type="checkbox">
															<label for="a4"
																class="checkbox-custom-label">المصرف الرابع</label>
														</li>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Job Locations Search -->
							<div class="single_search_boxed">
								<div class="widget-boxed-header">
									<h4>
										<a href="#locations" data-toggle="collapse" aria-expanded="false"
											role="button" class="collapsed">موقع الجغرافي</a>
									</h4>

								</div>
								<div class="widget-boxed-body collapse" id="locations"
									data-parent="#locations">
									<div class="side-list no-border">
										<!-- Single Filter Card -->
										<div class="single_filter_card">
											<div class="card-body pt-0">
												<div class="inner_widget_link">
													<ul class="no-ul-list filter-list">
														<li>
															<input id="b1" class="checkbox-custom"
																name="ADA" type="checkbox" checked="">
															<label for="b1"
																class="checkbox-custom-label">جدة</label>
														</li>
														<li>
															<input id="b2" class="checkbox-custom"
																name="Parking" type="checkbox">
															<label for="b2"
																class="checkbox-custom-label">الرياض</label>
														</li>
														<li>
															<input id="b3" class="checkbox-custom"
																name="Coffee" type="checkbox">
															<label for="b3"
																class="checkbox-custom-label">مكة</label>
															<ul class="no-ul-list filter-list">
																<li>
																	<input id="ac1" class="checkbox-custom"
																		name="ADA" type="checkbox">
																	<label for="ac1"
																		class="checkbox-custom-label">الرياض</label>
																</li>
																<li>
																	<input id="ac2" class="checkbox-custom"
																		name="Parking" type="checkbox">
																	<label for="ac2"
																		class="checkbox-custom-label">الدمام</label>
																</li>
																<li>
																	<input id="ac3" class="checkbox-custom"
																		name="Coffee" type="checkbox">
																	<label for="ac3"
																		class="checkbox-custom-label">القصيم</label>
																</li>
															</ul>
														</li>
														<li>
															<input id="b4" class="checkbox-custom"
																name="Mother" type="checkbox">
															<label for="b4"
																class="checkbox-custom-label">جدة</label>
															<ul class="no-ul-list filter-list">
																<li>
																	<input id="ad1" class="checkbox-custom"
																		name="ADA" type="checkbox">
																	<label for="ad1"
																		class="checkbox-custom-label">الرياض(20)</label>
																</li>
																<li>
																	<input id="ad2" class="checkbox-custom"
																		name="Parking" type="checkbox">
																	<label for="ad2"
																		class="checkbox-custom-label">القصيم
																		(42)</label>
																</li>
																<li>
																	<input id="ad3" class="checkbox-custom"
																		name="Coffee" type="checkbox">
																	<label for="ad3"
																		class="checkbox-custom-label">مكة
																		(22)</label>
																</li>
															</ul>
														</li>
														<li>
															<input id="b5" class="checkbox-custom"
																name="Outdoor" type="checkbox">
															<label for="b5"
																class="checkbox-custom-label">المدينة
																(15)</label>
														</li>
														<li>
															<input id="b6" class="checkbox-custom"
																name="Pet" type="checkbox">
															<label for="b6"
																class="checkbox-custom-label">الرياض
																(09)</label>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group filter_button pt-2">
							<button type="submit" class="btn btn btn-theme-2 rounded full-width">عرض 22
								نتيجة </button>
						</div>
					</div>
				</div>
			</div>
			<!-- Sidebar End -->

		</div>

		<!-- Item Wrap Start -->
		<div class="col-lg-8 col-md-12 col-sm-12">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<!-- Filter Search -->
					<div class="_filt_tag786">
						<div class="_tag782">
							<div class="_tag780">عرض 32 نتيجة</div>
						</div>
						<div class="_tag785">
							<div class="__g72juy">
								<a href="search-services.html" class="_ujh_tyr"><i
										class="ti-layout-grid2"></i></a>
								<a href="search-services-list.html" class="_ujh_tyr active"><i
										class="ti-view-list"></i></a>
							</div>
							<div class="_g78juy">
								<select class="form-control">
									<option>أفضل المشاريع</option>
									<option></option>
									<option>بناء</option>
									<option>كفالة ايتام</option>
									<option>سقيا ماء</option>
									<option> زواج</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 col-lg-12">

					<!-- Single List Item -->
					<div class="_large_jb_list72 shadow-0">
						<div class="_large_jb_header">
							<div class="_list_110">
								<div class="_list_110_thumb">
									<a href="employer-detail.html"><img
											src="https://via.placeholder.com/100x100" class="img-fluid"
											alt=""></a>
								</div>
								<div class="_list_110_caption">
									<h4 class="_jb_title"><a href="job-detail.html">بناء مجموعة من المساجد
											بمناطق تفقر لذلك</a></h4>
									<div class="_emp_jb">جمعية نماء</div>
								</div>
							</div>
							<div class="_list_right-info">
								<ul>
									<li>
										<div class="_ljb_prices">
											<h5>200 مليون ريال </h5><span>تكلفة المشروع</span>
										</div>
									</li>
									<li><a href="job-detail.html" class="_jb_apply theme-bt"> عرض
											المشروع</a></li>
								</ul>
							</div>
						</div>
						<div class="_large_jb_body">
							<div class="_large_jb_body_list_info">
								<ul>
									<li><i class="ti-location-pin"></i>السعودية الرياض</li>
									<li><i class="ti-timer"></i>11 شهر</li>
									<li><i class="ti-home"></i>تعليم</li>
									<li><i class="ti-money"></i>100 ألف ريال</li>
								</ul>
							</div>
							<div class="_large_jb_body_list_explain">
								<p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور
									طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير
									على سبيل المثال لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
									العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم</p>
								<div class="jb_req_skill">
									<ul>
										<li><span>مساجد</span></li>
										<li><span>زواج</span></li>
										<li><span>سقيا ماء</span></li>
										<li><span>حفر آبار</span></li>
										<li><span>أيتام</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Single List Item -->
					<div class="_large_jb_list72 shadow-0">
						<div class="_large_jb_header">
							<div class="_list_110">
								<div class="_list_110_thumb">
									<a href="employer-detail.html"><img
											src="https://via.placeholder.com/100x100" class="img-fluid"
											alt=""></a>
								</div>
								<div class="_list_110_caption">
									<h4 class="_jb_title"><a href="job-detail.html">كفالة آيتام لعدد 40
											طفل</a></h4>
									<div class="_emp_jb">دار العون</div>
								</div>
							</div>
							<div class="_list_right-info">
								<ul>
									<li>
										<div class="_ljb_prices">
											<h5>50الف ريال</h5><span>تكلفة المشروع</span>
										</div>
									</li>
									<li><a href="job-detail.html" class="_jb_apply theme-bt">عرض المشروع</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="_large_jb_body">
							<div class="_large_jb_body_list_info">
								<ul>
									<li><i class="ti-location-pin"></i>السعودية الرياض</li>
									<li><i class="ti-timer"></i>11 شهر</li>
									<li><i class="ti-home"></i>تعليم</li>
									<li><i class="ti-money"></i>100 ألف ريال</li>
								</ul>
							</div>
							<div class="_large_jb_body_list_explain">
								<p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور
									طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير
									على سبيل المثال لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
									العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم</p>
								<div class="jb_req_skill">
									<ul>
										<li><span>مساجد</span></li>
										<li><span>زواج</span></li>
										<li><span>سقيا ماء</span></li>
										<li><span>حفر آبار</span></li>
										<li><span>أيتام</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Single List Item -->
					<div class="_large_jb_list72 shadow-0">
						<div class="_large_jb_header">
							<div class="_list_110">
								<div class="_list_110_thumb">
									<a href="employer-detail.html"><img
											src="https://via.placeholder.com/100x100" class="img-fluid"
											alt=""></a>
								</div>
								<div class="_list_110_caption">
									<h4 class="_jb_title"><a href="job-detail.html">كفالة آيتام لعدد 40
											طفل</a></h4>
									<div class="_emp_jb">دار العون</div>
								</div>
							</div>
							<div class="_list_right-info">
								<ul>
									<li>
										<div class="_ljb_prices">
											<h5>50الف ريال</h5><span>تكلفة المشروع</span>
										</div>
									</li>
									<li><a href="job-detail.html" class="_jb_apply theme-bt">عرض المشروع</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="_large_jb_body">
							<div class="_large_jb_body_list_info">
								<ul>
									<li><i class="ti-location-pin"></i>السعودية الرياض</li>
									<li><i class="ti-timer"></i>11 شهر</li>
									<li><i class="ti-home"></i>تعليم</li>
									<li><i class="ti-money"></i>100 ألف ريال</li>
								</ul>
							</div>
							<div class="_large_jb_body_list_explain">
								<p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور
									طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير
									على سبيل المثال لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
									العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم</p>
								<div class="jb_req_skill">
									<ul>
										<li><span>مساجد</span></li>
										<li><span>زواج</span></li>
										<li><span>سقيا ماء</span></li>
										<li><span>حفر آبار</span></li>
										<li><span>أيتام</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Single List Item -->
					<div class="_large_jb_list72 shadow-0">
						<div class="_large_jb_header">
							<div class="_list_110">
								<div class="_list_110_thumb">
									<a href="employer-detail.html"><img
											src="https://via.placeholder.com/100x100" class="img-fluid"
											alt=""></a>
								</div>
								<div class="_list_110_caption">
									<h4 class="_jb_title"><a href="job-detail.html">حفر آبار بمناطق
											مختلفة</a></h4>
									<div class="_emp_jb">جمعية انسان</div>
								</div>
							</div>
							<div class="_list_right-info">
								<ul>
									<li>
										<div class="_ljb_prices">
											<h5>50الف ريال</h5><span>تكلفة المشروع</span>
										</div>
									</li>
									<li><a href="job-detail.html" class="_jb_apply theme-bt">عرض المشروع</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="_large_jb_body">
							<div class="_large_jb_body_list_info">
								<ul>
									<li><i class="ti-location-pin"></i>السعودية الرياض</li>
									<li><i class="ti-timer"></i>11 شهر</li>
									<li><i class="ti-home"></i>تعليم</li>
									<li><i class="ti-money"></i>100 ألف ريال</li>
								</ul>
							</div>
							<div class="_large_jb_body_list_explain">
								<p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور
									طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير
									على سبيل المثال لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
									العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم</p>
								<div class="jb_req_skill">
									<ul>
										<li><span>مساجد</span></li>
										<li><span>زواج</span></li>
										<li><span>سقيا ماء</span></li>
										<li><span>حفر آبار</span></li>
										<li><span>أيتام</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Single List Item -->
					<div class="_large_jb_list72 shadow-0">
						<div class="_large_jb_header">
							<div class="_list_110">
								<div class="_list_110_thumb">
									<a href="employer-detail.html"><img
											src="https://via.placeholder.com/100x100" class="img-fluid"
											alt=""></a>
								</div>
								<div class="_list_110_caption">
									<h4 class="_jb_title"><a href="job-detail.html">حفر آبار بمناطق
											مختلفة</a></h4>
									<div class="_emp_jb">جمعية انسان</div>
								</div>
							</div>
							<div class="_list_right-info">
								<ul>
									<li>
										<div class="_ljb_prices">
											<h5>50الف ريال</h5><span>تكلفة المشروع</span>
										</div>
									</li>
									<li><a href="job-detail.html" class="_jb_apply theme-bt">عرض المشروع</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="_large_jb_body">
							<div class="_large_jb_body_list_info">
								<ul>
									<li><i class="ti-location-pin"></i>السعودية الرياض</li>
									<li><i class="ti-timer"></i>11 شهر</li>
									<li><i class="ti-home"></i>تعليم</li>
									<li><i class="ti-money"></i>100 ألف ريال</li>
								</ul>
							</div>
							<div class="_large_jb_body_list_explain">
								<p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور
									طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير
									على سبيل المثال لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
									العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم</p>
								<div class="jb_req_skill">
									<ul>
										<li><span>مساجد</span></li>
										<li><span>زواج</span></li>
										<li><span>سقيا ماء</span></li>
										<li><span>حفر آبار</span></li>
										<li><span>أيتام</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span class="ti-arrow-right"></span>
								<span class="sr-only">السابق</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item active"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">...</a></li>
						<li class="page-item"><a class="page-link" href="#">18</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span class="ti-arrow-left"></span>
								<span class="sr-only">التالي</span>
							</a>
						</li>
					</ul>
				</div>
			</div>

		</div>

	</div>	
@endsection