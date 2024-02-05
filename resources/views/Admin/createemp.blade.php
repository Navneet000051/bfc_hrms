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
					<h3 class="page-title">Employee</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Employee</li>
					</ul>
				</div>
				<div class="col-auto float-end ms-auto">
					<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_department"><i class="fa-solid fa-plus"></i> Add Employee</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		<!-- Inset Form --->
		<form action="{{route('employee')}}" method="post" enctype="multipart/form-data">
			@csrf
		<div class="container" style="border: 1px solid orange;border-radius: 6px; background: #fff;">
			<div class="row pt-3">
				<h4 class="text-center pb-2 heading"><i class="fa-solid fa-plus"></i>Add Employee</h4>

				<div class="col-sm-12 col-md-3">
					<div class="input-block mb-3 form-focus {{$errors->has('name') ? 'has-error' : ''}}">
						<input type="text" name="name" id="employee_name" class="form-control floating">
						
						<label for="employee_name" class="focus-label">Employee Name</label>
					</div>
					@error('name')
						<span class="text-danger">{{$message}}</span>
						@enderror
				</div>
				
				<div class="col-sm-12 col-md-3">
					<div class="input-block mb-3 form-focus">
						<input type="email" name="email" class="form-control floating">
						
						<label class="focus-label">Email ID</label>
					</div>
					@error('email')
						<span class="text-danger">{{$message}}</span>
						@enderror
				</div>
				<div class="col-sm-12 col-md-3">
					<div class="input-block mb-3 form-focus">
						<input type="number" name="mobile" class="form-control floating">
						<label class="focus-label">mobile Number</label></label>
						
					</div>
					@error('mobile')
						<span class="text-danger py-2">{{$message}}</span>
						@enderror
				</div>

				<div class="col-sm-12 col-md-3">
					<div class="input-block mb-3 form-focus">
						<select class="select floating" name="role">
						<option value="" selected disabled>--Choose Role--</option>
							@forelse($roles as $role)
								<option value="{{$role->id}}">{{ $role->name }}</option>
							@empty
								<option value="">No roles available</option>
							@endforelse
						</select>
						<label class="focus-label">Company</label>
					</div>
						
					@error('role')
						<span class="text-danger py-2">{{$message}}</span>
						@enderror
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-sm-12 col-lg-7">
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-5">
									<div class="input-block mb-3 form-focus">
										<input type="text" name="password" class="form-control floating">
										<label class="focus-label">Password</label>
									</div>
									@error('password')
										<span class="text-danger py-2">{{$message}}</span>
										@enderror
								</div>
								<div class="col-sm-12 col-md-12 col-lg-7">
									<div class="mb-3">
										<textarea class="form-control" name="address" style="height:100px !important;" placeholder="Address"></textarea>
									</div>
									
									@error('address')
										<span class="text-danger py-2">{{$message}}</span>
										@enderror
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-5" style="padding-bottom:15px;">
							<div class="row">
								<div class="col-sm-12 col-md-8 col-lg-8" style="padding-bottom:50px;">
									<div class="input-block mb-3 form-focus">
										<input name="image" type="file" class="dropify" data-height="85" />
									</div>
									@error('image')
									<span class="text-danger py-2">{{$message}}</span>
									@enderror
								</div>
								<div class="col-sm-12 col-md-4 col-lg-4">
									<div class="input-block mb-3 form-focus">
										<button class="btn btn-primary" type="submit">Submit</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>





			</div>

		</div>
        </form>
		<!-- Inserts Employee Form --->
		<!-- show Employee Data --->
		<div class="row pt-2">
			<div class="col-md-12">
				<div>
					<table id="yajradb" class="table table-striped ">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Type</th>
								<th width="105px">Action</th>
							</tr>
						</thead>
						<tbody class="ViewPermission">

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Content -->

	<!-- Edit Department Modal -->
	<div id="edit_department" class="modal custom-modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Department</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="input-block mb-3">
							<label class="col-form-label">Department Name <span class="text-danger">*</span></label>
							<input class="form-control" value="IT Management" type="text">
						</div>
						<div class="submit-section">
							<button class="btn btn-primary submit-btn">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Department Modal -->

	<!-- Delete Department Modal -->
	<div class="modal custom-modal fade" id="delete_department" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-header">
						<h3>Delete Department</h3>
						<p>Are you sure want to delete?</p>
					</div>
					<div class="modal-btn delete-action">
						<div class="row">
							<div class="col-6">
								<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
							</div>
							<div class="col-6">
								<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Department Modal -->

</div>

<!-- /Page Wrapper -->
@endsection()
@section('datatable')
<script type="text/javascript">
	$(document).ready(function() {
		$(function() {
			var table = $('#yajradb').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('employee') }}",
				columns: [{
						data: 'DT_RowIndex',
						name: 'DT_RowIndex'
					},
					{
						data: 'name',
						name: 'name'
					},
					{
						data: 'email',
						name: 'email'
					},
					{
						data: 'type',
						name: 'type'
					},
					{
						data: 'action',
						name: 'action',
						orderable: true,
						searchable: true
					},
				]
			});

		});
	});
</script>
@endsection