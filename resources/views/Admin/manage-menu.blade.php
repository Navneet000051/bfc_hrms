@extends('include.master')
@section('content')

<style>
	@media only screen and (min-width:890px) {
		.col-md-2 {
			width: 20%;
		}

	}

	.form-focus .form-control {
		height: 50px;
		padding: 10px 12px 6px;
	}

	.select2-container .select2-selection.select2-selection--single {
		border: 1px solid #dcdcdc;
		height: 50px;
	}

	.text-gray {
		color: #888888;
		font-family: 'Nunito Sans', sans-serif;
	}

	.sub-btn {
		height: 49px;
		line-height: 35px;
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
		<form action="{{route('AddMenu')}}" method="post" enctype="multipart/form-data" id="AddForm">
			@csrf

			<div class="container mb-5" style="border: 1px solid orange;border-radius: 6px; background: #fff;">
				<div class="row pt-3 pb-2 employee">

					<h4 class="text-center pb-2 heading"><i class="fa-solid fa-plus"></i>Add Menu</h4>


					<div class="col-sm-12 col-md-3">
						<label class="text-gray focus-label">Main Menu</label>
						<div class="input-block mb-3 form-focus">
							<select class="select floating" name="parent" id="parentSelect" onchange="choseLabel()">
								<option value="0">Parent Menu</option>

								@foreach($menus as $menu)
								<option value="{{ $menu->id }}">{{ $menu->name }}</option>
								@endforeach

							</select>

						</div>
					</div>


					<div class="col-sm-12 col-md-3 menu-label">
						<label class="text-gray">Menu Label</label>
						<div class="input-block mb-3 form-focus">
							<select class="select floating" id="menuLabelSelect" onchange="handleMenuLabelChange()" name="label">
								<option value="0" selected>Single Menu</option>
								<option value="1">Double Menu</option>
							</select>

						</div>
					</div>

					<div class="col-sm-12 col-md-3 d-none" id="subparent">
						<label class="text-gray">Menu Name</label>
						<div class="input-block mb-3 form-focus">
							<select class="select floating" name="subparent" id="subparentSelect">
								<option value="0" id="defaultselect" selected>Select Menu</option>

							</select>

						</div>
					</div>

					<div class="col-sm-12 col-md-3">
						<label class="text-gray d-block" id="parentmenu">Menu Name</label>
						<label class="text-gray d-none" id="submenu">Submenu Name</label>
						<div class="input-block mb-3 form-focus">
							<input type="text" class="form-control floating" name="name" placeholder="Menu Name">
							<!-- <label class="focus-label">Menu Name</label> -->
						</div>
					</div>

					<div class="col-sm-12 col-md-3">
						<label class="text-gray">Icon</label>
						<div class="input-block mb-3 form-focus">
							<input type="text" class="form-control floating" name="icon" placeholder="la la-home">
							<!-- <label class="focus-label">la la-home</label> -->
						</div>
					</div>

					<div class="col-sm-12 col-md-3">
						<label class="text-gray">Url</label>
						<div class="input-block mb-3 form-focus">
							<input type="url" class="form-control floating" name="url" placeholder="Url">
							<!-- <label class="focus-label">Url</label> -->
						</div>
					</div>

					<div class="col-sm-12 col-md-3 align-self-center">
						<button type="submit" class="btn btn-success w-100 sub-btn"> Submit </button>
					</div>


				</div>

			</div>
		</form>
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
					<table class="table table-striped custom-table datatable">
						<thead>
							<tr>
								<th>ID</th>
								<th>Main Menu</th>
								<th>Menu</th>
								<th>Sub Menu</th>
								<th>Icon</th>
								<th>Status</th>
								<th class="text-end">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($menus as $menu)
							<!-- Display parent menu data -->
							<tr>
								<td>{{ $menu->id }}</td>
								<td>{{ $menu->name }}</td>
								<!-- Add other columns as needed -->
								<td></td>
								<td></td>

								<td>9876543210</td>
								<td>
									<div class="dropdown action-label">
										<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fa-regular fa-circle-dot text-success"></i> Active
										</a>
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

						</tbody>
						<tbody>
							@foreach($menu->mainmenus as $mainMenu)
							<!-- Display main menu data -->
							<tr>
								<td>{{ $mainMenu->id }}</td>
								<td>{{ $menu->name }}</td>
								<td>{{ $mainMenu->name }}</td>
								<td></td>
								<td>9876543210</td>
								<td>
									<div class="dropdown action-label">
										<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fa-regular fa-circle-dot text-success"></i> Active
										</a>
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
						</tbody>
						<tbody>
							@foreach($mainMenu->submenus as $submenu)
							<!-- Display submenu data -->
							<tr>
								<td>{{ $submenu->id }}</td>
								<td>{{ $menu->name }}</td>
								<td>{{ $mainMenu->name }}</td>
								<td>{{ $submenu->name }}</td>
								<td>9876543210</td>
								<td>
									<div class="dropdown action-label">
										<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fa-regular fa-circle-dot text-success"></i> Active
										</a>
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
							@endforeach
							@endforeach
							@endforeach
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
<!-- <script type="text/javascript">
       $('#AddForm').validate({
		ignore:'input:hidden',
		rules:{
			name:{
				required:true,
			},
			icon:{
				required:true,
			},
			url:{
				required:true,
			}
		}
	   });
	</script> -->
<script>
	$(document).ready(function() {
		// Initialize form validation on the #AddForm element
		$("#AddForm").validate({
			rules: {
				parent: "required",
				menuLabelSelect: "required",
				name: "required",
				icon: "required",
				url: {
					required: true,
					url: true // Make sure the value is a valid URL
				}
			},
			messages: {
				parent: "Please select a Parent Menu",
				menuLabelSelect: "Please select a Menu Label",
				name: "Please enter the Menu Name",
				icon: "Please enter the Icon",
				url: {
					required: "Please enter the URL",
					url: "Please enter a valid URL"
				}
			},
			errorElement: "span",
			errorPlacement: function(error, element) {
				// Adjust the placement of the error message
				error.addClass("invalid-feedback");
				element.closest(".form-focus").append(error);
			},
			highlight: function(element, errorClass, validClass) {
				// Highlight error field
				$(element).addClass("is-invalid").removeClass("is-valid");
			},
			unhighlight: function(element, errorClass, validClass) {
				// Unhighlight valid field
				$(element).addClass("is-valid").removeClass("is-invalid");
			}
		});
	});
</script>
<script>
	// Disable selection for options
	$(document).ready(function() {
		// Disable the select dropdown initially
		$('#menuLabelSelect').prop('disabled', true);

		// Intercept the form submission
		$('form').submit(function() {
			// Enable the select dropdown just before submitting the form
			$('#menuLabelSelect').prop('disabled', false);

			// Optionally, you can store the selected value in a hidden input field
			// and then retrieve it on the server-side when processing the form
			$('#hiddenSelectedValue').val($('#menuLabelSelect').val());

			function choseLabel1() {
				var id = $('#menuLabelSelect').val();
				alert(id)

				if (id == '0') {
					$('#subparent').html(`
                    <option value="newOption1" selected>Select Menu</option>
                          `);

				}
			}
			// Continue with the form submission
			return true;
		});
	});

	// $('#menuLabelSelect').prop('disabled', true);
</script>
<script>
	function choseLabel() {
		var id = $('#parentSelect').val();
		// alert(id)
		if (id !== 0) {

			$('#menuLabelSelect').prop('disabled', false);
		}
		if (id == 0) {
			$('#menuLabelSelect').prop('disabled', true);
		}
	}
</script>
<script>
	function handleMenuLabelChange() {
		choseLabel1();
		updateSubparentOptions();
	}

	function choseLabel1() {
		var id = $('#menuLabelSelect').val();
		alert(id);
		if (id !== '0') {
			$('#subparent').removeClass('d-none');
			$('#submenu').removeClass('d-none');
			$('#parentmenu').removeClass('d-block');
			$('#parentmenu').addClass('d-none');
		}
		if (id == '0') {
			$('#subparent').addClass('d-none');
			$('#submenu').addClass('d-none');
			$('#parentmenu').removeClass('d-none');
		}
	}

	// Function to update options
	function updateSubparentOptions() {
		var id = $('#menuLabelSelect').val();
		if (id == '0') {
			$('#subparent').html('<option value="newOption1" selected>Select Menu</option>');
		}
	}
</script>
<script>
	$(document).ready(function() {
		// Event listener for the change event on the parent dropdown
		$('#parentSelect').on('change', function() {
			// Get the selected value from the parent dropdown
			var selectedValue = $(this).val();
			// alert(selectedValue);
			// Call a function to populate the subparent dropdown
			populateSubparentDropdown(selectedValue);
		});

		// Function to populate the subparent dropdown based on the selected parent value
		function populateSubparentDropdown(parentId) {
			// alert(selectedValue);
			// Make an Ajax request to fetch data based on the selected parent ID
			$.ajax({
				url: '/getSubparentData/' + parentId, // Replace with your Laravel route
				type: 'GET',
				success: function(data) {
					// Clear existing options in the subparent dropdown
					$('#subparentSelect').empty();

					// Add a default option
					$('#subparentSelect').append('<option value="0" selected>Select Menu</option>');

					// Iterate over the fetched data and append options to the subparent dropdown
					$.each(data, function(index, value) {
						$('#subparentSelect').append('<option value="' + value.id + '">' + value.name + '</option>');
					});
				},
				error: function(error) {
					console.error('Error fetching subparent data:', error);
				}
			});
		}
	});
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