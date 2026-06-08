<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PlayStation Rental</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<header>

    <div class="logo">
        PLAYSTATION RENTAL
    </div>

    <nav>
    <a href="/">Home</a>
    <a href="/menu">Menu</a>
    <a href="/games">Games</a>
    <a href="/tentang">Tentang</a>
    <a href="/kontak">Kontak</a>
    <a href="/logout">Logout</a>
</nav>

</header>

@yield('content')

<footer>
    <p>© 2026 PlayStation Rental</p>
</footer>

</body>
</html>