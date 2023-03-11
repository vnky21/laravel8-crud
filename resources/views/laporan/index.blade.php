@extends('layouts.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cetak Data Barang</h1>

</div>

<!-- Content Row -->

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-6">
       <!-- Approach -->
       <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cetak Laporan Data Barang</h6>
            </div>
            <div class="card-body">
                <p>Klik tombol dibawah ini untuk cetak laporan PDF data barang.</p>
               <a href="/cetak/cetak-pdf" target="_blank" class="btn btn-danger float-right"><i class="fas fa-file-pdf"></i> Cetak Data</a>
            </div>
        </div>
    </div>

 
</div>




@endsection
