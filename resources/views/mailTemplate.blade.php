<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Akun</title>
</head>
<body>
    <p>Halo <b>{{$details['username']}}</b>!</p>
    <p>Berikut ini adalah Data Anda:</p>
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td>{{$details['username']}}</td>
      </tr>
      <tr>
        <td>Role</td>
        <td>:</td>
        <td>{{$details['role']}}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{$details['email']}}</td>
      </tr>
      <tr>
        <td>Tanggal Register</td>
        <td>:</td>
        <td>{{$details['datetime']}}</td>
      </tr>
    </table>

    <center>
      <h3>Klik Tombol di bawah ini ke browser Anda untuk Verifikasi Akun:</h3>
      <button type="button" class="btn btn-primary btn-lg"><a href="{{$details['url']}}">Verifikasi Akun</a></button>
    </center>
    <center>
      <h3>Atau copy link di bawah ini ke browser Anda</h3>
      <b style="color:blue">{{$details['url']}}</b>
    </center>

  <p>Terima kasih telah melakukan registrasi.</p>
</body>
</html>