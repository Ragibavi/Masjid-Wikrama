<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('donatur.index') }}">Home</a>
    <a href="{{ route('donatur.create') }}">Tambah Donatur</a>
    <table class="table" border="1">
        <thead>
            <tr>
                <th scope="col">Nama Donatur</th>
                <th scope="col">Donatur ID</th>
                <th scope="col">Paket</th>
                <th scope="col">Kategori</th>
                <th scope="col">Nominal/barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donatur as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->donatur_id }}</td>
                <td>{{ $data->packet }}</td>
                <td>{{ $data->category }}</td>
                <td>{{ $data->nominal }}</td>
                <td>
                    <a href="{{ route('donatur.edit', $data->id) }}">Edit</a>
                    <form action="{{ route('donatur.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <br>
</body>

</html>