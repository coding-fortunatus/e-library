<div>
		<div class="row">
				<div class="col-lg-6 login-section-wrapper">
						{{-- <div class="brand-wrapper">
												<img src="{{ asset('img/NBU_Official-Logo.png') }}" class="img-fluid img-thumbnail" alt="NBU Logo">
										</div> --}}
						<div class="login-wrapper my-auto card shadow-sm mx-auto p-4 border-0">
								<h1 class="login-title">Log in</h1>
								@if (session('Login_credentials'))
										<div class='alert alert-warning alert-dismissible fade show' role="alert">
												{{ session('Login_credentials') }}
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
								@endif
								<form wire:submit='login' method="POST">
										@csrf
										<div class="form-group">
												<label for="uid">Username (Matric Number or Staff ID)</label>
												<input type="text" id="uid" wire:model.live.debounce='username' class="form-control"
														placeholder="NBU/SEO/24/098">
										</div>
										@error('username')
												<span class="text-danger text-small">
														{{ $message }}
												</span>
										@enderror
										<div class="form-group mb-4">
												<label for="password">Password</label>
												<input type="password" id="password" wire:model.live.debounce='password' class="form-control"
														placeholder="@mypassword0123">
										</div>
										@error('password')
												<span class="text-danger text-small mt-1">
														{{ $message }}
												</span>
										@enderror
										<button class="btn btn-block btn-outline-info mb-3" type="submit">Login</button>
								</form>
								{{-- <a wire:navigate href="" class="forgot-password-link mb-3">Forgot password?</a> --}}
								<p class="login-wrapper-footer-text">Don't have an account?
										<a href="{{ route('welcome') }}" class="text-reset">Register here</a>
								</p>
						</div>
				</div>
				<div class="col-md-6 px-0 d-none d-sm-block">
						<img src="{{ asset('img/login.jpg') }}" alt="login image" class="login-img">
				</div>
		</div>
</div>
