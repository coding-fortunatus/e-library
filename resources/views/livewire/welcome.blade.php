<div>
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
										easy access to textbooks, research papers, and other digital
										materials through a user-friendly interface.
								</p>
						</div>
						<div class="col-lg-5 mt-3 mx-auto" data-aos="fade-up" data-aos-delay="300">
								@if (session('Credential'))
										<div class='alert alert-warning alert-dismissible fade show' role="alert">
												{{ session('Credential') }}
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
								@endif

								<div class="mx-auto fw-bold h4 text-center">Account Sign-up</div>
								<form wire:submit='create' class="row row-cols-lg-auto g-3 align-items-center" method="POST">
										@csrf
										<div class="input-group">
												<input wire:model.live.debounce.500ms='userID' type="text" class="form-control"
														placeholder="Enter your Matric Number / Staff ID" />
										</div>
										@error('userID')
												<div class="text-danger mt-1 text-small">
														{{ $message }}
												</div>
										@enderror
										<div class="input-group">
												<select class="form-select" wire:model.live='user_type' aria-label="Account user type">
														<option selected></option>
														<option value="student">Student</option>
														<option value="staff">Staff</option>
														<option value="visitor">Visitor</option>
												</select>
										</div>
										@error('user_type')
												<div class="text-danger mt-1 text-small">
														{{ $message }}
												</div>
										@enderror
										<div class="input-group mb-3">
												<button class="btn btn-danger mr-2" type="submit"> Check Credential </button>
												<span class="mx-3">
														<div wire:loading class="spinner-border text-danger" role="status">
																<span class="visually-hidden">Loading...</span>
														</div>
												</span>
										</div>

								</form>
								<div class="text">
										<a wire:navigate class="small text-white" href="{{ route('login') }}">Already have an account?
												Login!</a>
								</div>
						</div>
				</div>
		</div>
</div>
