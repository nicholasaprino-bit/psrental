@extends('layout')

@section('content')

<section class="menu-section">

    <h1>Daftar Paket Rental</h1>

    <div class="menu-container">

        <div class="menu-card">
            <h2>PS4 Reguler</h2>
            <p>Rp 10.000 / Jam</p>
            <a href="/booking" class="booking-btn">
    Sewa Sekarang
</a>
        </div>

        <div class="menu-card">
            <h2>PS5 Premium</h2>
            <p>Rp 20.000 / Jam</p>
            <a href="/booking" class="booking-btn">
    Sewa Sekarang
</a>
        </div>

        <div class="menu-card">
            <h2>VIP Room</h2>
            <p>Rp 35.000 / Jam</p>
            <a href="/booking" class="booking-btn">
    Sewa Sekarang
</a>
        </div>

    </div>

</section>

@endsection