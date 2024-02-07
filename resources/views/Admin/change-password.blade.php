@extends('include.master')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<a><img src="https://bfcsofttech.com/assets/img/logo.webp" class="mx-auto d-block" width=120 alt="BFC Hrms"></a>
				</div>

			</div>
		</div>
		<!-- /Page Header -->
		<!-- Inset Form --->
		<div class="container">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6 px-4 py-1 bg-white">

					<div class="account-wrapper">
						<h3 class="account-title text-center pt-2">Change Password</h3>

						<!-- Account Form -->
						<form action="{{route('changePassword')}}" method="post">
							@csrf
							@method('PUT')
							<div class="input-block mb-2">
								<label class="col-form-label">Current Password<span class="mandatory">*</span></label>
								<input class="form-control" type="password" name="current-password">
								@error('current-password')
								<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>
							<div class="input-block mb-2">
								<label class="col-form-label">New Password<span class="mandatory">*</span></label>
								<input class="form-control" type="password" name="new-password">
								@error('new-password')
								<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>
							<div class="input-block mb-2">
								<label class="col-form-label">Confirm Password<span class="mandatory">*</span></label>
								<input class="form-control" type="password" name="password_confirmation">
								@error('password_confirmation')
								<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>
							<div class="input-block mb-2 text-center">
								<button class="btn btn-primary account-btn" type="submit">Submit</button>
							</div>

						</form>
						<!-- /Account Form -->
					</div>
					<div class="col-lg-3"></div>

				</div>

			</div>
			<!-- Inserts Employee Form --->

		</div>
		<!-- /Page Content -->


	</div>

	<!-- /Page Wrapper -->
	@endsection()