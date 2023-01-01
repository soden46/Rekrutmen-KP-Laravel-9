@extends('dashboard',[
'title' => 'Welcome',
'pageTitle' => 'Dashboard',
])
@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->nama }}</h1>
  <p class="lead">Ini adalah halaman simple dashboard.</p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}.</p>
</div>
@endsection