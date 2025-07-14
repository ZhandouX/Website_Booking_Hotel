<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Hotel extends Model
{   

    protected $table = 'hotel';

    protected $fillable = [
        'name',
        'category',
        'address',
        'description',
        'rooms',
        'bathrooms',
        'area',
        'floor',
        'parking',
        'image'
    ];
}
