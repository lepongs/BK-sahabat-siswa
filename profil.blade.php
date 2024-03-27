@extends('layout.dashboard')

@section('main')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<!-- Main content -->
  <div class="d-flex align-items-center justify-content-center">
    <div class="card col-auto col-sm-6">

        <!-- /.card-header -->
      {{-- <div class="card-header">
        <h3 class="card-title">Tes</h3>
      </div> --}}

      <div class="card-body p-3 text-left">
        
            <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="mb-3 float-sm-left mr-sm-3" alt="llll" style="border-radius: 1rem; border: 1px solid black">
            <p class="">NAMA : {{-- {{ $data->name }} --}} UDIN</p>
            <p>KELAS : {{-- {{ $data->class }} --}} XI</p>
            <p>JURUSAN : {{-- {{ $data->name }} --}} PPLG</p>

      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
<!-- /.content -->
@endsection