@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> <a href="/barang">Data Barang</a> / Tambah Data</h1>

</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Barang</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('barang.store') }}" method = "POST">

        @csrf
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" value="{{ old('nama_barang') }}" name="nama_barang" id="nama_barang" placeholder="Nama Barang">
                @error('nama_barang')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis_barang">Jenis Barang</label>
                <select class="form-control @error('jenis_barang') is-invalid @enderror" name="jenis_barang" id="jenis_barang">
                    <option value="">--Jenis Barang--</option>
                    <option value="Plastik">Plastik</option>
                    <option value="Kaca">Kaca</option>
                    <option value="Stainless Steel">Stainless Steel</option>
                    <option value="Styrofoam">Styrofoam</option>
                </select>
                @error('jenis_barang')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="stok">Stok Barang</label>
                <input type="number" class="form-control @error('stok') is-invalid  @enderror" value="{{ old('stok') }}" name="stok" id="stok" placeholder="Stok Barang">
                @error('stok')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga Barang</label>
                <input type="number" class="form-control @error('harga') is-invalid  @enderror" value="{{ old('harga') }}" name="harga" id="harga" placeholder="Harga Barang">
                @error('harga')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success mt-3 float-right">Tambah Data</button>
            <button type="reset" class="btn btn-secondary mt-3 mr-2 float-right">Reset</button>

        </form>
    </div>
</div>
@endsection
