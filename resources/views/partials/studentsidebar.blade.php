<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center mt-5" href="">
				<div class="sidebar-brand-icon logo mx-3 my-10">
						<img src="{{ asset('img/NBU_Official-Logo.png') }}" class="img-fluid img-thumbnail" alt="NBU Logo">
				</div>
		</a>

		<!-- Nav Items -->

		<li class="nav-item mt-5 {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('homepage') }}">
						<i class="fas fa-fw fa-home"></i>
						<span>Homepage</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">

		<li class="nav-item {{ Route::currentRouteName() == 'articles' ? 'active' : '' }}">
				<a class="nav-link" href="">
						<i class="fas fa-fw fa-newspaper"></i>
						<span>Articles</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">

		<li class="nav-item {{ Route::currentRouteName() == 'journals' ? 'active' : '' }}">
				<a class="nav-link" href="">
						<i class="fas fa-fw fa-newspaper"></i>
						<span>Journals</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">

		<li class="nav-item{{ Route::currentRouteName() == 'textbooks' ? 'active' : '' }}">
				<a class="nav-link" href="">
						<i class="fas fa-fw fa-book-open"></i>
						<span>Textbooks</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">

		<li class="nav-item {{ Route::currentRouteName() == 'lecturenotes' ? 'active' : '' }}">
				<a class="nav-link" href="">
						<i class="fas fa-fw fa-file-pdf"></i>
						<span>Lecture Notes</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">

		<li class="nav-item {{ Route::currentRouteName() == 'slides' ? 'active' : '' }}">
				<a class="nav-link" href="">
						<i class="fas fa-fw fa-file-powerpoint"></i>
						<span>Slides</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Nav Item - Settings -->
		<li class="nav-item {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}">
				<a class="nav-link" href="">
						<i class="fas fa-fw fa-id-card"></i>
						<span>Profile</span></a>
		</li>
		<hr class="sidebar-divider">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

</ul>
<!-- End of Sidebar -->
