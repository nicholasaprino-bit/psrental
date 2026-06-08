@extends('layout')

@section('content')

<div class="container" style="padding:40px; color:white;">

    <h1>Data Users</h1>

    <table border="1" cellpadding="10" width="100%" style="border-collapse: collapse; background:#111;">

        <tr style="background:#222;">
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>

        @foreach($users as $user)

        <tr>
            <td>{{ $user->id ?? $user->ID }}</td>
            <td>{{ $user->name ?? $user->NAME }}</td>
            <td>{{ $user->email ?? $user->EMAIL }}</td>
        </tr>

        @endforeach

    </table>

</div>

@endsection