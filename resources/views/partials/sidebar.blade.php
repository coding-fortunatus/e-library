<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center mt-5" href="">
				<div class="sidebar-brand-icon logo mx-3 my-10">
						<img src="{{ asset('img/NBU_Official-Logo.png') }}" class="img-fluid img-thumbnail" alt="NBU Logo">
				</div>
		</a>

		<!-- Nav Item - Dashboard -->
		<li class="nav-item mt-5 {{ Route::currentRouteName() == 'admin-dashboard' ? 'active' : '' }}">
				<a wire:navigate class="nav-link" href="{{ route('admin-dashboard') }}" wire:navigate>
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Nav Item - Pages Collapse Menu -->
		<li
				class="nav-item {{ Route::currentRouteName() == 'manage-staff' || Route::currentRouteName() == 'manage-student' || Route::currentRouteName() == 'manage-visitor' ? 'active' : '' }}">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
						aria-expanded="true" aria-controls="collapseTwo">
						<i class="fas fa-fw fa-users-cog"></i>
						<span>Users</span>
				</a>
				<div id="collapseUsers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
								<h6 class="collapse-header">Manage Users:</h6>
								<a class="collapse-item" href="{{ route('manage-staff') }}" wire:navigate>Staffs</a>
								<a class="collapse-item" href="{{ route('manage-student') }}" wire:navigate>Students</a>
								<a class="collapse-item" href="{{ route('manage-visitor') }}" wire:navigate>Visitors</a>
						</div>
				</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Nav Item - Utilities Collapse Menu -->
		<li
				class="nav-item {{ Route::currentRouteName() == 'resource-articles' || Route::currentRouteName() == 'resource-journals' || Route::currentRouteName() == 'resource-textbooks' || Route::currentRouteName() == 'resource-lecturenotes' || Route::currentRouteName() == 'resource-slides' ? 'active' : '' }}">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseResources"
						aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-fw fa-book"></i>
						<span>Resources</span>
				</a>
				<div id="collapseResources" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
								<h6 class="collapse-header">Manage Resources:</h6>
								<a class="collapse-item" href="{{ route('resource-articles') }}" wire:navigate>Articles</a>
								<a class="collapse-item" href="{{ route('resource-journals') }}" wire:navigate>Journals</a>
								<a class="collapse-item" href="{{ route('resource-textbooks') }}" wire:navigate>Textbooks</a>
								<a class="collapse-item" href="{{ route('resource-lecturenotes') }}" wire:navigate>Lecture Notes</a>
								<a class="collapse-item" href="{{ route('resource-slides') }}" wire:navigate>Slides</a>
						</div>
				</div>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Nav Item - Reports & Logs -->
		<li class="nav-item {{ Route::currentRouteName() == 'admin-reports-logs' ? 'active' : '' }}">
				<a class="nav-link" href="" wire:navigate>
						<i class="fas fa-fw fa-flag"></i>
						<span>Reports & Logs</span></a>
		</li>
		<hr class="sidebar-divider">

		<!-- Nav Item - Settings -->
		<li class="nav-item {{ Route::currentRouteName() == 'admin-settings' ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('admin-settings') }}" wire:navigate>
						<i class="fas fa-fw fa-tools"></i>
						<span>Settings</span></a>
		</li>
		<hr class="sidebar-divider">
		<!-- Divider -->
		{{-- <hr class="sidebar-divider d-none d-md-block"> --}}

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

</ul>
<!-- End of Sidebar -->
