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
					<table class="table table-striped custom-table datatable">
						<thead>
							<tr>
								<th>ID</th>
								<th>Main Menu</th>
								<th>Menu</th>
								<th>Sub Menu</th>
								<th>Menu</th>
                                <th class="text-center">Read</th>
								<th class="text-center">Write</th>
								<th class="text-center">Create</th>
								<th class="text-center">Delete</th>
								<th class="text-center">Import</th>
							</tr>
						</thead>
						<tbody>
                            <?php $sr= 1;?>
							@foreach($menus as $menu)
							<!-- Display parent menu data -->
							<tr>
								<td>{{ $sr }}</td>
								<td>{{ $menu->name }}</td>
								<!-- Add other columns as needed -->
								<td></td>
								<td></td>
							
                                <td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
							</tr>

							<?php if ($menu->status == 1) { ?>
								@foreach($menu->mainmenus as $mainMenu)

								<!-- Display main menu data -->

								<tr>
									<td>{{ $sr }}</td>
									<td>{{ $menu->name }}</td>
									<td>{{ $mainMenu->name }}</td>
									<td></td>
								
                                    <td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
								</tr>
								<?php if ($mainMenu->status == 1) { ?>
									@foreach($mainMenu->submenus as $submenu)
									<!-- Display submenu data -->
									<tr>
										<td>{{ $sr }}</td>
										<td>{{ $menu->name }}</td>
										<td>{{ $mainMenu->name }}</td>
										<td>{{ $submenu->name }}</td>
										
                                        <td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
											<td class="text-center">
												<label class="custom_check">
													<input type="checkbox" checked>
													<span class="checkmark"></span>
												</label>
											</td>
									</tr>
									@endforeach
								<?php } ?>
								@endforeach
							<?php } ?>
                            <?php $sr ++;?>
							@endforeach
						</tbody>

					</table>

				</div>
			</div>
		</div>
	</div>
	<!-- /Page Content -->




@endsection