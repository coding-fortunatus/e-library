@section('title')
		Article Management - E-Library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-2">
				<h1 class="h3 text-gray-800">Articles</h1>
				<button type="button" data-bs-toggle="modal" data-bs-target="#addVisitor"
						class="btn btn-sm btn-danger d-none d-sm-inline-block shadow-sm" title="Add new visitor"> <i class="fas fa-plus"></i>
						Add article</button>
		</div>

		<!-- Articles list -->
		<div class="card shadow mb-4">
				<div class="card-body">
						<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
												<tr>
														<th>Title</th>
														<th>Author</th>
														<th>Keywords</th>
														<th>Publication Date</th>
														<th>Pages</th>
														<th>Discipline</th>
														<th>Volume</th>
														<th>Actions</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>Machine Learning in Healthcare</td>
														<td>John Doe</td>
														<td>AI, Healthcare, ML</td>
														<td>2023-07-15</td>
														<td>12</td>
														<td>Computer Science</td>
														<td>5</td>
														<td>
																<button class="btn btn-sm btn-info" title="View Article">View</button>
																<button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit"
																		title="Modify journal information button">Edit</button>
																<button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete"
																		title="Modify journal information button">Delete</button>
														</td>
												</tr>
										</tbody>
								</table>
						</div>
				</div>
		</div>

		<!-- Delete Visitor Modal -->
		<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-body">
										<div class="col-lg-12">
												<div class="text-center">
														<h1 class="h4 text-gray-900 mb-4">Delete Article!</h1>
												</div>
												<p class="p-2"><span class="fw-bold">Are you sure, you want to delete the article?</span><br>
														<small>Deloeting removes the resources completely from the library resources repository.</small>
												</p>
												<form class="user">
														<div class="modal-footer mb-0">
																<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
																<button type="submit" class="btn btn-success">Confirm</button>
														</div>
												</form>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
