@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>

</div>

@if(session()-> has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
   
@elseif(session()-> has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Data Barang</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('barang.create') }}" class="btn btn-success mb-3">+ Data Barang</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Stok</th>
                        <th>Harga Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @php($i = 1)
                        @foreach($barang as $b)
                            <tr>
                                <td>{{ $i++ }}.</td>
                                <td>{{ $b->nama_barang }}</td>
                                <td>{{ $b->jenis_barang }}</td>
                                <td style="text-align: center;">{{ $b->stok }}</td>
                                <td>{{ $b->harga }}</td>
                                <td style="text-align: center;">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $b->id) }}" method="POST">
                                    <a href="{{ route('barang.edit', $b->id) }}" class="btn btn-primary"><i class="fas fa-pen-square"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button></td>
                                </form>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
