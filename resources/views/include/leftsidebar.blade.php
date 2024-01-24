<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">

			<ul class="sidebar-vertical">
				<li class="menu-title">
					<span>Main{{Auth::user()->role_id}}</span>
				</li>
				<li class="submenu">
					<a href="{{route('dashboard')}}"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="active" href="{{route('dashboard')}}">Admin Dashboard</a></li>
						<li><a href="{{route('EmployeeDashboard')}}">Employee Dashboard</a></li>
					</ul>
				</li>

				<li>
					<a href="{{route('EmployeeDashboard')}}"><i class="la la-user"></i> <span> Create Employee </span> <span class="menu-arrow"></span></a>

				</li>
				<li>
					<a href="{{route('client')}}"><i class="la la-user-secret"></i> <span>Create Client</span></a>
				</li>
				<li>
					<a href="{{route('roles')}}"><i class="la la-tasks" aria-hidden="true"></i><span>Roles Management</span></a>
				</li>
				<li>
					<a href="{{route('menu')}}"><i class="la la-th-list" aria-hidden="true"></i><span>Menu Management</span></a>
				</li>
				<li class="menu-title">
					<span>Profile Pages</span>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a href="profile.html"> Employee Profile </a></li>
						<li><a href="client-profile.html"> Client Profile </a></li>
					</ul>
				</li>

			</ul>

		</div>
	</div>
</div>