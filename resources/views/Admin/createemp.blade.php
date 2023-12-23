@extends('include.master')
@section('content')
<style>
	.form-focus .form-control {
		height: 38px !important;
	}

	.form-focus .focus-label {
		font-size: 12px !important;
	}

	.heading {
		background: linear-gradient(to right, #ff9b44 0%, #fc6075 100%);
		-webkit-background-clip: text;
		background-clip: text;
		-webkit-text-fill-color: transparent;
		font-weight: 600;
	}

	.dropify-wrapper .dropify-message p {
		margin: 0;
		font-size: 12px !important;
	}

	.dropify-wrapper .dropify-message span.file-icon {
		font-size: 20px;
		color: #CCC;
	}

	@media only screen and (max-width: 750px) {
		.employee {
			position: relative;
			height: max-content;
           padding-bottom: 4rem;

		}
	}
</style>
<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Department</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Department</li>
					</ul>
				</div>
				<div class="col-auto float-end ms-auto">
					<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_department"><i class="fa-solid fa-plus"></i> Add Department</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		<!-- Inset Form --->
		<div class="container" style="border: 1px solid orange;border-radius: 6px; background: #fff;">
			<div class="row pt-3">
				<h4 class="text-center pb-2 heading"><i class="fa-solid fa-plus"></i>Add Employee</h4>

				<div class="col-sm-12 col-md-8 col-lg-8">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="input-block mb-3 form-focus">
								<input type="email" class="form-control floating">
								<label class="focus-label">Email ID</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">mobile Number</label></label>
							</div>
						</div>
						

						<div class="col-12">

							<div class="table-responsive m-t-15">
								<table class="table table-striped custom-table">
									<thead>
										<tr>
											<th>Module Permission</th>
											<th class="text-center">Read</th>
											<th class="text-center">Write</th>
											<th class="text-center">Create</th>
											<th class="text-center">Delete</th>
											<th class="text-center">Import</th>
											<th class="text-center">Export</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Projects</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Tasks</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Chat</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Estimates</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Invoices</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Timing Sheets</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked="">
													<span class="checkmark"></span>
												</label>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 employee">
					
				<div class="col-sm-12">
							<div class="input-block mb-3 form-focus">
							<select class="select floating"> 
								<option>Select Company</option>
								<option>Global Technologies</option>
								<option>Delta Infotech</option>
							</select>
							<label class="focus-label">Company</label>
							</div>
						</div>
				<div class="col-sm-12">
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Password</label>
							</div>
						</div>
					<div class="col-sm-12">
						<div class="mb-3">
						<textarea class="form-control" style="height:110px !important;" placeholder="Address"></textarea>
						
						</div>
					</div>
					
					
						<div class="col-sm-12">
						<div class="input-block mb-3 form-focus">
							<input name="file1" type="file" class="dropify" data-height="100" />
						</div>
					</div>
					

				</div>

			</div>

		</div>
		<!-- Inserts Employee Form --->
		<!-- <div class="row pt-2">
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
						<tbody>

						</tbody>
					</table>
				</div>
			</div>
		</div> -->
	</div>
	<!-- /Page Content -->

	<!-- Add Department Modal -->
	<div id="add_department" class="modal custom-modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add Department</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="input-block mb-3">
							<label class="col-form-label">Department Name <span class="text-danger">*</span></label>
							<input class="form-control" type="text">
						</div>
						<div class="submit-section">
							<button class="btn btn-primary submit-btn">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Department Modal -->

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