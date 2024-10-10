@section('title')
		Lecture Note Content - E-library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-2">
				<h1 class="h3 text-gray-800">Lecture Note</h1>
		</div>
		<!-- Lecture Note list -->
		<div class="card shadow mb-4">
				<div class="card-body">
						<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
												<tr>
														<th>Course/Title</th>
														<th>Author</th>
														<th>Department</th>
														<th>Pages</th>
														<th>Actions</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>Introduction to Python Programming Language</td>
														<td>Prof. Shrad Yu</td>
														<td>Software Engineering</td>
														<td>568</td>
														<td>
																<button class="btn btn-sm btn-primary" title="View lecture note">
																		<i class="fas fa-eye fa-sm text-white-50"></i>
																		Read
																</button>
																<button class="btn btn-sm btn-danger" title="Download lecture note">
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
