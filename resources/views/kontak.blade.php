@extends('layout')

@section('content')

<section class="contact-section">

    <div class="contact-header">

        <h1>Hubungi Kami</h1>

        <p>
            Siap bermain game favoritmu?
            Hubungi kami untuk booking PlayStation sekarang juga.
        </p>

    </div>

    <div class="contact-container">

        <!-- INFO KONTAK -->

        <div class="contact-info">

            <div class="info-card">
                <h2>Alamat</h2>
                <p>Jl. Gaming No. 99, Medan</p>
            </div>

            <div class="info-card">
                <h2>Telepon</h2>
                <p>0812-3456-7890</p>
            </div>

            <div class="info-card">
                <h2>Email</h2>
                <p>rentalps@gmail.com</p>
            </div>

            <div class="info-card">
                <h2>Jam Operasional</h2>
                <p>Buka 24 Jam</p>
            </div>

        </div>

        <!-- FORM -->

        <div class="contact-form">

            <h2>Kirim Pesan</h2>

            <form>

                <input type="text" placeholder="Nama Lengkap">

                <input type="email" placeholder="Email">

                <textarea placeholder="Tulis pesan..." rows="5"></textarea>

                <button type="submit">
                    Kirim Pesan
                </button>

            </form>

        </div>

    </div>

</section>

@endsection