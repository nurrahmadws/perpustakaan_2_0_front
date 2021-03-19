<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Front</title>

    <link rel="stylesheet" href="{{asset('template/css/vendors_css.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/skin_color.css')}}">
</head>
<body class="hold-transition theme-primary bg-img" style="background-image: url(template/images/auth-bg/bg-6.jpg)">
    <div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-lg-4">
                <a href="{{url('/login')}}">
                    <div class="box box-inverse bg-gradient-primary" style="padding-top: 13px; padding-bottom: 13px;">
                        <div class="box-body text-center">
                            <h3 class="text-uppercase text-muted">
                                PINJAM BUKU
                            </h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="{{url('/daftar')}}">
                    <div class="box card-shadowed box-inverse bg-gradient-danger">
                        <div class="box-body text-center">
                            <h3 class="text-uppercase text-muted">
                                DAFTAR ANGGOTA PERPUSTAKAAN
                            </h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="{{url('/login')}}">
                    <div class="box box-inverse bg-gradient-success" style="padding-top: 13px; padding-bottom: 13px;">
                        <div class="box-body text-center">
                            <h3 class="text-uppercase text-muted">
                                KEMBALIKAN BUKU
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
		</div>
	</div>
    <script src="{{asset('template/js/vendors.min.js')}}"></script>
    <script src="{{asset('template/assets/icons/feather-icons/feather.min.js')}}"></script>
</body>
</html>
