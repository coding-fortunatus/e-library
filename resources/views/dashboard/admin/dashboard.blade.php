@section('title')
		E-Library - Nigerian British University
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
				<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
								class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
		</div>
		<!-- Content Row -->
		<div class="row">
				<!-- Students Statistic Card -->
				<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
										<div class="row no-gutters align-items-center">
												<div class="col mr-2">
														<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
																Students</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format(200) }}</div>
												</div>
												<div class="col-auto">
														<i class="fas fa-users fa-2x text-gray-300"></i>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- Staffs Statistic Card -->
				<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
								<div class="card-body">
										<div class="row no-gutters align-items-center">
												<div class="col mr-2">
														<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
																Staffs</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format(10) }}</div>
												</div>
												<div class="col-auto">
														<i class="fas fa-hands fa-2x text-gray-300"></i>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- Visistors Statistic Card -->
				<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
										<div class="row no-gutters align-items-center">
												<div class="col mr-2">
														<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
																Visitors</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format(18) }}</div>
												</div>
												<div class="col-auto">
														<i class="fas fa-male fa-2x text-gray-300"></i>
														<i class="fas fa-female fa-2x text-black-300"></i>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- library resources Statistic Card -->
				<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-info shadow h-100 py-2">
								<div class="card-body">
										<div class="row no-gutters align-items-center">
												<div class="col mr-2">
														<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
																Total Resources</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format(1000) }}</div>
												</div>
												<div class="col-auto">
														<i class="fas fa-align-left fa-2x text-gray-300"></i>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- library journal resources Statistic Card -->
				<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-info shadow h-100 py-2">
								<div class="card-body">
										<div class="row no-gutters align-items-center">
												<div class="col mr-2">
														<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
																Journals</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format(10) }}</div>
												</div>
												<div class="col-auto">
														<i class="fas fa-book-open fa-2x text-gray-300"></i>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- library resources Statistic Card -->
				<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
										<div class="row no-gutters align-items-center">
												<div class="col mr-2">
														<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
																Articles</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format(100) }}</div>
												</div>
												<div class="col-auto">
														<i class="fas fa-book-open fa-2x text-gray-300"></i>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- library resources Statistic Card -->
				<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
								<div class="card-body">
										<div class="row no-gutters align-items-center">
												<div class="col mr-2">
														<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
																Books</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format(200) }}</div>
												</div>
												<div class="col-auto">
														<i class="fas fa-book-open fa-2x text-gray-300"></i>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- library resources Statistic Card -->
				<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
										<div class="row no-gutters align-items-center">
												<div class="col mr-2">
														<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
																Textbooks</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format(1000) }}</div>
												</div>
												<div class="col-auto">
														<i class="fas fa-book-open fa-2x text-gray-300"></i>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- Content Row -->
		<div class="row">
				<!-- Content Column -->
				<div class="col-lg-8 mb-4">
						<!-- Illustrations -->
						{{-- <div class="card shadow mb-4">
								<div class="card-header py-3">
										<h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
								</div>
								<div class="card-body">
										<div class="text-center">
												<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../img/undraw_posting_photo.svg"
														alt="...">
										</div>
										<p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow"
														href="https://undraw.co/">unDraw</a>, a
												constantly updated collection of beautiful svg images that you can use
												completely free and without attribution!</p>
										<a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
												unDraw &rarr;</a>
								</div>
						</div> --}}
						<!-- End Illustrations -->
				</div>
		</div>
@endsection
