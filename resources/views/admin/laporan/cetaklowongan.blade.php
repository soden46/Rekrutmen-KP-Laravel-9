<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Lowongan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Laporan Data Lowongan</h1>
    <table class="table table-bordered" style="table-layout: fixed">
        <tr class="font-12">
            <th style="width: 25px">Id Lowongan</th>
            <th style="width: 25px">Nama Jabatan</th>
            <th style="width: 25px">Alamat Caffe</th>
        </tr>
        @foreach ($lowongan as $lowong)
        <tr>
            <td style="width: 25px">{{ $lowong->id_lowongan }}</td>
            <td style="width: 25px">{{ $lowong->nama_jabatan }}</td>
            <td style="width: 25px">{{ $lowong->alamat_caffe }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>