<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function store(Request $request)
    {

        DB::table('bookings')->insert([

            'customer_name' => $request->customer_name,

            'package_name' => $request->package_name,

            'duration' => $request->duration,

            'total_price' => $request->total_price,

            'seat_id' => $request->seat_id

        ]);

        // UPDATE STATUS SEAT
        DB::table('seats')
            ->where('id', $request->seat_id)
            ->update([
                'status' => 'busy'
            ]);

        // SESSION BOOKING
        session([
            'already_booking' => true
        ]);

        return redirect('/booking')
            ->with('success', 'Booking berhasil');
    }
}