@extends('Endowments.layout')

@section('pageTitle')
	<div class="page-title bg-cover"
	style="background:url({{URL::to('src/img/Header1.jpg')}})no-repeat;"
	data-overlay="5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12"></div>
		</div>
	</div>
	</div>
@endsection

@section('content')
@include('Endowments.sideBar', ['endowment' => $endowment])

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
		<div class="col-lg-12 col-md-12">
			<div class="dashboard-gravity-list invoices with-icons">
				<h4>حالة المشاريع المختارة</h4>
				<ul>
					<li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
						<strong>مشروع نماء</strong>
						<ul>
							<li class="unpaid">قيد الدعم</li>
							<li>رقم الطلب: #20551</li>
							<li>تاريخ الطلب: 01/08/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض المشروع</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدعم</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض المشروع</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدعم</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض المشروع</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدعم</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض المشروع</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدعم</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض المشروع</a>
						</div>
					</li>

					<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
						<strong>مشروع إنسان</strong>
						<ul>
							<li class="paid">تم الدعم</li>
							<li>رقم الطلب: #20550</li>
							<li>تاريخ الطلب: 01/07/2019</li>
						</ul>
						<div class="buttons-to-right">
							<a href="dashboard-invoice.html" class="button gray">عرض المشروع</a>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>

</div>
	
@endsection
