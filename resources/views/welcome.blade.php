<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

		<head>
				<meta charset="utf-8" />
				<meta content="width=device-width, initial-scale=1.0" name="viewport" />
				<title>Welcome - Nigerian British University Elibrary</title>
				<meta name="description" content="" />
				<meta name="keywords" content="" />

				<!-- Fonts -->
				<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
				<!-- Vendor CSS Files -->
				<link href="{{ asset('/vendor/bootstrapes/css/bootstrap.min.css') }}" rel="stylesheet" />
				<link href="{{ asset('/vendor/aoses/aos.css') }}" rel="stylesheet" />
				<link href="{{ asset('/css/landing.css') }}" rel="stylesheet" />
		</head>

		<body class="index-page">
				<main class="main">
						<!-- Hero Section -->
						<section id="hero" class="hero section dark-background">
								<img src="{{ asset('img/hero-bg-light.jpg') }}" alt="" data-aos="fade-in" />

								<div class="container">
										<div class="row">
												<div class="col-lg-10 mb-3 mx-auto text-center">
														<h2 data-aos="fade-up" data-aos-delay="100">
																Welcome to the Nigerian British University <br />
																E-Library
														</h2>
														<p data-aos="fade-up" data-aos-delay="200">
																We offer a wide range of academic resources, ensuring
																easy access to textbooks, research papers, and digital
																content through a user-friendly interface.
														</p>
												</div>
												<div class="col-lg-5 mt-3 mx-auto" data-aos="fade-up" data-aos-delay="300">
														<form class="row row-cols-lg-auto g-3 align-items-center">
																<div class="input-group">
																		<input autofocus type="text" title="User ID" class="form-control"
																				placeholder="Enter your user ID" />
																</div>
																<div class="input-group">
																		<select class="form-select" name="role" aria-label="Account user type">
																				<option selected>Choose account type. . .</option>
																				<option value="student">Student</option>
																				<option value="staff">Staff</option>
																				<option value="visitor">Visitor</option>
																		</select>
																</div>
																<div class="input-group mb-3">
																		<button class="btn btn-danger" type="button">
																				Get started
																		</button>
																</div>
														</form>
														<div class="text">
																<a wire:navigate class="small text-white" href="{{ route('login') }}">Already have an account?
																		Login!</a>
														</div>
												</div>
										</div>
								</div>
						</section>
						<!-- /Hero Section -->
				</main>

				<!-- Preloader -->
				<div id="preloader"></div>

				<!-- Vendor JS Files -->
				<script src="{{ asset('/vendor/bootstrapes/js/bootstrap.bundle.min.js') }}"></script>
				<script src="{{ asset('/vendor/aoses/aos.js') }}"></script>
				<script src="{{ asset('/js/landing.js') }}"></script>
		</body>

</html>
