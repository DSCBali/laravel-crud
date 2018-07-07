@extends('layout.app')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Form Barang</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('goods.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Form Barang</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <form action="{{ route('goods.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" name="good_name" placeholder="Masukkan Nama Barang...">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Stok</label>
                    <input type="number" class="form-control" name="stock" placeholder="Masukkan Banyak Barang...">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection
@push('plugins')
    <script>
        //MASUKAN SEMUA FILE PLUGIN YANG DIBUTUHKAN

    </script>
@endpush