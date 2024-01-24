@extends('include.master')
@section('content')
<!-- Main Wrapper -->
<div class="main-wrapper">

	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<!-- Page Content -->
		<div class="content container-fluid">

			<!-- Page Header -->
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<h3 class="page-title">Roles</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
							<li class="breadcrumb-item active">Manage Roles</li>
						</ul>
					</div>
					<div class="col-auto float-end ms-auto">
						<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_client"><i class="fa-solid fa-plus"></i> Add Roles</a>

					</div>
				</div>
			</div>
			<!-- /Page Header -->
			<!-- Search Filter -->
			<div class="row filter-row">
				<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
					<div class="input-block mb-3 form-focus">
						<input type="text" class="form-control floating">
						<label class="focus-label">Employee Name</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
					<div class="input-block mb-3 form-focus select-focus">
						<select class="select floating">
							<option> -- Select -- </option>
							<option> Pending </option>
							<option> Approved </option>
							<option> Returned </option>
						</select>
						<label class="focus-label">Status</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
					<div class="input-block mb-3 form-focus select-focus">
						<select class="select floating">
							<option> -- Select -- </option>
							<option> High </option>
							<option> Low </option>
							<option> Medium </option>
						</select>
						<label class="focus-label">Priority</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
					<div class="input-block mb-3 form-focus">
						<div class="cal-icon">
							<input class="form-control floating datetimepicker" type="text">
						</div>
						<label class="focus-label">From</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
					<div class="input-block mb-3 form-focus">
						<div class="cal-icon">
							<input class="form-control floating datetimepicker" type="text">
						</div>
						<label class="focus-label">To</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
					<a href="#" class="btn btn-success w-100"> Search </a>
				</div>
			</div>
			<!-- /Search Filter -->


			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table id="yajradb" class="table table-striped w-100">
							<thead>
								<tr>
									<th>Sr. No.</th>
									<!-- <th>Role Id</th> -->
									<th>Role Name</th>
									<!-- <th>Datetime</th> -->
									<th>Status</th>
									<th>Actions</th>
								</tr>

							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Content -->

		<!-- Add Roles Modal -->
		<!-- Add Department Modal -->
		<div id="add_client" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Department</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{ route('AddRole') }}" method="post">
							@csrf
							<div class="input-block mb-3">
								<label class="col-form-label">Department Name <span class="text-danger">*</span></label>
								<input class="form-control" name="roles" type="text">
								<!-- @error('roles')
								<span class="text-danger">{{ $message }}</span>
								@enderror -->
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>

		<!-- /Add Roles Modal -->

		<!-- Edit Client Modal -->
		<div id="edit_client" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Role</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Client Modal -->

		<!-- Delete Client Modal -->
		<div class="modal custom-modal fade" id="delete_modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete Client</h3>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn delete-action">
							<form action="{{route('DeleteData')}}" method="post" enctype="multipart/form-data">
								@csrf
								@method('DELETE')
								<div class="row">
									<form action="{{route('Deletemenu')}}" method="post" enctype="multipart/form-data">
										<div class="col-6">
											<input type="hidden" name="Id" id="delId" />
											<input type="hidden" name="column" id="delColumn" />
											<input type="hidden" name="table" id="delTable" />
											<input type="submit" value="Delete" class="btn btn-primary continue-btn py-0 form-control w-100">
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Client Modal -->

	</div>

	<!-- /Page Wrapper -->
	@endsection()
	@section('datatable')

	<script>
		function showEdit(id) {
			$('#edit_client').modal("show");
			$('#edit_client .modal-body').html("<center><i class= 'fa fa-2x fa-spin fa-spinner text-warning'></i></center>");

			// Use proper concatenation to include the id in the route
			$('#edit_client .modal-body').load("{{ route('Updateroles', ':id') }}".replace(':id', id));
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(function() {
				var table = $('#yajradb').DataTable({
					processing: true,
					serverSide: true,
					ajax: "{{ route('roles') }}",
					columns: [{
							data: 'DT_RowIndex',
							name: 'DT_RowIndex'
						},
						// {
						// 	data: 'id',
						// 	name: 'id'
						// },
						{
							data: 'name',
							name: 'name'
						},
						// {
						// 	data: 'created_at',
						// 	name: 'created_at'
						// },
						{
							data: 'status',
							name: 'status'
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