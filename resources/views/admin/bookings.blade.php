<!DOCTYPE html>
<html>
<head>
    <title>Admin Booking</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{
            background:#0f172a;
            color:white;
            padding:30px;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .title{
            font-size:32px;
            font-weight:bold;
        }

        .back-btn{
            background:#2563eb;
            padding:10px 18px;
            border-radius:10px;
            color:white;
            text-decoration:none;
        }

        .card{
            background:#111827;
            padding:20px;
            border-radius:15px;
            margin-bottom:20px;
        }

        .card h2{
            margin-bottom:10px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            overflow:hidden;
            border-radius:15px;
        }

        th{
            background:#2563eb;
            padding:15px;
        }

        td{
            background:#1e293b;
            padding:15px;
            text-align:center;
            border-bottom:1px solid #334155;
        }

        tr:hover td{
            background:#334155;
        }

        .delete-btn{
            background:red;
            color:white;
            padding:8px 14px;
            border-radius:8px;
            text-decoration:none;
        }

        .seat-available{
            color:#22c55e;
            font-weight:bold;
        }

        .seat-busy{
            color:#ef4444;
            font-weight:bold;
        }

    </style>

</head>
<body>

<div class="topbar">

    <div class="title">
        🎮 ADMIN BOOKING
    </div>

    <a href="/" class="back-btn">
        Kembali Website
    </a>

</div>

<div class="card">

    <h2>Total Booking</h2>

    <h1>{{ count($bookings) }}</h1>

</div>

<table>

    <tr>
        <th>ID</th>
        <th>Customer</th>
        <th>Paket</th>
        <th>Durasi</th>
        <th>Total</th>
        <th>Seat</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @foreach($bookings as $booking)

    <tr>

        <td>{{ $booking->id }}</td>

        <td>{{ $booking->customer_name }}</td>

        <td>{{ $booking->package_name }}</td>

        <td>{{ $booking->duration }} Jam</td>

        <td>Rp {{ number_format($booking->total_price) }}</td>

        <td>
            {{ $booking->seat_id }}
        </td>

        <td>

            <span class="seat-busy">
                Busy
            </span>

        </td>

        <td>

            <a href="/admin/delete-booking/{{ $booking->id }}"
               class="delete-btn">

                Hapus

            </a>

        </td>

    </tr>

    @endforeach

</table>

</body>
</html>