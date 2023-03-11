<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang</title>


</head>
<body>
    <div style="text-align:center;">
    <h1>Laporan Data Barang</h1>
    <p>{{ date('l, d F Y') }}</p>
    </div>
    <br>
            <table border="2" width="100%" cellspacing="0">
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
                                <td style="text-align: center;">{{ $i++ }}.</td>
                                <td>{{ $b->nama_barang }}</td>
                                <td style="text-align: center;">{{ $b->jenis_barang }}</td>
                                <td style="text-align: center;">{{ $b->stok }}</td>
                                <td>{{ $b->harga }}</td>

                            </tr>
                        @endforeach
                </tbody>
            </table>


</body>
</html>