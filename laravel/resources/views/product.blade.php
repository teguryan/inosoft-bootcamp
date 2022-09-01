<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
</head>
<body>
    <table style="border:1px solid;">
        <tr>
            <td>Nama Produk</td>
            <td>Deskripsi</td>
            <td>Harga</td>
            <td>Tipe Produk</td>
        </tr>

        @foreach($product as $p)
        <tr>
            <td>{{$p['nama_produk']}}</td>
            <td>{{$p['deskripsi']}}</td>
            <td>{{$p['harga']}}</td>
            <td>{{$p['tipe_produk']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>