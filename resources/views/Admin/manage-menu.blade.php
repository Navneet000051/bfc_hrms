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
				@if(!empty($selectedmenu))
				<div class="col-auto float-end ms-auto">
					<a href="{{route('menu')}}" class="btn add-btn"><i class="fa-solid fa-plus"></i> Add Menu</a>
					
				</div>
				@endif
			</div>
		</div>
		<!-- /Page Header -->
		<!-- Inset Form --->
		<form action="{{route('Addmenu')}}" method="post" enctype="multipart/form-data" id="AddForm">
			@csrf
			<input type="hidden" name="id" @if(!empty($selectedmenu)) value="{{$selectedmenu->id}}" @endif>
			<input type="hidden" name="pid" @if(!empty($selectedmenu)) value="{{$selectedmenu->parent_id}}" @endif>
			<input type="hidden" name="sid" @if(!empty($selectedmenu)) value="{{$selectedmenu->subparent_id}}" @endif>
			<div class="container mb-5" style="border: 1px solid orange;border-radius: 6px; background: #fff;">
				<div class="row pt-3 pb-2 employee">

					<h4 class="text-center pb-2 heading">
						<?php if (!empty($selectedmenu)) {
							echo "Edit Menu";
						} else {
							echo "<i class='fa-solid fa-plus'> </i>Add Menu";
						} ?>
					</h4>


					<div class="col-sm-12 col-md-3">
						<label class="text-gray focus-label">Main Menu</label>
						<div class="input-block mb-3 form-focus">
							<select class="select floating" name="parent" id="parentSelect" onchange="choseLabel()" @if(!empty($selectedmenu)){{'disabled'}} @endif>
								<option value="0" @if(!empty($selectedmenu) && $selectedmenu->parent_id == 0) selected @endif>Parent Menu</option>

								@foreach($menus as $menu)
								<option value="{{ $menu->id }}" @if(!empty($selectedmenu) && $selectedmenu->parent_id == $menu->id ) selected @endif> {{ $menu->name }}</option>
								@endforeach
							</select>

						</div>
					</div>


					<div class="col-sm-12 col-md-3 menu-label">
						<label class="text-gray">Menu Label</label>
						<div class="input-block mb-3 form-focus">
							<select class="select floating" id="menuLabelSelect" onchange="handleMenuLabelChange()" name="label">
								<option value="0" @if(!empty($selectedmenu) && $selectedmenu->label == 0 ) selected @endif> Single Menu</option>
								<option value="1" @if(!empty($selectedmenu) && $selectedmenu->label == 1) selected @endif>Double Menu</option>
							</select>

						</div>
					</div>
					@if(!empty($selectedmenu) && $selectedmenu->label >= 1)
					<div class="col-sm-12 col-md-3">
						<label class="text-gray">Menu Name</label>
						<div class="input-block mb-3 form-focus">
							<select class="select floating" disabled>
								<option value="0" id="defaultselect" selected>{{$selectedmenu->subparent_name}}</option>

							</select>

						</div>
					</div>
					@endif


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
							<input type="text" class="form-control floating" name="name" placeholder="Menu Name" @if(!empty($selectedmenu)) value="{{ $selectedmenu->name }}" @endif>
							<!-- <label class="focus-label">Menu Name</label> -->
						</div>
					</div>

					<div class="col-sm-12 col-md-3">
						<label class="text-gray">Icon</label>
						<div class="input-block mb-3 form-focus">
							<input type="text" class="form-control floating" name="icon" placeholder="la la-home" @if(!empty($selectedmenu)) value="{{ $selectedmenu->icon }}" @endif>
							<!-- <label class="focus-label">la la-home</label> -->
						</div>
					</div>

					<div class="col-sm-12 col-md-3">
						<label class="text-gray">Url</label>
						<div class="input-block mb-3 form-focus">
							<input type="text" class="form-control floating" name="url" placeholder="Url" @if(!empty($selectedmenu)) value="{{ $selectedmenu->url }}" @endif>
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
										<?php if ($menu->status == 1) { ?>
											<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="fa-regular fa-circle-dot text-success"></i> Active
											</a>
										<?php } else {
										?>
											<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive </a>
										<?php

										} ?>
										<div class="dropdown-menu">
											<a class="dropdown-item" onclick="changeStatus('id','{{$menu->id}}','status','1','{{$tableName}}')"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
											<a class="dropdown-item" onclick="changeStatus('id','{{$menu->id}}','status','0','{{$tableName}}')"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
										</div>
									</div>
								</td>
								<td class="text-end">
									<li class="d-inline-flex">

										<a href="{{ route('Editmenu', ['Id' => $menu->id, 'parentId' => $menu->parent_id, 'subparentId' => $menu->subparent_id]) }}">
											<i class="fe fe-edit text-warning fs-5"></i>
										</a> &nbsp;&nbsp;
										<a onclick="deleteMenu('{{ $menu->id }}','0','0')">
											<i class="fe fe-trash-2 text-danger fs-5"></i>
										</a>
									</li>
								</td>


							</tr>

							<?php if ($menu->status == 1) { ?>
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
											<?php if ($mainMenu->status == 1) { ?>
												<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa-regular fa-circle-dot text-success"></i> Active
												</a>
											<?php } else {
											?>
												<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive </a>
											<?php
											}
											?>
											<div class="dropdown-menu">
												<a class="dropdown-item" onclick="changeStatus('id','{{$mainMenu->id}}','status','1','{{$tableName}}')"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
												<a class="dropdown-item" onclick="changeStatus('id','{{$mainMenu->id}}','status','0','{{$tableName}}')"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
											</div>
										</div>
									</td>
									<td class="text-end">
										<!-- <ul class="icons-list"><li><i class="fe fe-edit"></i></li><li><i class="fe fe-trash-2"></i></li></ul> -->
										<li class="d-inline-flex">
											<a href="{{ route('Editmenu', ['Id' => $mainMenu->id, 'parentId' => $mainMenu->parent_id, 'subparentId' => $mainMenu->subparent_id]) }}">
												<i class="fe fe-edit text-warning fs-5"></i>
											</a> &nbsp;&nbsp;
											
											<a onclick="deleteMenu('{{$mainMenu->id }}','{{$mainMenu->parent_id }}','{{$mainMenu->subparent_id }}')"><i class="fe fe-trash-2 text-danger fs-5"></i></a>
										</li>

									</td>
								</tr>
								<?php if ($mainMenu->status == 1) { ?>
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
												<?php if ($submenu->status == 1) { ?>
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-success"></i> Active
													</a>
												<?php } else {
												?>
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive </a>
												<?php

												} ?>
												<div class="dropdown-menu">
													<a class="dropdown-item" onclick="changeStatus('id','{{$submenu->id}}','status','1','{{$tableName}}')"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
													<a class="dropdown-item" onclick="changeStatus('id','{{$submenu->id}}','status','0','{{$tableName}}')"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
												</div>
											</div>
										</td>
										<td class="text-end">
											<li class="d-inline-flex">
												<a href="{{ route('Editmenu', ['Id' => $submenu->id, 'parentId' => $submenu->parent_id, 'subparentId' => $submenu->subparent_id]) }}">
													<i class="fe fe-edit text-warning fs-5"></i>
												</a> &nbsp;&nbsp;
											
												<a onclick="deleteMenu('{{$submenu->id }}','{{$submenu->parent_id }}','{{$submenu->subparent_id }}')"><i class="fe fe-trash-2 text-danger fs-5"></i></a>
												<!-- href="#" data-bs-toggle="modal" data-bs-target="#delete_client" -->
											</li>
										</td>
									</tr>
									@endforeach
								<?php } ?>
								@endforeach
							<?php } ?>
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
					<form action="{{route('Deletemenu')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<form action="{{route('Deletemenu')}}" method="post" enctype="multipart/form-data">
							<div class="col-6">
								<input type="hidden" name="type" value="delete" />
								<input type="hidden" name="Id" id="delId" />
								<input type="hidden" name="parentId" id="delParentId" />
								<input type="hidden" name="subparentId" id="delSubparentId" />
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
					// url: true // Make sure the value is a valid URL
				}
			},
			messages: {
				parent: "Please select a Parent Menu",
				menuLabelSelect: "Please select a Menu Label",
				name: "Please enter the Menu Name",
				icon: "Please enter the Icon",
				url: {
					required: "Please enter the URL",
					// url: "Please enter a valid URL"
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
	function deleteMenu(where_id, where_parent_id, where_subparent_id){
		$('#delete_client').modal('show');
		$('#delId').val(where_id);
		$('#delParentId').val(where_parent_id);
		$('#delSubparentId').val(where_subparent_id);
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