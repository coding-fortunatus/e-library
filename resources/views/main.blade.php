<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

		<head>
				@include('partials.header', ['title' => 'E-Library - Dashboard'])
				<title>@yield('title')</title>
		</head>
		<!-- Page Wrapper -->
		<div id="wrapper">
				@include('partials.sidebar')
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
