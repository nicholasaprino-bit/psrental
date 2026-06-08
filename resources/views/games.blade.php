@extends('layout')

@section('content')

<section class="games-section">

    <h1>Daftar Game Favorit</h1>

    <p class="subtitle">
        Pilih game favoritmu dan mainkan bersama teman.
    </p>

    <div class="games-container">

        <div class="game-card">
            <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1200&auto=format&fit=crop">

            <h2>FIFA 26</h2>

            <p>Game sepak bola paling populer dengan grafis modern.</p>
        </div>

        <div class="game-card">
            <img src="https://images.unsplash.com/photo-1542751110-97427bbecf20?q=80&w=1200&auto=format&fit=crop">

            <h2>GTA V</h2>

            <p>Petualangan open world dengan gameplay seru.</p>
        </div>

        <div class="game-card">
            <img src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?q=80&w=1200&auto=format&fit=crop">

            <h2>Tekken 8</h2>

            <p>Game fighting modern dengan karakter keren.</p>
        </div>

        <div class="game-card">
            <img src="https://images.unsplash.com/photo-1560253023-3ec5d502959f?q=80&w=1200&auto=format&fit=crop">

            <h2>Spider-Man 2</h2>

            <p>Rasakan petualangan superhero terbaik di PS5.</p>
        </div>

    </div>

</section>

@endsection