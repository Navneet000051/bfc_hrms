@extends('include.master')
@section('content')
<style>
	@media only screen and (min-width:890px){
		.col-md-2{
		width:20%;
	}
	
	}
	.select2-container .select2-selection.select2-selection--single {
    border: 1px solid #dcdcdc;
    height: 50px;
}
.text-gray{
	color:#888888;
	font-family: 'Nunito Sans', sans-serif;
}	
.sub-btn{
	height: 49px;
    line-height: 35px;
}
</style>
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
							<li class="breadcrumb-item active">Manage Menu</li>
						</ul>
					</div>

				</div>
			</div>
			<!-- /Page Header -->
			<!-- Inset Form --->
			<div class="container mb-5" style="border: 1px solid orange;border-radius: 6px; background: #fff;">
				<div class="row pt-3 pb-2 employee">
					<h4 class="text-center pb-2 heading"><i class="fa-solid fa-plus"></i>Add Menu</h4>
                    
					<div class="col-sm-12 col-md-3">
					<label class="text-gray focus-label">Main Menu</label>
						<div class="input-block mb-3 form-focus">
							<select class="select floating">
								<option value="0">Parent Menu</option>
								<option>Global Technologies</option>
								<option>Delta Infotech</option>
							</select>
							<label class="focus-label">Company</label>
						</div>
					</div>
					
                             
					<div class="col-sm-12 col-md-3">
					<label class="text-gray">Menu Label</label>
						<div class="input-block mb-3 form-focus">
							<select class="select floating" id="menuLabelSelect" onchange="choseLabel()">
								<option value="single">Single Menu</option>
								<option value="double">Double Menu</option>
							</select>
							<label class="focus-label">Company</label>
						</div>
					</div>

					<div class="col-sm-12 col-md-3">
					<label class="text-gray">Menu Name</label>
						<div class="input-block mb-3 form-focus">
							<select class="select floating">
								<option>Select Company</option>
								<option>Global Technologies</option>
								<option>Delta Infotech</option>
							</select>
							<label class="focus-label">Company</label>
						</div>
					</div>
					
					<div class="col-sm-12 col-md-3">
					<label class="text-gray">Menu Name</label>
						<div class="input-block mb-3 form-focus">
							<input type="text" class="form-control floating">
							<label class="focus-label">Employee Name</label>
						</div>
					</div>
					<div class="col-sm-12 col-md-3">
					<label class="text-gray">Sub Menu</label>
						<div class="input-block mb-3 form-focus">
							<input type="text" class="form-control floating">
							<label class="focus-label">Employee Name</label>
						</div>
					</div>
					<div class="col-sm-12 col-md-3">
					<label class="text-gray">Icon</label>
						<div class="input-block mb-3 form-focus">
							<input type="text" class="form-control floating">
							<label class="focus-label">la la-home</label>
						</div>
					</div>
					
					<div class="col-sm-12 col-md-3">
					<label class="text-gray">Main Menu</label>
						<div class="input-block mb-3 form-focus">
							<input type="url" class="form-control floating">
							<label class="focus-label">Url</label>
						</div>
					</div>
					
					<div class="col-sm-12 col-md-3 align-self-center">
					<a href="#" class="btn btn-success w-100 sub-btn"> Submit </a>
					</div>

				</div>

			</div>
			<!-- Inserts Employee Form --->
			<!-- Search Filter -->
			<div class="row filter-row">
				<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
					<div class="input-block mb-3 form-focus">
						<input type="text" class="form-control floating">
						<label class="focus-label">Menu Name</label>
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
									<th>Role Id</th>
									<th>Role Name</th>
									<th>Datetime</th>
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


		<!-- /Add Roles Modal -->

		<!-- Edit Client Modal -->
		<div id="edit_client" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Client</h5>
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
		<!-- /Edit Client Modal -->

		<!-- Delete Client Modal -->
		<div class="modal custom-modal fade" id="delete_client" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete Client</h3>
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
		<!-- /Delete Client Modal -->

	</div>

	<!-- /Page Wrapper -->
	@endsection()
	@section('datatable')
	<script>
		function choseLabel(){
			var id = $('#menuLabelSelect').val();
			alert(id);
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
						{
							data: 'id',
							name: 'id'
						},
						{
							data: 'name',
							name: 'name'
						},
						{
							data: 'created_at',
							name: 'created_at'
						},
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