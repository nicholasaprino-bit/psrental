<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/store', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login/auth', [AuthController::class, 'auth']);

Route::get('/logout', function () {

    session()->flush();

    return redirect('/login');

});

/*
|--------------------------------------------------------------------------
| WEBSITE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    if(!session('login')){
        return redirect('/login');
    }

    return app(HomeController::class)->index();

});

Route::get('/menu', function () {

    if(!session('login')){
        return redirect('/login');
    }

    return app(HomeController::class)->menu();

});

Route::get('/games', function () {

    if(!session('login')){
        return redirect('/login');
    }

    return app(HomeController::class)->games();

});

Route::get('/booking', function () {

    if(!session('login')){
        return redirect('/login');
    }

    return app(HomeController::class)->booking();

});

Route::get('/tentang', function () {

    if(!session('login')){
        return redirect('/login');
    }

    return app(HomeController::class)->tentang();

});

Route::get('/kontak', function () {

    if(!session('login')){
        return redirect('/login');
    }

    return app(HomeController::class)->kontak();

});

Route::post('/payment', function (Illuminate\Http\Request $request) {

    if(!session('login')){
        return redirect('/login');
    }

    $paket = $request->paket;
    $jam = $request->jam;

    // HARGA PAKET

    if($paket == "PS4 Reguler"){
        $harga = 10000;
    }

    elseif($paket == "PS5 Premium"){
        $harga = 20000;
    }

    else{
        $harga = 35000;
    }

    $total = $harga * $jam;

    return view('payment', compact(
        'paket',
        'jam',
        'total'
    ));

});

Route::post('/booking/store', [BookingController::class, 'store']);

Route::post('/booking/store', [BookingController::class, 'store']);

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin', [AdminController::class, 'dashboard']);

Route::get('/admin/bookings', [AdminController::class, 'bookings']);

Route::get('/admin/users', [AdminController::class, 'users']);

Route::get('/admin/delete-booking/{id}', [
    AdminController::class,
    'deleteBooking'
]);