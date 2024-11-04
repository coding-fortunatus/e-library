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
				<title>Login Page - E-library NBU</title>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
				<link rel="stylesheet" href="{{ asset('/css/login.css') }}">
				<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
				@livewireStyles
		</head>

		@livewireScripts

		<body>
				<div class="container-fluid">
						@livewire('login')
				</div>
		</body>

</html>
