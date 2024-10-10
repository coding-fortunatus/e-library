@section('title')
		Journal Contents - E-library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-2">
				<h1 class="h3 text-gray-800">Journals</h1>
		</div>
		<!-- Articles list -->
		<div class="card shadow mb-4">
				<div class="card-body">
						<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
												<tr>
														<th>Title</th>
														<th>Knowledge area</th>
														<th>Author</th>
														<th>Pages</th>
														<th>Volume</th>
														<th>Actions</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>Introduction to Python Programming Language</td>
														<td>SDLC, Software, Programming</td>
														<td>Prof. Shrad Yu</td>
														<td>12</td>
														<td>5</td>
														<td>
																<button class="btn btn-sm btn-primary" title="View journal">
																		<i class="fas fa-eye fa-sm text-white-50"></i>
																		Read
																</button>
																<button class="btn btn-sm btn-danger" title="Download journal">
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
