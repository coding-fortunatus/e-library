@section('title')
		Home page - E-library
@endsection
@extends('main')
@section('content')
		<!-- Page Heading -->
		{{-- <div class="d-sm-flex align-items-center justify-content-between mb-2">
				<h1 class="h3 text-gray-800">Home Page</h1>
		</div> --}}
		<div class="row">
				<div class="accordion col-12 shadow card px-2 py-2" id="AdminSettings">
						{{-- Rules and Regulations --}}
						<div class="card">
								<div class="card-header" id="headingOne">
										<h2 class="mb-0">
												<button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#UploadSatffData"
														aria-expanded="true" aria-controls="UploadSatffData">
														<span class="text-danger">Rules & Regulations
																<i class="fas mx-1 fa-caret-down"></i>
														</span>
												</button>
										</h2>
								</div>

								<div id="UploadSatffData" class="collapse show" aria-labelledby="headingOne" data-parent="#AdminSettings">
										<div class="card-body">
												<ul class="list-group">
														<li class="list-group-item list-group-item-action">
																<strong>1. Access to Resources:</strong> Students are allowed to download selected resources such as
																textbooks, research papers, and lecture materials. Some resources are restricted to read-only access based
																on licensing agreements.
														</li>
														<li class="list-group-item list-group-item-action">
																<strong>2. Resource Limit:</strong> Students are limited to downloading a maximum number of resources per
																day to ensure fair usage and prevent server overload.
														</li>
														<li class="list-group-item list-group-item-action">
																<strong>3. Plagiarism Policy:</strong> Students must not reproduce or redistribute any material obtained
																from the eLibrary without proper citation and adherence to plagiarism rules.
														</li>
														<li class="list-group-item list-group-item-action">
																<strong>4. Account Usage:</strong> Student accounts are strictly personal. Sharing login credentials or
																allowing unauthorized access to the eLibrary through another student's account is prohibited.
														</li>
														<li class="list-group-item list-group-item-action">
																<strong>5. Responsible Use:</strong> Students must use eLibrary resources responsibly, avoiding excessive
																downloads, attempts to bypass restrictions, or misuse of the platform, which may result in suspension of
																access privileges.
														</li>
														<li class="list-group-item list-group-item-action">
																<strong>6. Resource Requests:</strong> Students can request additional resources through the appropriate
																channels (contacting the library staff). Requests will be reviewed and fulfilled based on
																availability and licensing.
														</li>
														<li class="list-group-item list-group-item-action">
																<strong>7. Session Timeouts:</strong> To ensure security, student sessions will automatically log out
																after a period of inactivity. Students must log back in to resume access to eLibrary resources.
														</li>
														<li class="list-group-item list-group-item-action">
																<strong>8. Compliance with Copyright:</strong> Students are required to respect copyright laws, and any
																breach (illegal sharing or reproduction of copyrighted materials) may result in disciplinary
																actions, including loss of eLibrary access or further academic consequences.
														</li>
												</ul>
										</div>
								</div>
						</div>
						{{-- Student Handbook Display --}}
						<div class="card">
								<div class="card-header" id="headingTwo">
										<h2 class="mb-0">
												<button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#studentHandbook"
														aria-expanded="true" aria-controls="studentHandbook">
														<span class="text-danger">Student School Handbook
																<i class="fas mx-1 fa-caret-down"></i>
														</span>
												</button>
										</h2>
								</div>

								<div id="studentHandbook" class="collapse" aria-labelledby="headingTwo" data-parent="#AdminSettings">
										<div class="card-body">
												<!-- 4:3 aspect ratio -->
												<div class="embed-responsive embed-responsive-4by3">
														<iframe class="embed-responsive-item" src="{{ asset('/resource/template.pdf') }}"></iframe>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
