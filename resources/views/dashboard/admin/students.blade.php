@section('title')
		Student Management - E-Library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Students</h1>

		<!-- DataTales Example -->
		<div class="card shadow mb-4">
				<div class="card-body">
						<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
												<tr>
														<th>Name</th>
														<th>Matric number</th>
														<th>Email</th>
														<th>Phone Number</th>
														<th>Gender</th>
														<th>Faculty</th>
														<th>Department</th>
														<th>Status</th>
														<th>Actions</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>Raymon Dwight</td>
														<td>NBU/SOE/24/15423</td>
														<td>raymon.dwight@nbu.edu.ng</td>
														<td>08176593438</td>
														<td>Female</td>
														<td>Computing & Information Technology</td>
														<td>Software Engineering</td>
														<td>Active</td>
														<td><button class="btn btn-sm btn-danger" title="Ban student" data-bs-toggle="modal" data-bs-target="#block">
																		<i class="fas fa-lock"></i> Ban</button>
																<button class="btn btn-sm btn-success" title="Unban student"><i class="fas fa-unlock"></i>
																		Unban</button>
														</td>
												</tr>
										</tbody>
								</table>
						</div>
				</div>
		</div>

		<!-- Delete Visitor Modal -->
		<div class="modal fade" id="block" tabindex="-1" aria-labelledby="block" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-body">
										<div class="col-lg-12">
												<div class="text-center">
														<h1 class="h4 text-gray-900 mb-4">Ban Student!</h1>
												</div>
												<p class="p-2"><span class="fw-bold">Are you sure, you want to ban the student
																account?</span><br>
														<small>Banning deactivate student's
																account, and remove access to the E-library resources.</small>
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
