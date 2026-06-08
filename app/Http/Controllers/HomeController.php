<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu');
    }
    public function tentang()
{
    return view('tentang');
}
public function games()
{
    return view('games');
}
public function booking()
{
    $seats = DB::table('seats')->get();

    return view('booking', compact('seats'));
}
public function kontak()
{
    return view('kontak');
}
}
