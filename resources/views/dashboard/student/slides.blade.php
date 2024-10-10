@section('title')
		Slide Presentations - E-library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-2">
				<h1 class="h3 text-gray-800">Lecture Slides</h1>
		</div>
		<!-- Slide Presentation list -->
		<!-- Articles list -->
		<div class="card shadow mb-4">
				<div class="card-body">
						<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
												<tr>
														<th>Course/Title</th>
														<th>Topic</th>
														<th>Author</th>
														<th>Department</th>
														<th>Year</th>
														<th>Actions</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>Introduction to Python Programming Language</td>
														<td>Software Development Life Cycle</td>
														<td>Prof. Shrad Yu</td>
														<td>Software Engineering</td>
														<td>September, 2023</td>
														<td>
																<button class="btn btn-sm btn-primary" title="View slide">
																		<i class="fas fa-eye fa-sm text-white-50"></i>
																		Read
																</button>
																<button class="btn btn-sm btn-danger" title="Download slide">
																		<i class="fas fa-download fa-sm text-white-50"></i>
																		Download
																</button>
														</td>
												</tr>
										</tbody>
								</table>
						</div>
				</div>
		</div>
@endsection
