@extends('layouts.main')

@section('content')
<main class="form-signin w-100 m-auto">
    <form action="/register" method="POST">
        @include('component.alert-dismissible')
        @csrf
        <h1 class="h3 mb-3 fw-normal">DAFTAR</h1>

        <div class="form-floating">
            <label for="floatingInput">Nama</label>
            <input type="text" name="nama" class="form-control @error('nama')is-invalid @enderror" id="floatingInput" placeholder="Nama Lengkap" required value="{{old('nama')}}">
            @error('nama')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="floatingInput">Username</label>
            <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="floatingInput" placeholder="Username" required value="{{old('username')}}">
            @error('username')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-floating">
            <label for="floatingInput">Email</label>
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="floatingInput" placeholder="bentokopi@gmail.com" required value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-floating">
            <label for="floatingPassword">Password</label>
            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">DAFTAR</button>
        <p class="mt-2 mb-1 text-muted"><a href="{{'/login'}}">Sudah Punya Akun? Masuk</a></p>
    </form>
</main>
@endsection