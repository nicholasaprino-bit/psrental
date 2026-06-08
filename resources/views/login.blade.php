<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Rental PS</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Segoe UI;
        }

        body{
            background:linear-gradient(to right,#111,#333);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-box{
            background:#1f1f1f;
            padding:40px;
            width:400px;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,0.5);
        }

        .login-box h1{
            text-align:center;
            margin-bottom:30px;
            color:white;
        }

        .login-box input{
            width:100%;
            padding:15px;
            margin-bottom:20px;
            border:none;
            border-radius:10px;
            background:#2b2b2b;
            color:white;
        }

        .login-box button{
            width:100%;
            padding:15px;
            border:none;
            border-radius:30px;
            background:#d0d0d0;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
        }

        .login-box button:hover{
            background:white;
        }

        .error{
            background:red;
            color:white;
            padding:10px;
            border-radius:10px;
            margin-bottom:20px;
            text-align:center;
        }

        .register-link{
    margin-top:20px;
    text-align:center;
    color:white;
}

.register-link a{
    color:#00bfff;
    text-decoration:none;
    font-weight:bold;
}

    </style>

</head>

<body>

<div class="login-box">

    <h1>LOGIN RENTAL PS</h1>

    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    <form action="/login/auth" method="POST">

        @csrf

        <input type="email" name="email" placeholder="Email">

        <input type="password" name="password" placeholder="Password">

        <button type="submit">
            LOGIN
        </button>

        <div class="register-link">

    Belum punya akun?

    <a href="/register">
        Daftar Sekarang
    </a>

</div>

    </form>

</div>

</body>
</html>