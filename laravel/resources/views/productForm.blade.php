<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ItemForm</title>
</head>
<body>
    <form action="{{ url('/product/store') }}" method="POST">
    @csrf  
        <label >Nama Produk</label>
        <input name="nama_produk" value="">
        <label >Deskripsi</label>
        <input name="deskripsi" value="">
        <label >Harga Produk</label>
        <input name="harga" value="">
        <label >Tipe</label>
        <select name="tipe_produk">
            <option value="Sepatu">Sepatu</option>
            <option value="Celana">Celana</option>
            <option value="Baju">Baju</option>
        </select>

        <button type="submit">Submit</button>
    </form>

    @if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>