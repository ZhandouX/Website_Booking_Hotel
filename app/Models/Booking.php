<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'order_id', 'nama', 'email', 'hp', 'hotel', 'kamar', 'total', 'status', 'waktu'
    ];
}

