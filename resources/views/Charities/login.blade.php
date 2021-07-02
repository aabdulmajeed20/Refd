@extends('Home.layout')

		<!-- ============================ Page Title Start================================== -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 flex-side">
					<a class="logo-brand" href="#">
						<img src="{{URL::to('src/img/logo.png')}}" class="logo" alt="" />
					</a>
					<div class="login-form">
						<form action="{{route('auth.charityLogin')}}" method="post">
							@csrf
							<div class="form-group">
								<label>اسم المستخدم</label>
								<input type="text" class="form-control" placeholder="اسم المستخدم" name="email">
							</div>

							<div class="form-group">
								<label>كلمة المرور</label>
								<input type="password" class="form-control" placeholder="*******" name="password">
							</div>
							<div class="form-group">
								<input id="sec" class="checkbox-custom" name="Security" type="checkbox">
								<label for="sec" class="checkbox-custom-label">تذكرني</label>
							</div>
							<div class="form-group">
								<button type="submit" class="btn dark-2 btn-md full-width pop-login">تسجيل الدخول</button>
							</div>
						</form>
					</div>
				
					<div class="flexy">
						<div class="mf-link"><i class="ti-user"></i>ليس لديك حساب?<a href="javascript:void(0)" class="theme-cl"> سجل الآن</a></div>
						<div class="mf-forget"><a href="#"><i class="ti-help"></i>نسيت كلمة المرور</a></div>
					</div>
				</div>
				<div class="page-title bg-cover col-md-8" style="background:url({{URL::to('src/img/background-logo.jpg')}})no-repeat;height:100vh ;" data-overlay="9">

				</div>

			</div>
		</div>

		<!-- ============================ Page Title End ================================== -->

		<!-- =========================== Footer End ========================================= -->

		<!-- Log In Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="registermodal">
					<div class="modal-header">
						<h4>Sign In</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
					</div>
					<div class="modal-body">

						<div class="login-form">
							<form>

								<div class="form-group">
									<label>User Name</label>
									<input type="text" class="form-control" placeholder="Username">
								</div>

								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="*******">
								</div>

								<div class="form-group">
									<button type="submit" class="btn dark-2 btn-md full-width pop-login">Login</button>
								</div>

							</form>
						</div>

						<div class="form-group text-center">
							<span>Or Signin with</span>
						</div>

						<div class="social_logs mb-4">
							<ul class="shares_jobs text-center">
								<li><a href="#" class="share fb"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="share gp"><i class="fa fa-google"></i></a></li>
								<li><a href="#" class="share ln"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>

					</div>
					<div class="modal-footer">
						<div class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="javascript:void(0)" class="theme-cl"> Sign Up</a></div>
						<div class="mf-forget"><a href="#"><i class="ti-help"></i>Forget Password</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Upload Resume -->
		<div class="modal fade" id="upload-resume" tabindex="-1" role="dialog" aria-labelledby="resumeupload" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="resumeupload">
					<div class="modal-header">
						<h4>Upload Resume</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
					</div>
					<div class="modal-body">

						<div class="login-form">
							<form>

								<div class="form-row">
									<div class="col-lg-6 col-md-12">
										<div class="form-group">
											<label>Full Name</label>
											<input type="text" class="form-control" placeholder="Username">
										</div>
									</div>

									<div class="col-lg-6 col-md-12">
										<div class="form-group">
											<label>E-Mail ID</label>
											<input type="email" class="form-control" placeholder="ucicl@gmail.com">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label>Paste Your Resume</label>
									<textarea class="form-control ht-150" placeholder="Copy & Paste Resume"></textarea>
								</div>

								<div class="form-group">
									<label class="light">doc, docx,pdf,txt,png</label>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="uploadResume">
										<label class="custom-file-label" for="uploadResume"><i class="ti-link mr-1"></i>Upload Resume</label>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn dark-2 btn-md full-width pop-login">Upload Resume</button>
								</div>

							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- Upload Resume -->