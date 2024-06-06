@extends('layouts.auth')

@section('content')

<!-- Page Content -->
<div class="bg-image" style="background-image: url(media/photos/photo22@2x.jpg);">
	<div class="row g-0 bg-primary-op">
	<!-- Main Section -->
	<div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
		<div class="p-3 w-100">
		<!-- Header -->
		<div class="mb-3 text-center">
			<a class="link-fx fw-bold fs-1" href="/">
			<span class="text-uppercase">Preama</span>
			</a>
			<p class="text-uppercase fw-bold fs-sm text-muted">ERP</p>
		</div>
		<!-- END Header -->

		<!-- Sign In Form -->
		<!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
		<!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
		<div class="row g-0 justify-content-center">
			<div class="col-sm-8 col-xl-6">
			<form class="js-validation-signin" action="" method="POST" novalidate="novalidate">
				@csrf
				<div class="py-3">
				<div class="mb-4">
					<input type="text" class="form-control form-control-lg form-control-alt" id="login-username" name="login-username" placeholder="Почта">
				</div>
				<div class="mb-4">
					<input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="login-password" placeholder="Пароль">
				</div>
				</div>
				<div class="mb-4">
				<button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
					<i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Войти
				</button>
				{{--
				<p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
					<a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="op_auth_reminder.html">
					<i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Забыли пароль?
					</a>
					<a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="op_auth_signup.html">
					<i class="fa fa-plus opacity-50 me-1"></i> Зарегистрироваться
					</a>
				</p>	
				--}}
				</div>
			</form>
			</div>
		</div>
		<!-- END Sign In Form -->
		</div>
	</div>
	<!-- END Main Section -->

	<!-- Meta Info Section -->
	<div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
		<div class="p-3">
		<p class="display-4 fw-bold text-white mb-3"></p>
		<p class="fs-lg fw-semibold text-white-75 mb-0"></p>
		</div>
	</div>
	<!-- END Meta Info Section -->
	</div>
</div>

@endsection
