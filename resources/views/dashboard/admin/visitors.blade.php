@section('title')
		Visitor Management - E-Library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-2">
				<h1 class="h3 text-gray-800">Visitors</h1>
				<button type="button" data-bs-toggle="modal" data-bs-target="#addVisitor"
						class="btn btn-sm btn-danger d-none d-sm-inline-block shadow-sm" title="Add new visitor"> <i class="fas fa-plus"></i>
						Add visitor</button>
		</div>

		<!--  Visitor Table -->
		<div class="card shadow mb-4">
				<div class="card-body">
						<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
												<tr>
														<th>Name</th>
														<th>Code</th>
														<th>Email</th>
														<th>Phone Number</th>
														<th>Pin</th>
														<th>Status</th>
														<th>Actions</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>Raymon Dwight</td>
														<td>LIB/VST/2423</td>
														<td>raymon.dwight@nbu.edu.ng</td>
														<td>08176593438</td>
														<td>0123456789</td>
														<td>Active</td>
														<td>
																<button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteVisitor"
																		title="Delete visitor"><i class="fas fa-trash"></i>
																		Delete</button>
																<button type="button" data-bs-toggle="modal" data-bs-target="#updateVisitor"
																		class="btn btn-sm btn-warning" title="Edit visitor"><i class="fas fa-pen"></i>
																		Edit</button>
														</td>
												</tr>
										</tbody>
								</table>
						</div>
				</div>
		</div>

		<!-- Add Visitor Modal -->
		<div class="modal fade" id="addVisitor" tabindex="-1" aria-labelledby="addNewVisitor" aria-hidden="true">
				<div class="modal-dialog ">
						<div class="modal-content">
								<div class="modal-body">
										<div class="col-lg-12">
												<div class="text-center">
														<h1 class="h4 text-gray-900 mb-4">Create Visitor Account!</h1>
												</div>
												<form class="user">
														<div class="form-group row">
																<div class="col-sm-6 mb-3 mb-sm-0">
																		<input type="text" class="form-control form-control-user" id="fullname" placeholder="Full Name">
																</div>
																<div class="col-sm-6 mb-sm-0">
																		<input type="tel" class="form-control form-control-user" id="phone" placeholder="Phone Number">
																</div>
														</div>
														<div class="form-group">
																<input type="email" class="form-control form-control-user" id="Email" placeholder="Email Address">
														</div>
														<div class="form-group row">
																<div class="col-sm-6 mb-sm-0">
																		<input type="password" class="form-control form-control-user" id="password" placeholder="Pin">
																</div>
																<div class="col-sm-6">
																		<input type="password" class="form-control form-control-user" id="repeatpassword"
																				placeholder="Repeat Pin">
																</div>
														</div>
														<div class="modal-footer">
																<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
																<button type="submit" class="btn btn-success">Add visitor</button>
														</div>
												</form>
										</div>
								</div>
						</div>
				</div>
		</div>

		<!-- Update Visitor modal -->
		<div class="modal fade" id="updateVisitor" tabindex="-1" aria-labelledby="editVisitor" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-body">
										<div class="col-lg-12">
												<div class="text-center">
														<h1 class="h4 text-gray-900 mb-4">Edit Visitor Details!</h1>
												</div>
												<form class="user">
														<div class="form-group row">
																<div class="col-sm-6 mb-3 mb-sm-0">
																		<input type="text" class="form-control form-control-user" id="fullname" placeholder="Full Name">
																</div>
																<div class="col-sm-6 mb-sm-0">
																		<input type="tel" class="form-control form-control-user" id="phone" placeholder="Phone Number">
																</div>
														</div>
														<div class="form-group">
																<input type="email" class="form-control form-control-user" id="Email" placeholder="Email Address">
														</div>

														<select class="form-control mb-2" aria-placeholder="Select status" name="status" id="status">
																<option selected>Select status</option>
																<option value="active">Active</option>
																<option value="inactive">Inactive</option>
																<option value="ban">Ban</option>
														</select>

														<div class="modal-footer">
																<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
																<button type="submit" class="btn btn-success">Update visitor</button>
														</div>
												</form>
										</div>
								</div>
						</div>
				</div>
		</div>

		<!-- Delete Visitor Modal -->
		<div class="modal fade" id="deleteVisitor" tabindex="-1" aria-labelledby="deleteVisitor" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-body">
										<div class="col-lg-12">
												<div class="text-center">
														<h1 class="h4 text-gray-900 mb-4">Delete Visitor!</h1>
												</div>
												<p class="p-2">Are you sure, you want to delete visitor account?</p>
												<form class="user">
														<div class="modal-footer">
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
