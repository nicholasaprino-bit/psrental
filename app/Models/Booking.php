<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'customer_name',
        'package_name',
        'duration',
        'total_price'
    ];

    public $timestamps = false;
}