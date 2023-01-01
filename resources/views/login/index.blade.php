@extends('layouts.main')

@section('content')
<main class="form-signin w-100 m-auto">
    <!-- @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif -->
    @include('component.alert-dismissible')
    <form action="/authenticate" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">MASUK</h1>
        <div class="form-floating">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="bentokopi@gmail.com" value="{{old('email')}}" autofocus required>
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="password">Password</label>
            required <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">MASUK</button>
        <p class="mt-2 mb-1 text-muted"><a href="/register">Butuh Akun?</a></p>
        <p><a href="">Lupa Password</a></p>
    </form>
</main>
@endsection