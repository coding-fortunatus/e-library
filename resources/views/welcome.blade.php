<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<meta name="description" content="">
				<meta name="author" content="">
				<link rel="icon" href="{{ asset('favicon.ico') }}">
				<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
				<title>Welcome - Nigerian British University Elibrary</title>
				<link href="{{ asset('/vendor/bootstrapes/css/bootstrap.min.css') }}" rel="stylesheet" />
				{{-- <link href="{{ asset('/vendor/aoses/aos.css') }}" rel="stylesheet" /> --}}
				<link href="{{ asset('/css/landing.css') }}" rel="stylesheet" />
				<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
				@livewireStyles
		</head>

		<body class="index-page">
				@livewireScripts
				<main class="main">
						<!-- Hero Section -->
						<section id="hero" class="hero section dark-background">
								@livewire('welcome')
						</section>
						<!-- /Hero Section -->
				</main>

				<!-- Preloader -->
				<div id="preloader"></div>

				<!-- Vendor JS Files -->
				<script src="{{ asset('/vendor/bootstrapes/js/bootstrap.bundle.min.js') }}"></script>
				{{-- <script src="{{ asset('/vendor/aoses/aos.js') }}"></script> --}}
				<script src="{{ asset('/js/landing.js') }}"></script>

		</body>

</html>
