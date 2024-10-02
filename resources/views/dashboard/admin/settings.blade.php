@section('title')
		Administrative Settings - E-Library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-2">
				<h1 class="h3 text-gray-800">Administrative Settings</h1>
		</div>

		<!-- Collapsable -->
		<div class="row">
				<div class="accordion col-6 shadow card px-2 py-2" id="AdminSettings">
						<div class="card">
								<div class="card-header" id="headingOne">
										<h2 class="mb-0">
												<button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#UploadSatffData"
														aria-expanded="true" aria-controls="UploadSatffData">
														<span class="text-danger">Upload Staff Data
																<i class="fas mx-1 fa-caret-down"></i>
														</span>
												</button>
										</h2>
								</div>

								<div id="UploadSatffData" class="collapse" aria-labelledby="headingOne" data-parent="#AdminSettings">
										<div class="card-body">
												<form class="form-inline">
														<div class="form-group mb-2 mx-2">
																<label for="staffs" class="sr-only">Upload Staff Data (CSV file only)</label>
																<input type="file" class="form-control" id="staffs">
														</div>
														<button type="submit" class="btn btn-danger mb-2">Upload staffs</button>
												</form>
										</div>
								</div>
						</div>
						<div class="card">
								<div class="card-header" id="headingTwo">
										<h2 class="mb-0">
												<button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#uploadStudentData"
														aria-expanded="false" aria-controls="uploadStudentData">
														<span class="text-danger">Upload Student Data
																<i class="fas mx-1 fa-caret-down"></i>
														</span>
												</button>
										</h2>
								</div>
								<div id="uploadStudentData" class="collapse" aria-labelledby="headingTwo" data-parent="#AdminSettings">
										<div class="card-body">
												<form class="form-inline">
														<div class="form-group mb-2 mx-2">
																<label for="staffs" class="sr-only">Upload Student Data (CSV file only)</label>
																<input type="file" class="form-control" id="staffs">
														</div>
														<button type="submit" class="btn btn-danger mb-2">Upload students</button>
												</form>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
