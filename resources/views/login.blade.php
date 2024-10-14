<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

		<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Login Page - E-library NBU</title>
				<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
				<link rel="stylesheet" href="{{ asset('/css/login.css') }}">
		</head>

		<body>
				<div class="container-fluid">
						<div class="row">
								<div class="col-lg-6 login-section-wrapper">
										{{-- <div class="brand-wrapper">
														<img src="{{ asset('img/NBU_Official-Logo.png') }}" class="img-fluid img-thumbnail" alt="NBU Logo">
												</div> --}}
										<div class="login-wrapper my-auto card shadow-sm mx-auto p-4 border-0">
												<h1 class="login-title">Log in</h1>
												<form action="">
														<div class="form-group">
																<label for="uid">User ID</label>
																<input type="text" id="uid" class="form-control" placeholder="NBU/SEO/24/098">
														</div>
														<div class="form-group mb-4">
																<label for="password">Password</label>
																<input type="password" id="password" class="form-control" placeholder="@mypassword0123">
														</div>
														<input class="btn btn-block btn-outline-info mb-3" type="button" value="Login">
												</form>
												{{-- <a wire:navigate href="" class="forgot-password-link mb-3">Forgot password?</a> --}}
												<p class="login-wrapper-footer-text">Don't have an account?
														<a wire:navigate href="{{ route('welcome') }}" class="text-reset">Register here</a>
												</p>
										</div>
								</div>
								<div class="col-md-6 px-0 d-none d-sm-block">
										<img src="{{ asset('img/login.jpg') }}" alt="login image" class="login-img">
								</div>
						</div>
				</div>
		</body>

</html>
