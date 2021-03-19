<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Front | Login</title>

    <link rel="stylesheet" href="{{asset('template/css/vendors_css.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/skin_color.css')}}">
</head>
<body class="hold-transition theme-primary bg-img" style="background-image: url(template/images/auth-bg/bg-1.jpg)">
    <div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Perpustakaan Front</h2>
                                <p class="mb-0">Silahkan Login Menggunakan Nomor Anggota dan Password anda</p>
                                <p class="mb-0">Atau scan kartu anggota perpustakaan anda</p>
							</div>
							<div class="p-40">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
                                            <input type="text" class="form-control pl-15 bg-transparent @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
                                            <input type="password" class="form-control pl-15 bg-transparent @error('password') is-invalid @enderror" placeholder="Password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
									</div>
									<div class="row">
                                        <div class="col-6">
                                            <div class="fog-pwd text-right">
                                            {{-- <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Lupa Password?</a><br> --}}
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="fog-pwd text-right">
                                                <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Lupa Password?</a><br>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6 text-center">
                                            <a href="{{url('/')}}" class="btn btn-info mt-10">Home</a>
                                        </div>
                                        <div class="col-6 text-center">
                                            <button type="submit" class="btn btn-danger mt-10">Masuk</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
								</form>
								{{-- <div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="auth_register.html" class="text-warning ml-5">Sign Up</a></p>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script src="{{asset('template/js/vendors.min.js')}}"></script>
    <script src="{{asset('template/assets/icons/feather-icons/feather.min.js')}}"></script>
</body>
</html>
