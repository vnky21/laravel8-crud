@extends('layouts.guest')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>

</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Data Barang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Stok</th>
                        <th>Harga Barang</th>
                 
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
                
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
