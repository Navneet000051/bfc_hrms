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
							
							<!-- Account Form -->
							<form action="{{route('login')}}" method="post">
								@csrf
								<div class="input-block mb-3">
									<label class="col-form-label">Email Address</label>
									<input class="form-control" type="email" name="email" value="{{old('email')}}">
								</div>
								<span class="text-danger">
								@error('email')
								{{$message}}
								@enderror
								</span>

								
								<div class="input-block mb-3">
								<label class="col-form-label">Password</label>
									<div class="position-relative">
										<input class="form-control" type="password" name="password" id="password">
										<span class="fa-solid fa-eye-slash" id="toggle-password"></span>
									</div>
								</div>
								
								<span class="text-danger">
								@error('password')
								{{$message}}
								@enderror
								</span>
								<div class="input-block mb-4 text-center">
									<button class="btn btn-primary account-btn" type="submit">Login</button>
								</div>

								
							</form>
							<!-- /Account Form -->
							
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
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		 <!-- Toastr cdn -->
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<script>
    @if(Session::has('success'))
        toastr.success('{{ Session::get('success')}}', 'Success');
    @endif

    @if(Session::has('error'))
        toastr.error('{{ Session::get('error')}}', 'Error');
    @endif
</script>
    </body>
</html>