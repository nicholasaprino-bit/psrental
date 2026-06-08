@extends('layout')

@section('content')

<section class="payment-section">

    <div class="payment-box">

        <h1>Pembayaran Rental</h1>

        <p class="payment-subtitle">
            Selesaikan pembayaran booking PlayStation.
        </p>

        <div class="payment-detail">

            <div class="detail-card">

                <h2>Paket</h2>

                <p>{{ $paket }}</p>

            </div>

            <div class="detail-card">

                <h2>Durasi</h2>

                <p>{{ $jam }} Jam</p>

            </div>

            <div class="detail-card">

                <h2>Total Pembayaran</h2>

                <p>Rp {{ number_format($total) }}</p>

            </div>

        </div>

        <div class="payment-method">

            <h2>Metode Pembayaran</h2>

            <select>

                <option>DANA</option>

                <option>OVO</option>

                <option>GoPay</option>

                <option>Transfer Bank</option>

            </select>

        </div>

        <button class="pay-btn">

            Bayar Sekarang

        </button>

    </div>

</section>

@endsection