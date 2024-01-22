@extends('include.master')
@section('content')

<style>
	/* Add this CSS to your stylesheet or in a style tag in the head */
	.overlay {
		display: none;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgb(61 52 52 / 29%);
		z-index: 9998;
	}

	.loader-container {
		display: none;
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		z-index: 9999;
	}

	.loader {
		border: 8px solid #f3f3f3;
		border-top: 8px solid #3498db;
		border-radius: 50%;
		width: 50px;
		height: 50px;
		animation: spin 1s linear infinite;
	}

	@keyframes spin {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}
</style>



<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<div class="overlay"></div>
		<div class="loader-container">
			<div class="loader"></div>
		</div>
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
					<form action="" method="post">
						<table class="table table-striped custom-table datatable">
							<thead>
								<tr>
									<th>ID</th>
									<th>Main Menu</th>
									<th>Menu</th>
									<th>Sub Menu</th>
									<th>Menu</th>
									<th class="text-center">Add</th>
									<th class="text-center">Edit</th>
									<th class="text-center">View</th>
									<th class="text-center">Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php $sr = 1; ?>
								@foreach($menus as $menu)
								<!-- Display parent menu data -->
								<tr>
									<td>{{ $sr++ }}</td>
									<td>{{ $menu->name }}</td>
									<!-- Add other columns as needed -->
									<td></td>
									<td></td>

									<td class="text-center" data-type="menu_status">
										<label class="custom_check">
											<input name="menustatus" type="checkbox" {{ $menu->menu_status == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $menu->id }}','{{ $menu->parent_id }}','{{ $menu->subparent_id }}','{{$role_id}}','type')">
											<span class="checkmark"></span>
										</label>
									</td>
									<td class="text-center" data-type="add">
										<label class="custom_check">
											<input name="addstatus" type="checkbox" {{ $menu->add == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $menu->id }}','{{ $menu->parent_id }}','{{ $menu->subparent_id }}','{{$role_id}}',1)">
											<span class="checkmark"></span>
										</label>
									</td>
									<td class="text-center" data-type="edit">
										<label class="custom_check">
											<input name="editstatus" type="checkbox" {{ $menu->edit == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $menu->id }}','{{ $menu->parent_id }}','{{ $menu->subparent_id }}','{{$role_id}}',1)">
											<span class="checkmark"></span>
										</label>
									</td>
									<td class="text-center" data-type="view">
										<label class="custom_check">
											<input name="viewstatus" type="checkbox" {{ $menu->view == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $menu->id }}','{{ $menu->parent_id }}','{{ $menu->subparent_id }}','{{$role_id}}',1)">
											<span class="checkmark"></span>
										</label>
									</td>
									<td class="text-center" data-type="delete">
										<label class="custom_check">
											<input name="deletestatus" type="checkbox" {{ $menu->delete == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $menu->id }}','{{ $menu->parent_id }}','{{ $menu->subparent_id }}','{{$role_id}}',1)">
											<span class="checkmark"></span>
										</label>
									</td>
								</tr>

								<?php if ($menu->status == 1) { ?>
									@foreach($menu->mainmenus as $mainMenu)

									<!-- Display main menu data -->

									<tr>
										<td>{{ $sr++ }}</td>
										<td>{{ $menu->name }}</td>
										<td>{{ $mainMenu->name }}</td>
										<td></td>

										<td class="text-center" data-type="menu_status">
											<label class="custom_check">
												<input name="menustatus" type="checkbox" {{ $mainMenu->menu_status == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $mainMenu->id }}','{{ $mainMenu->parent_id }}','{{ $mainMenu->subparent_id }}','{{$role_id}}')">
												<span class="checkmark"></span>
											</label>
										</td>
										<td class="text-center" data-type="add">
											<label class="custom_check">
												<input name="addstatus" type="checkbox" {{ $mainMenu->add == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $mainMenu->id }}','{{ $mainMenu->parent_id }}','{{ $mainMenu->subparent_id }}','{{$role_id}}',1)">
												<span class="checkmark"></span>
											</label>
										</td>
										<td class="text-center" data-type="edit">
											<label class="custom_check">
												<input name="editstatus" type="checkbox" {{ $mainMenu->edit == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $mainMenu->id }}','{{ $mainMenu->parent_id }}','{{ $mainMenu->subparent_id }}','{{$role_id}}',1)">
												<span class="checkmark"></span>
											</label>
										</td>
										<td class="text-center" data-type="view">
											<label class="custom_check">
												<input name="viewstatus" type="checkbox" {{ $mainMenu->view == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $mainMenu->id }}','{{ $mainMenu->parent_id }}','{{ $mainMenu->subparent_id }}','{{$role_id}}',1)">
												<span class="checkmark"></span>
											</label>
										</td>
										<td class="text-center" data-type="delete">
											<label class="custom_check">
												<input name="deletestatus" type="checkbox" {{ $mainMenu->delete == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $mainMenu->id }}','{{ $mainMenu->parent_id }}','{{ $mainMenu->subparent_id }}','{{$role_id}}',1)">
												<span class="checkmark"></span>
											</label>
										</td>

									</tr>
									<?php if ($mainMenu->status == 1) { ?>
										@foreach($mainMenu->submenus as $submenu)
										<!-- Display submenu data -->
										<tr>
											<td>{{ $sr++ }}</td>
											<td>{{ $menu->name }}</td>
											<td>{{ $mainMenu->name }}</td>
											<td>{{ $submenu->name }}</td>

											<td class="text-center" data-type="menu_status">
												<label class="custom_check">
													<input name="menustatus" type="checkbox" {{ $submenu->menu_status == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $submenu->id }}','{{ $submenu->parent_id }}','{{ $submenu->subparent_id }}','{{$role_id}}','type')">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center" data-type="add">
												<label class="custom_check">
													<input name="addstatus" type="checkbox" {{ $submenu->add == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $submenu->id }}','{{ $submenu->parent_id }}','{{ $submenu->subparent_id }}','{{$role_id}}',1)">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center" data-type="edit">
												<label class="custom_check">
													<input name="editstatus" type="checkbox" {{ $submenu->edit == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $submenu->id }}','{{ $submenu->parent_id }}','{{ $submenu->subparent_id }}','{{$role_id}}',1)">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center" data-type="view">
												<label class="custom_check">
													<input name="viewstatus" type="checkbox" {{ $submenu->view == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $submenu->id }}','{{ $submenu->parent_id }}','{{ $submenu->subparent_id }}','{{$role_id}}',1)">
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center" data-type="delete">
												<label class="custom_check">
													<input name="deletestatus" type="checkbox" {{ $submenu->delete == 1 ? 'checked' : '' }} onclick="menuStatus(this,'{{ $submenu->id }}','{{ $submenu->parent_id }}','{{ $submenu->subparent_id }}','{{$role_id}}',1)">
													<span class="checkmark"></span>
												</label>
											</td>
										</tr>
										@endforeach
									<?php } ?>
									@endforeach
								<?php } ?>
								@endforeach
							</tbody>

						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Content -->
	@endsection
	@section('externaljs')
	<script>

       
        function menuStatus(checkbox, id, parentId, subparentId, roleId, menustatus = 0) {
            var value = checkbox.checked ? 1 : 0;
            var type = $(checkbox).closest('td').data('type');
			showLoader();
            // Make an AJAX request to the Laravel route
            $.ajax({
                url: '/rolePermission', // Update the route to your actual route
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    value: value,
                    id: id,
                    parentId: parentId,
                    subparentId: subparentId,
                    roleId: roleId,
                    type: type,
                    menustatus: menustatus
                },
                success: function (response) {
                    // Handle the response from the server
                    // Reload the page after success
                    setTimeout(function () {
                        location.reload();
                    }, 100);
                },
                error: function (error) {
                    // alert(response.result);
                    console.error(error);
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                },
                // complete: function () {
                //     // Hide loader when the request is complete
                //     hideLoader();
                // }
            });
        }

        function showLoader() {
            // Show the overlay and loader container
            $('.overlay').show();
            $('.loader-container').show();
        }

        function hideLoader() {
            // Hide the overlay and loader container
            $('.overlay').hide();
            $('.loader-container').hide();
        }
		$(window).on('load', function () {
            hideLoader(); // Hide the loader when the entire page, including AJAX content, has loaded
        });

   
</script>



	@endsection