<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Laporan Penerimaan Lamaran</h1>
    <div class="container mt-4">
        <table class="table table-bordered">
            <tr>
                <th>Id Lamaran</th>
                <th>Id Pelamar</th>
                <th>Nama Pelamar</th>
                <th>Status</th>
                <th>Email</th>
                <th>Sudah Test</th>
            </tr>
            @foreach ($penerimaan as $terima)
            <tr>
                <td>{{ $terima->id_lamaran }}</td>
                <td>{{ $terima->id_pelamar }}</td>
                <td>{{ $terima->nama_pelamar }}</td>
                <td>{{ $terima->status_lamaran='Lamaran Disetujui' }}</td>
                <td>{{ $terima->email }}</td>
                <td>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>