@extends('layout.app')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('goods.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Semua Barang</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <td>Nama Barang</td>
                                <td>Stok</td>
                                <td>Aksi</td>
                            </thead>
                            @foreach($allGoods as $goods)
                            <tbody>
                                <td>{{ $goods->good_name }}</td>
                                <td>{{ $goods->stock }}</td>
                                <td>
                                    <a href="{{ route('goods.edit', $goods->id) }}" class="btn btn-warning" role="button">edit</a>
                                    <form action="{{ route('goods.destroy', $goods->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
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