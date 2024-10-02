@section('title')
		Page not found - E-library
@endsection
@extends('main')
@section('content')
		<!-- 404 Error Text -->
		<div class="text-center">
				<div class="error mx-auto" data-text="404">404</div>
				<p class="lead text-gray-800 mb-5">Page Not Found</p>
				<p class="text-gray-500 mb-0">The page you are looking for does not exists</p>
				<a href="{{ route('admin-dashboard') }}">&larr; Back to Dashboard</a>
		</div>
@endsection
