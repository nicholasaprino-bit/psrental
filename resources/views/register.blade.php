@extends('layout')

@section('content')

<div class="auth-container">

    <form action="/register/store" method="POST" class="auth-form">

        @csrf

        <h2>Daftar Akun</h2>

        <input type="text"
               name="name"
               placeholder="Nama Lengkap"
               required>

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit">
            Daftar
        </button>

        <p>
            Sudah punya akun?
            <a href="/login">Login</a>
        </p>

    </form>

</div>

@endsection