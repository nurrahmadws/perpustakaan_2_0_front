@extends('layouts.app')
@section('title')
    Daftar Anggota Perpustakaan
@endsection
@section('content')
<div class="col-12">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Petunjuk Pengisian Formulir Pendaftaran Anggota Perpustakaan</h4>
        </div>
        <div class="box-body p-0">
          <div class="media-list media-list-hover">
            <a class="media media-single" href="#">
              <h4 class="w-50 text-gray font-weight-500">1</h4>
              <div class="media-body pl-15 bl-5 rounded border-primary">
                <p>Pastikan data yang anda masukkan sesuai kartu identitas yang berlaku, benar, dan dapat dipertanggungjawabkan.</p>
              </div>
            </a>

            <a class="media media-single" href="#">
              <h4 class="w-50 text-gray font-weight-500">2</h4>
              <div class="media-body pl-15 bl-5 rounded border-success">
                <p>Inputan dengan tanda * wajib diisi.</p>
              </div>
            </a>

            <a class="media media-single" href="#">
              <h4 class="w-50 text-gray font-weight-500">3</h4>
              <div class="media-body pl-15 bl-5 rounded border-info">
                <p>Setelah selesai mengisi formulir pendaftaran, bawa bukti pendaftaran ke bagian Layanan Perpustakaan, untuk mencetak kartu anggota perpustakaan.</p>
              </div>
            </a>

            <a class="media media-single" href="#">
              <h4 class="w-50 text-gray font-weight-500">4</h4>
              <div class="media-body pl-15 bl-5 rounded border-danger">
                <p>Silahkan hubungi bagian layanan Perpustakaan, jika anda pernah mendaftarkan diri sebelumnya namun akun anda tidak aktif.</p>
              </div>
            </a>
          </div>
        </div>
    </div>
  </div>
<div class="box box-default">
    <div class="box-header with-border">
        <h4 class="box-title">Formulir Pendaftaran Anggota Perpustakaan</h4>
        <div class="pull-right">
            <a href="{{url('/')}}" class="btn btn-warning btn-sm">Kembali</a>
        </div>
    </div>
    <div class="box-body wizard-content">
        <form action="#" class="validation-wizard wizard-circle">
            <!-- Step 1 -->
            @include('core.register.create@step1')
            <!-- Step 2 -->
            @include('core.register.create@step2')
        </form>
    </div>
</div>
<br>
@endsection
@push('js')
    <script src="{{asset('template/assets/vendor_components/jquery-steps-master/build/jquery.steps.js')}}"></script>
    <script src="{{asset('template/assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('template/js/pages/steps.js')}}"></script>
    <script src="{{asset('template/assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>
    <script src="{{asset('management/region.js')}}"></script>
    <script src="{{asset('management/register.js')}}"></script>
@endpush
