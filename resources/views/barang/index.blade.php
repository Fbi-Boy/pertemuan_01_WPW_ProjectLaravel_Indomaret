<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
</head>
<body>

    <h1>Data Barang</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>

        @foreach ($barangs as $barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->kategori }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->stok }}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>