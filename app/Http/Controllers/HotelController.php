<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
class HotelController extends Controller
{

public function getNearbyHotels(Request $request)
{
    $userLat = $request->lat;
    $userLng = $request->lng;

    $hotels = Hotel::selectRaw("*, (
            6371 * acos(
                cos(radians(?)) *
                cos(radians(latitude)) *
                cos(radians(longitude) - radians(?)) +
                sin(radians(?)) *
                sin(radians(latitude))
            )
        ) AS distance", [$userLat, $userLng, $userLat])
        ->having("distance", "<", 10) // Radius 10 km
        ->orderBy("distance")
        ->get();

    return response()->json($hotels);
}
}