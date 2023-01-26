<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Pelamar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Laporan Data Pelamar</h1>
    <table class="table table-bordered" style="table-layout: fixed">
        <tr class="font-12">
            <th style="width: 15%">Id Lamaran</th>
            <th style="width: 15%">Id Pelamar</th>
            <th style="width: 30%">Nama Pelamar</th>
            <th style="width: 30%">Email</th>
        </tr>
        @foreach ($pelamar as $lamar)
        <tr>
            <td style="width: 15%">{{ $lamar->id_lamaran }}</td>
            <td style="width: 15%">{{ $lamar->id_pelamar }}</td>
            <td style="width: 30%">{{ $lamar->nama_pelamar }}</td>
            <td style="width: 30%">{{ $lamar->email }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>