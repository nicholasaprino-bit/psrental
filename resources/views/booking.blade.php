@extends('layout')

@section('content')

<section class="booking-section">

    <div class="booking-wrapper">

        <!-- KIRI -->
        <div class="booking-info">

            <span class="booking-badge">
                PLAYSTATION RENTAL
            </span>

            <h1>
                Booking Tempat Bermain Favoritmu
            </h1>

            <p>
                Nikmati pengalaman bermain PlayStation dengan
                ruangan nyaman, perangkat modern, dan koleksi
                game terbaru bersama teman-temanmu.
            </p>

            <div class="booking-feature">

                <div class="feature-box">
                    🎮 PS4 & PS5
                </div>

                <div class="feature-box">
                    ⚡ Fast Internet
                </div>

                <div class="feature-box">
                    🛋️ Ruangan Nyaman
                </div>

            </div>

            <img src="{{ asset('images/ps-booking.png') }}"
                 alt="PlayStation">

        </div>

        <!-- KANAN -->
        <div class="booking-form-box">

            <h2>Form Booking</h2>

            @if(session('success'))

                <div class="success-alert">
                    {{ session('success') }}
                </div>

            @endif

            <form action="/booking/store" method="POST">

                @csrf

                <div class="input-group">

                    <label>Nama Customer</label>

                    <input type="text"
                           name="customer_name"
                           placeholder="Masukkan nama"
                           required>

                </div>

                <div class="input-group">

                    <label>Pilih Paket</label>

                    

                </div>

                </div>

<!-- PILIH SEAT -->
<div class="input-group">

    <label>Pilih Seat PlayStation</label>

    <select name="seat_id" required>

        @foreach($seats as $seat)

            @if($seat->status == 'available')

                <option value="{{ $seat->id }}">

                    {{ $seat->seat_name }}
                    - {{ $seat->type_ps }}
                    (Tersedia)

                </option>

            @endif

        @endforeach

    </select>

</div>

<!-- STATUS SEAT -->
<div class="seat-container">

    @foreach($seats as $seat)

        <div class="seat-box
            {{ $seat->status == 'busy'
                ? 'busy'
                : 'available' }}">

            <h3>{{ $seat->seat_name }}</h3>

            <p>{{ $seat->type_ps }}</p>

            <span>

                {{ $seat->status == 'busy'
                    ? 'TERISI'
                    : 'TERSEDIA' }}

            </span>

        </div>

    @endforeach

</div>

<div class="input-group">

    <label>Durasi Bermain</label>

                    <input type="number"
                           name="duration"
                           id="duration"
                           placeholder="Contoh: 2 Jam"
                           required>

                </div>

                <!-- TOTAL -->
                <div class="input-group">

                    <label>Total Harga</label>

                    <input type="text"
                           id="total"
                           readonly>

                </div>

                <!-- hidden input -->
                <input type="hidden"
                       name="total_price"
                       id="total_price">

@if(session('already_booking'))

    <button class="booking-btn booked-btn" disabled>
        Anda Sudah Booking
    </button>


@else
                <button type="submit" class="booking-btn">

                    Booking Sekarang

                </button>
@endif
            </form>

        </div>

    </div>

</section>

<script>

    const packageSelect = document.getElementById('package');
    const durationInput = document.getElementById('duration');
    const totalInput = document.getElementById('total');
    const totalPrice = document.getElementById('total_price');

    function calculateTotal() {

       let price = parseInt(
    packageSelect.options[
        packageSelect.selectedIndex
    ].dataset.price
);
        let duration = parseInt(durationInput.value) || 0;

        let total = price * duration;

        totalInput.value = 'Rp ' + total;
        totalPrice.value = total;
    }

    packageSelect.addEventListener('change', calculateTotal);
    durationInput.addEventListener('input', calculateTotal);

</script>

@endsection