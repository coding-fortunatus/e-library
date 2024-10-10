@section('title')
		Student Profile Management - E-Library
@endsection
@extends('main')
@section('content')
		<div class="card shadow">
				<h3 class="m-2 p">Profile Information</h3>
				<div class="row">
						<div class="mx-3 my-2 col-md-1">
								<img class="img-fluid img-responsive" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
						</div>
						<div class="mx-3 my-2 col-md-1">
								<img class="img-fluid img-responsive" src="https://cdn-icons-png.flaticon.com/256/3135/3135823.png">
						</div>
				</div>
				<div class="card-body">
						<form class="form">
								<div class="form-group row">
										<div class="col-md-2">Full name</div>
										<div class="col-md-6">
												<input type="text" class="form-control" placeholder="Charlse Edwin Floyd" title="Your full name">
										</div>
								</div>

								<div class="form-group row">
										<div class="col-md-2">Matriculation Number</div>
										<div class="col-md-6">
												<input type="text" class="form-control" placeholder="NBU/SOE/2024/0032" title="Your matric number">
										</div>
								</div>

								<div class="form-group row">
										<div class="col-md-2">Email Address</div>
										<div class="col-md-6">
												<input type="email" class="form-control" placeholder="you@example.com" title="Your email.">
										</div>
								</div>

								<div class="form-group row">
										<div class="col-md-2">Phone Number</div>
										<div class="col-md-6">
												<input type="tel" class="form-control" placeholder="0903 8901 471" title="Your mobile number">
										</div>
								</div>

								<div class="form-group row">
										<div class="col-md-2">Faculty</div>
										<div class="col-md-6">
												<input type="text" class="form-control" placeholder="Computing & Information Technology"
														title="Your faculty">
										</div>
								</div>

								<div class="form-group row">
										<div class="col-md-2 bold">Department</div>
										<div class="col-md-6">
												<input type="text" class="form-control" placeholder="Software Engineering" title="Your department.">
										</div>
								</div>

								<div class="form-group mb-0">
										<button class="btn btn-outline-primary">
												<i class="fas fa-pen"></i> Edit profile
										</button>
								</div>

						</form>
				</div>
		</div>
@endsection
