<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalBooking = DB::table('bookings')->count();

        $totalUser = DB::table('users')->count();

        $pendapatan = DB::table('bookings')
            ->sum('TOTAL_PRICE');

        return view('admin.dashboard', compact(
            'totalBooking',
            'totalUser',
            'pendapatan'
        ));
    }

    public function bookings()
    {
        $bookings = DB::table('bookings')
            ->orderBy('ID', 'desc')
            ->get();

        return view('admin.bookings', compact('bookings'));
    }

    public function users()
    {
        $users = DB::table('users')->get();

        return view('admin.users', compact('users'));
    }

    public function deleteBooking($id)
{
    // ambil data booking
    $booking = DB::table('bookings')
        ->where('ID', $id)
        ->first();

    // ubah seat jadi available lagi
    DB::table('seats')
        ->where('id', $booking->seat_id)
        ->update([
            'status' => 'available'
        ]);

    // hapus booking
    DB::table('bookings')
        ->where('ID', $id)
        ->delete();

    return back()->with('success', 'Booking berhasil dihapus');
}
}
