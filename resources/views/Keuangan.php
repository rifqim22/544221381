<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuangan Pribadi</title>
</head>
<body>
    <h1>Keuangan Pribadi</h1>
    <a href="{{ route('keuangan.create') }}">Tambah Data</a>
    <table border="1">
        <thead>
            <tr>
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Tipe</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->tipe }}</td>
                <td>
                    <a href="{{ route('keuangan.edit', $item->id) }}">Edit</a>
                    <a href="{{ route('keuangan.delete', $item->id) }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>