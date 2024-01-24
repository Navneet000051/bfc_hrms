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

		<!-- <div class="overlay"></div>
		<div class="loader-container">
			<div class="loader"></div>
		</div> -->
		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Menu Permission</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Menu Permission</li>
					</ul>
				</div>
				
			</div>
		</div>
		<!-- /Page Header -->
	
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

		// Show the loader before making the AJAX request
		// showLoader();
		
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
			success: function(response) {
				// Handle the response from the server
				// alert(response.result);
				
				// Reload the page after success
				// location.reload();
				// $('.table').html('<i class="fa fa-spinner fa-spin"></i>');
			},
			error: function(error) {
				console.error(error);
				// Reload the page after error
				location.reload();
			},
			complete: function() {
				// Hide loader when the request is complete
				// hideLoader();
				location.reload();
				$('.overlay').show();
				$('.table').html("<center><div class='m-3 loader'></div></center>");
			}
		});
	}

	// function showLoader() {
	// 	// Show the overlay and loader container
	// 	$('.overlay').show();
	// 	$('.loader-container').show();
	// }

	// function hideLoader() {
	// 	// Hide the overlay and loader container
	// 	$('.overlay').hide();
	// 	$('.loader-container').hide();
	// }
</script>




	@endsection