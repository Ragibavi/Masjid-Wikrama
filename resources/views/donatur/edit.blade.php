<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Edit Donatur</h2>

<form action="{{ route('donatur.update', $donatur->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nama">Nama:</label><br>
    <input type="text" name="name" value="{{ $donatur->name }}" required><br><br>

    <label for="donatur_id">Donatur ID:</label><br>
    <input type="text" name="donatur_id" value="{{ $donatur->donatur_id }}" required><br><br>

    <label for="packet">Paket:</label><br>
    <input type="text" name="packet" value="{{ $donatur->packet }}" required><br><br>

    <label for="text">Kategori:</label><br>
    <input type="text" name="category" value="{{ $donatur->category }}" required><br><br>
    
    <label for="nominal">Nominal:</label><br>
    <input type="text" name="nominal" value="{{ $donatur->nominal }}" required><br><br>


    <button type="submit">Simpan</button>
</form>
</body>
</html>