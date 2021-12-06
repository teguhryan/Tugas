@extends('layouts.index')

@section('title','Edit Customer')

@section('link')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="{{ route('customer') }}">Semua Customer</a></li>
              <li class="breadcrumb-item active">Tambah Customer</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <form method="POST" action="{{route('updateCustomer',$getCustomer->id)}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Customer</label>
            <input value="{{$getCustomer->email}}" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input value="{{$getCustomer->name}}" name="name" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input value="{{$getCustomer->address}}" name="address" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomer</label>
            <input value="{{$getCustomer->phone}}" name="phone" type="number" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</section>
@endsection

@section('script')
  <!-- jQuery -->
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="/assets/dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="/assets/plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/assets/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/assets/dist/js/pages/dashboard3.js"></script>
@endsection