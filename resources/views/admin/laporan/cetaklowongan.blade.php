<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Lowongan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body {
            font-size: 12px;
            font-family: Verdana, Tahoma, "DejaVu Sans", sans-serif;
        }

        .table,
        .td,
        .th,
        thead {
            border: 1px solid black;
            text-align: center
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .text-center {
            text-align: center;
        }

        .text-success {
            color: green
        }

        .text-danger {
            color: red
        }

        .fw-bold {
            font-weight: bold
        }

        .tandatangan {

            text-align: center;
            margin-left: 500px;

        }
        .header img {
            float: left;
            width: 100px;
            height: 100px;
            background: transparent;
        }
        .header h1 {
            position: relative;
            top: 5px;
        }
      </style>  
</head>

<body>
    <div class="card">
        <div class="card-body">
    <div class="header mb-3">
        <img src="{{asset('assets/img/bgi.png')}}" alt="Logo">
    <h1 class="text-center">Laporan Lowongan Pekerjaan<br>Bento Group Indonesia</h1>
    </div>
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
    <div class="tandatangan">

                <br>

                <p style="padding-bottom:25px">
                Mengetahui, <br>{{Auth::User()->nama}}</p>


                <p>Bento Group Indonesia</p>

      </div>
    </div>
  </div>
</body>

</html>