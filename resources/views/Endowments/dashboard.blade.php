@extends('Home.layout')

@section('pageTitle')
	<div class="page-title bg-cover"
	style="background:url(https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=925&q=80)no-repeat;"
	data-overlay="5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12"></div>
		</div>
	</div>
	</div>
@endsection

@section('content')
<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12">
	<div class="dashboard-navbar overlio-top">

		<div class="d-user-avater">
			<img src="https://themezhub.net/workoo-demo/workoo/assets/img/team-1.jpg"
				class="img-fluid rounded" alt="">
			<h4>عبد العزيز الأحمد</h4>
			<span>المملكة العربية السعودية</span>
		</div>

		<div class="d-navigation">
			<ul id="metismenu">
				<li class="active"><a href="dashboard.html">لوحة التحكم <i
							class="ti-dashboard"></i></a></li>
				<li><a href="my-profile.html">الملف الشخصي <i class="ti-user"></i></a></li>
				<li><a href="messages.html">الرسائل <i class="ti-email"></i></a></li>
				<li>
					<a href="javascript:void(0);" class="has-arrow" aria-expanded="false">المحفوظات
						<i class="ti-bookmark-alt"></i></a>
					<ul>
						<li><a href="bookmark-jobs.html">المحفوظات</a></li>
						<li><a href="bookmark-candidates.html">Bookmark Candidates</a></li>
						<li><a href="bookmark-freelancers.html">Bookmark Freelancers</a></li>
						<li><a href="bookmark-employers.html">Bookmark Employers</a></li>
					</ul>
				</li>
				<li><a href="reviews.html">المراجعات <i class="fa fa-star"></i></a></li>
				<li>
					<a href="javascript:void(0);" class="has-arrow" aria-expanded="false">المشاريع
						<i class="fa fa-briefcase"></i></a>
					<ul>
						<li><a href="manage-jobs.html">Manage Jobs</a></li>
						<li><a href="manage-candidates.html">Manage Candidates</a></li>
						<li><a href="manage-freelancers.html">Manage Freelancers</a></li>
						<li><a href="manage-employers.html">Manage Employers</a></li>
						<li><a href="create-reume.html">Create Resume</a></li>
						<li><a href="post-job.html">Post A Job</a></li>

					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" class="has-arrow" aria-expanded="false">المهام <i
							class="ti-desktop"></i></a>
					<ul>
						<li><a href="manage-task.html">Manage Task</a></li>
						<li><a href="manage-bidders.html">Manage Bidders</a></li>
						<li><a href="active-bids.html">My Active Bids</a></li>
						<li><a href="post-task.html">Post A Task</a></li>
					</ul>
				</li>
				<li><a href="#">تسجيل الخروج<i class="ti-power-off"></i></a></li>
			</ul>
		</div>

	</div>
</div>
<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<!-- Breadcrumbs -->
			<div class="bredcrumb_wrap">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
						<li class="breadcrumb-item active" aria-current="page">لوحة التحكم</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
			<div class="dashboard-stat">
				<div class="dashboard-stat-icon widget-1"><i class="ti-location-pin"></i></div>
				<div class="dashboard-stat-content">
					<h4><span class="cto">72</span></h4>
					<p>موقع جغرافي</p>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
			<div class="dashboard-stat">
				<div class="dashboard-stat-icon widget-2"><i class="ti-support"></i></div>
				<div class="dashboard-stat-content">
					<h4><span class="cto">12</span></h4>
					<p>مشاريع مدعومة</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
			<div class="dashboard-stat">
				<div class="dashboard-stat-icon widget-4"><i class="ti-ruler-pencil"></i></div>
				<div class="dashboard-stat-content">
					<h4><span class="cto">80</span></h4>
					<p>مشاريع مدروسة</p>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
			<div class="dashboard-stat">
				<div class="dashboard-stat-icon widget-3"><i class="ti-user"></i></div>
				<div class="dashboard-stat-content">
					<h4><span class="cto">72</span></h4>
					<p>عدد المستفيدين</p>
				</div>
			</div>
		</div>

	</div>
	<!-- start chart-->
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="chart">
				<h4>رسم بياني للمشاريع</h4>
				<canvas id="myChart" style="width:100%;max-width:700px;margin:auto"></canvas>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12">
			<div class="dashboard-gravity-list with-icons">
				<h4>أنشطة حديثة</h4>
				<ul>
					<li>
						<i class="dash-icon-box ti-layers text-purple bg-light-purple"></i>مؤسسة
						نماء<strong><a href="#">تطلب دعم مشروع كفالة أيتام</a></strong> رجاء
						الموافقة!
						<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
					</li>

					<li>
						<i class="dash-icon-box ti-star text-success bg-light-success"></i>قيم محمد
						أحمد <div class="numerical-rating high" data-rating="5.0">
						</div> مشروع اولادنا<strong><a href="#"> ودون ملاحظته</a></strong>
						<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
					</li>

					<li>
						<i class="dash-icon-box ti-heart text-warning bg-light-warning"></i>اعتمد 10
						من اللجنة<strong><a href="#">مشروع بناء</a></strong> يتبقى 5 من اللجنة!
						<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
					</li>

					<li>
						<i class="dash-icon-box ti-star text-info bg-light-info"></i> قيم زيد
						العبدالله
						مشروع المساجد <div class="numerical-rating mid" data-rating="4.8"></div>
						<strong><a href="#">ودون ملاحظاته</a></strong>
						<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
					</li>

					<li>
						<i class="dash-icon-box ti-layers text-purple bg-light-purple"></i>مؤسسة
						نماء<strong><a href="#">تطلب دعم مشروع كفالة أيتام</a></strong> رجاء
						الموافقة!
						<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
					</li>

					<li>
						<i class="dash-icon-box ti-star text-success bg-light-success"></i>قيم محمد
						أحمد <div class="numerical-rating high" data-rating="5.0">
						</div> مشروع اولادنا<strong><a href="#"> ودون ملاحظته</a></strong>
						<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
					</li>

					<li>
						<i class="dash-icon-box ti-heart text-warning bg-light-warning"></i>اعتمد 10
						من اللجنة<strong><a href="#">مشروع بناء</a></strong> يتبقى 5 من اللجنة!
						<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
					</li>
				</ul>
			</div>
		</div>

		<div class="col-lg-6 col-md-12">
			<div class="dashboard-gravity-list invoices with-icons">
				<h4>فواتير</h4>
				<ul>

					<li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
						<strong>مشروع نماء</strong>
						<ul>
							<li class="unpaid">قيد الدعم</li>
							<li>رقم الطلب: #20551</li>
							<li>تاريخ الطلب: 01/08/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض الفاتورة</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدفع</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض الفاتورة</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدفع</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض الفاتورة</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدفع</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض الفاتورة</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدفع</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض الفاتورة</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدفع</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض الفاتورة</a>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>

</div>
	
@endsection
