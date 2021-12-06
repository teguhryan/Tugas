@extends('layouts.index')

@section('title','Customer')

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
            <h1 class="m-0">Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Semua Customer</li>
              <li class="breadcrumb-item active"><a href="{{ route('tambahCustomer') }}">Tambah Data</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('main-content')
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Email</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Nomer</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($getCustomer as $item)
    <tr>
      <th>{{ $loop->iteration }}</th>
      <td>{{ $item->email }}</td>
      <td>{{ $item->name }}</td>
      <td>{{ $item->address }}</td>
      <td>{{ $item->phone }}</td>
      <td>
        <a href="{{ route('editCustomer',$item->id) }}" class="btn btn-success btn-flat btn-sm">Edit</a>
        <a href="{{ route('hapusCustomer',$item->id) }}" class="btn btn-danger btn-sm">
          Delete
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
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