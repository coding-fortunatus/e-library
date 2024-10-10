@section('title')
		Lecture Notes Management - E-Library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-2">
				<h1 class="h3 text-gray-800">Lecture Notes</h1>
				<button type="button" data-bs-toggle="modal" data-bs-target="#lecturenote"
						class="btn btn-sm btn-danger d-none d-sm-inline-block shadow-sm" title="Add lecture note"> <i class="fas fa-plus"></i>
						Add lecture note</button>
		</div>

		<!-- Lecture note list -->
		<div class="card shadow mb-4">
				<div class="card-body">
						<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
												<tr>
														<th>Course/Title</th>
														<th>Author</th>
														<th>Department</th>
														<th>Year</th>
														<th>Pages</th>
														<th>Publisher</th>
														<th>Available to</th>
														<th>Actions</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>Introduction to Python Programming Language</td>
														<td>Prof. Shrad Yu</td>
														<td>Software Engineering</td>
														<td>September, 2023</td>
														<td>568</td>
														<td>Faculty of Computing & Information Technology</td>
														<td>All</td>
														<td>
																<button class="btn btn-sm btn-info" title="View lecture note">View</button>
																<button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit"
																		title="Modify lecture note">Edit</button>
																<button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete"
																		title="Delete lecture note">Delete</button>
														</td>
												</tr>
										</tbody>
								</table>
						</div>
				</div>
		</div>

		<!-- Add article Modal -->
		<div class="modal fade" id="lecturenote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header">
										<h3 class="modal-title fs-2" id="exampleModalLabel">Add new lecture note</h3>
								</div>
								<div class="modal-body">
										<form class="row g-3">
												<div class="col-md-6 mb-3">
														<label for="course" class="form-label">Course/Title</label>
														<input type="text" class="form-control" id="course">
												</div>
												<div class="col-md-6">
														<label for="author" class="form-label">Author(s)</label>
														<input type="text" class="form-control" id="author">
												</div>
												<div class="col-6 mb-3">
														<label for="department" class="form-label">Department</label>
														<input type="text" class="form-control" id="department">
												</div>
												<div class="col-6">
														<label for="availability" class="form-label">Availability to</label>
														<select class="form-control custom-select" aria-label="Default select example">
																<option selected>Choose one...</option>
																<option value="all">All</option>
																<option value="students">Students</option>
																<option value="studentsStaffs">Students & Staffs</option>
																<option value="studentsVisitors">Students & Visitors</option>
														</select>
												</div>
												<div class="col-6 mb-3">
														<label for="publicationDate" class="form-label">Publication Year</label>
														<input type="month" class="form-control" id="publicationDate">
												</div>
												<div class="col-3">
														<label for="pages" class="form-label">Pages</label>
														<input type="number" class="form-control" id="pages">
												</div>
												<div class="col-12 mb-3">
														<label for="publisher" class="form-label">Publisher</label>
														<input type="text" class="form-control" id="publisher">
												</div>
												<div class="col-12 mb-3">
														<label for="article" class="form-label">Upload lecture note</label>
														<input class="form-control" type="file" id="article">
												</div>
												<div class="col-12 mb-2">
														<button type="button" class="btn btn-warning mr-4" data-bs-dismiss="modal">Cancel</button>
														<button type="button" class="btn btn-success">Add lecture note</button>
												</div>
										</form>
								</div>
						</div>
				</div>
		</div>

		<!-- Delete Textbook Modal -->
		<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-body">
										<div class="col-lg-12">
												<div class="text-center">
														<h1 class="h4 text-gray-900 mb-4">Delete Lecture Note!</h1>
												</div>
												<p class="p-2"><span class="fw-bold">Are you sure, you want to delete the lecture note?</span><br>
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
