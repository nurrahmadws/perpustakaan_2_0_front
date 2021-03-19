<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Front | @yield('title')</title>

    <link rel="stylesheet" href="{{asset('template/css/vendors_css.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/skin_color.css')}}">
    @yield('css')
</head>
<body class="hold-transition theme-primary bg-img">

    {{-- <div id="loader"></div> --}}
    <div style="min-height: 250px; padding: 35px 100px 0px 100px; margin-right: auto; margin-left: auto;">
        <div class="container-full">
            <section class="content">
                @yield('content')
            </section>
        </div>
    </div>
    <script src="{{asset('template/js/vendors.min.js')}}"></script>
    <script src="{{asset('template/assets/icons/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('management/initiator.js')}}"></script>
    @stack('js')
</body>
</html>
