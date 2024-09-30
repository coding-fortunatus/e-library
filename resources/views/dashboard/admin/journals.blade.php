@section('title')
		Journals Management - E-Library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-2">
				<h1 class="h3 text-gray-800">Journals</h1>
				<button type="button" data-bs-toggle="modal" data-bs-target="#addJournal"
						class="btn btn-sm btn-danger d-none d-sm-inline-block shadow-sm" title="Add new journal"> <i class="fas fa-plus"></i>
						Add journal</button>
		</div>

		<!-- Journal list -->
		<div class="card shadow mb-4">
				<div class="card-body">
						<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
												<tr>
														<th>Title</th>
														<th>Author</th>
														<th>knowledge Area</th>
														<th>Year</th>
														<th>Pages</th>
														<th>Discipline</th>
														<th>Publisher</th>
														<th>Volume</th>
														<th>Available to</th>
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
														<td>Intel Cooperations</td>
														<td>5</td>
														<td>Students</td>
														<td>
																<button class="btn btn-sm btn-info" title="View journal">View</button>
																<button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit"
																		title="Modify journal information">Edit</button>
																<button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete"
																		title="Delete journal information">Delete</button>
														</td>
												</tr>
										</tbody>
								</table>
						</div>
				</div>
		</div>

		<!-- Add Journal Modal -->
		<div class="modal fade" id="addJournal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header">
										<h3 class="modal-title fs-2" id="exampleModalLabel">Add new journal</h3>
								</div>
								<div class="modal-body">
										<form class="row g-3">
												<div class="col-md-6 mb-3">
														<label for="title" class="form-label">Title</label>
														<input type="text" class="form-control" id="title">
												</div>
												<div class="col-md-6">
														<label for="author" class="form-label">Author</label>
														<input type="text" class="form-control" id="author">
												</div>
												<div class="col-12 mb-3">
														<label for="keywords" class="form-label">Knowledge Areas</label>
														<input type="text" class="form-control" id="keywords">
												</div>
												<div class="col-6 mb-3">
														<label for="publicationDate" class="form-label">Publication Year</label>
														<input type="month" class="form-control" id="publicationDate">
												</div>
												<div class="col-3">
														<label for="pages" class="form-label">Pages</label>
														<input type="number" class="form-control" id="pages">
												</div>
												<div class="col-3">
														<label for="volume" class="form-label">Volume</label>
														<input type="number" class="form-control" id="volume">
												</div>
												<div class="col-6 mb-3">
														<label for="discipline" class="form-label">Discipline</label>
														<input type="text" class="form-control" id="discipline">
												</div>
												<div class="col-6">
														<label for="availability" class="form-label">Availability to</label>
														<select class="form-control" aria-label="Default select example">
																<option selected>Choose one . . .</option>
																<option value="all">All</option>
																<option value="students">Students</option>
																<option value="studentsStaffs">Students & Staffs</option>
																<option value="studentsVisitors">Students & Visitors</option>
														</select>
												</div>
												<div class="col-12 mb-3">
														<label for="publisher" class="form-label">Publisher</label>
														<input type="text" class="form-control" id="publisher">
												</div>
												<div class="col-12 mb-3">
														<label for="article" class="form-label">Upload Article File</label>
														<input class="form-control" type="file" id="article">
												</div>
												<div class="col-12 mb-2">
														<button type="button" class="btn btn-warning mr-4" data-bs-dismiss="modal">Cancel</button>
														<button type="button" class="btn btn-success">Add article</button>
												</div>
										</form>
								</div>
						</div>
				</div>
		</div>

		<!-- Delete Journal Modal -->
		<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-body">
										<div class="col-lg-12">
												<div class="text-center">
														<h1 class="h4 text-gray-900 mb-4">Delete Journal!</h1>
												</div>
												<p class="p-2"><span class="fw-bold">Are you sure, you want to delete the jouirnal?</span><br>
														<small>Deleting removes the resource completely from the library resources repository.</small>
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
