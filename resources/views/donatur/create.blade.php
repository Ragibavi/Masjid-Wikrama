<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Tambah Donatur</h2>

<form action="{{ route('donatur.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label><br>
    <input type="text" name="name" required><br><br>

    <label for="donatur_id">Donatur ID</label><br>
    <input type="text" name="donatur_id" required><br><br>

    <label for="packet">Paket</label><br>
    <input type="text" name="packet" required><br><br>

    <label for="category">Kategori</label><br>
    <input type="text" name="category" required><br><br>

    <label for="nominal">Nominal</label><br>
    <input type="text" name="nominal" required><br><br>

    <button type="submit">Simpan</button>
</form>
</body>
</html>