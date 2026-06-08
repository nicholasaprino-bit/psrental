<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <style>

        body{
            margin:0;
            font-family:Arial;
            background:#0f172a;
            color:white;
        }

        .container{
            padding:40px;
        }

        .title{
            font-size:35px;
            margin-bottom:30px;
        }

        .card-wrapper{
            display:flex;
            gap:20px;
            flex-wrap:wrap;
        }

        .card{
            background:#1e293b;
            padding:30px;
            border-radius:20px;
            width:250px;
            box-shadow:0 0 20px rgba(0,0,0,0.4);
        }

        .card h2{
            font-size:40px;
            margin:10px 0;
        }

        .menu{
            margin-top:30px;
        }

        .menu a{
            text-decoration:none;
            color:white;
            background:#2563eb;
            padding:12px 20px;
            border-radius:10px;
            margin-right:10px;
        }

    </style>

</head>
<body>

<div class="container">

    <h1 class="title">
        ADMIN RENTAL PS
    </h1>

    <div class="card-wrapper">

        <div class="card">
            <p>Total Booking</p>
            <h2>{{ $totalBooking }}</h2>
        </div>

        <div class="card">
            <p>Total User</p>
            <h2>{{ $totalUser }}</h2>
        </div>

        <div class="card">
            <p>Pendapatan</p>
            <h2>Rp {{ $pendapatan }}</h2>
        </div>

    </div>

    <div class="menu">

        <a href="/admin/bookings">
            Data Booking
        </a>

        <a href="/admin/users">
            Data User
        </a>

        <a href="/logout">
            Logout
        </a>

    </div>

</div>

</body>
</html>