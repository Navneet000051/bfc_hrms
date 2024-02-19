<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<title>Login - HRMS admin template</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="https://bfcsofttech.com/assets/img/logo.webp">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="assets/css/line-awesome.min.css">
	<link rel="stylesheet" href="assets/css/material.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="assets/css/line-awesome.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--toaster cdn-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<style>

	</style>
</head>

<body class="account-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<div class="account-content">
			<div class="container">

				<!-- Account Logo -->
				<div class="account-logo">
					<a href="admin-dashboard.html"><img src="https://bfcsofttech.com/assets/img/logo.webp" alt="Dreamguy's Technologies"></a>
				</div>
				<!-- /Account Logo -->

				<div class="account-box">
					<div class="account-wrapper">
						<h3 class="account-title">Login</h3>
						<p class="account-subtitle">Access to our dashboard</p>
						@if (Session::has('message'))
						<div class="alert alert-success" role="alert">
							{{ Session::get('message') }}
						</div>
						@endif

						<form action="{{ route('forget.password.post') }}" method="POST">
							@csrf
							<div class="form-group mb-4">
								<label for="email_address" class=" col-form-label text-md-right">E-Mail Address</label>
								<div class="col-12">
									<input type="text" id="email_address" class="form-control" name="email" required autofocus>
									@if ($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary">
									Send Password Reset Link
								</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!--form-validation -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Custom JS -->
	<script src="assets/js/app.js"></script>
	<!-- Toastr cdn -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<script>
		$('input').keypress(function(e) {
			if (this.value.length === 0 && e.which === 32) e.preventDefault();
		});
		$('form').validate({

			rules: {
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 5,
					password: true

				},

			}
		});
	</script>


</body>

</html>