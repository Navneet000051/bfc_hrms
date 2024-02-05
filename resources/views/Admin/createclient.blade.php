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
							<h3 class="page-title">Clients</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Clients</li>
							</ul>
						</div>
						<div class="col-auto float-end ms-auto">
							<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_client"><i class="fa-solid fa-plus"></i> Add Client</a>
							<div class="view-icons">
								<a href="clients.html" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
								<a href="clients-list.html" class="list-view btn btn-link active"><i class="fa-solid fa-bars"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<!-- Search Filter -->
				<div class="row filter-row">
					<div class="col-sm-6 col-md-3">  
						<div class="input-block mb-3 form-focus">
							<input type="text" class="form-control floating">
							<label class="focus-label">Client ID</label>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">  
						<div class="input-block mb-3 form-focus">
							<input type="text" class="form-control floating">
							<label class="focus-label">Client Name</label>
						</div>
					</div>
					<div class="col-sm-6 col-md-3"> 
						<div class="input-block mb-3 form-focus select-focus">
							<select class="select floating"> 
								<option>Select Company</option>
								<option>Global Technologies</option>
								<option>Delta Infotech</option>
							</select>
							<label class="focus-label">Company</label>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">  
						<div class="d-grid">
							<a href="#" class="btn btn-success"> Search </a>  
						</div>
					</div>     
				</div>
				<!-- Search Filter -->

				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table id="yajradb" class="table table-striped ">
								<thead>
									<tr>
										<th>Sr. No.</th>
										<th>Name</th>
										<th>Client ID</th>
										<th>Contact Person</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Status</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody class="ViewPermission">
									<!-- <tr>
										<td>
											<h2 class="table-avatar">
												<a href="client-profile.html" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
												<a href="client-profile.html">Global Technologies</a>
											</h2>
										</td>
										<td>CLT-0001</td>
										<td>Barry Cuda</td>
										<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f7d7e6d6d667c6a7b7e5f7a677e726f737a317c7072">[email&#160;protected]</a></td>
										<td>9876543210</td>
										<td>
											<div class="dropdown action-label">
												<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
													<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
												</div>
											</div>
										</td>
										<td class="text-end">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									 -->
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->
		
			<!-- Add Client Modal -->
			<div id="add_client" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Client</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">First Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Last Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Username <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Email <span class="text-danger">*</span></label>
											<input class="form-control floating" type="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Password</label>
											<input class="form-control" type="password">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Confirm Password</label>
											<input class="form-control" type="password">
										</div>
									</div>
									<div class="col-md-6">  
										<div class="input-block mb-3">
											<label class="col-form-label">Client ID <span class="text-danger">*</span></label>
											<input class="form-control floating" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Phone </label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Company Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
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
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Add Client Modal -->
			
			<!-- Edit Client Modal -->
			<div id="edit_client" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Client</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">First Name <span class="text-danger">*</span></label>
											<input class="form-control" value="Barry" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Last Name</label>
											<input class="form-control" value="Cuda" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Username <span class="text-danger">*</span></label>
											<input class="form-control" value="barrycuda" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Email <span class="text-danger">*</span></label>
											<input class="form-control floating" value="barrycuda@example.com" type="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Password</label>
											<input class="form-control" value="barrycuda" type="password">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Confirm Password</label>
											<input class="form-control" value="barrycuda" type="password">
										</div>
									</div>
									<div class="col-md-6">  
										<div class="input-block mb-3">
											<label class="col-form-label">Client ID <span class="text-danger">*</span></label>
											<input class="form-control floating" value="CLT-0001" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Phone </label>
											<input class="form-control" value="9876543210" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Company Name</label>
											<input class="form-control" type="text" value="Global Technologies">
										</div>
									</div>
								</div>
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
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Save</button>
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
	<script type="text/javascript">
	$(document).ready(function() {
		$(function() {
			var table = $('#yajradb').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('client') }}",
				columns: [
					{
						data: 'DT_RowIndex',
						name: 'DT_RowIndex'
					},
					{
						data: 'name', name: 'name'
					},
					{
						data: 'clientid',name: 'clientid'
					},
					{
						data: 'cperson', name: 'cperson'
					},
					{
						data: 'email', name: 'email'
					},
					{
						data: 'mobile',name: 'mobile'
					},
					{
						data: 'status', name: 'status'
					},
					{
						data: 'action', name: 'action',
						orderable: true,
						searchable: true
					},
				]
			});

		});
	});
</script>

@endsection