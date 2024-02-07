@extends('include.master')
@section('content')
<style>
	.form-control {
		height: 35px;
	}
</style>
<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Profile</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Profile</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="card mb-0">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="profile-view">
							<div class="profile-img-wrap">
								<form id="updateProfileForm" method="POST" action="{{ route('updateProfileImg') }}" enctype="multipart/form-data">
									@csrf
									<div class="profile-img-wrap edit-img">
										<img class="inline-block" src="{{ asset('storage/' . auth()->user()->icon) }}" alt="User Image">
										<div class="fileupload btn">
											<span class="btn-text">edit</span>
											<input id="imageInput" class="upload" type="file" name="icon">
										</div>
									</div>
								</form>


							</div>
							<div class="profile-basic">
								<div class="row">
									<div class="col-md-5">
										<div class="profile-info-left">

											<h3 class="user-name m-t-0 mb-0">{{ auth()->user()->name }}</h3>
											<h6 class="text-muted"></h6>
											<div class="staff-id">Employee ID :{{ auth()->user()->role_id }}</div>
											<div class="staff-id pt-1">Designation :{{ auth()->user()->name }}</div>
											<div class="small doj text-muted pt-1">Date of Join : {{ auth()->user()->created_at }}</div>

										</div>
									</div>
									<div class="col-md-7">
										<form action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data">
											@csrf
											@method('patch')
											<ul class="personal-info">
												<input type="hidden" name="id" value="{{auth()->user()->id}}" />
												<li>
													<div class="title">Mobile:</div>
													<input type="text" name="mobile" readonly class="form-control floating py-0 " value="{{auth()->user()->mobile}}">

												</li>

												<li>
													<div class="title">Email:</div>
													<input type="text" class="form-control floating py-0" name="email" value="{{auth()->user()->email}}" readonly>
												</li>

												<li>
													<div class="title">Address:</div>
													<textarea class="form-control floating py-0" name="address" readonly>{{auth()->user()->address}}</textarea>
												</li>
												<button class="btn btn-primary m-auto submit-btn  d-none">Submit</button>
												
											</ul>
                                              
										</form>

									</div>
								</div>
							</div>
							<div class="pro-edit" style="bottom:0"><a class="edit-icon" onclick="removeReadonly()" href="#"><i class="fa-solid fa-pencil"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>



	</div>
	<!-- /Page Content -->





</div>
<!-- /Page Wrapper -->
@endsection
@section('externaljs')
<script>
	$(document).ready(function() {
		$('#imageInput').change(function() {
			$('#updateProfileForm').submit();
		});
	});

	$('input[name="phone"]').on('input', function() {
        $(this).val($(this).val().replace(/\D/g, '')); // Remove non-digits
        if ($(this).val().length > 10) {
          $(this).val($(this).val().substr(0, 10)); // Limit to 10 digits
        }
      });
</script>
<script>
	function removeReadonly(){
		$('input').removeAttr('readonly');
		$('textarea').removeAttr('readonly');
		$('.pro-edit').addClass('d-none');
		$('.submit-btn').removeClass('d-none');
		

	}
</script>
@endsection