<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

		<head>
				@include('partials.header', ['title' => 'E-Library - Nigeria British University'])
				<title>@yield('title')</title>
		</head>
		<!-- Page Wrapper -->
		<div id="wrapper">
				@if (Request::segment(1) == 'admin')
						@include('partials.sidebar')
				@elseif (Request::segment(1) == 'student')
						@include('partials.studentsidebar')
				@endif
				<!-- Content Wrapper -->
				<div id="content-wrapper" class="d-flex flex-column">
						<!-- Main Content -->
						<div id="content">
								@include('partials.topbar')
								<!-- Begin Page Content -->
								<div class="container-fluid">
										@yield('content')
								</div>
								<!-- /.container-fluid -->
						</div>
						<!-- End of Main Content -->
						@include('partials.footer')
				</div>
				<!-- End of Page Wrapper -->
