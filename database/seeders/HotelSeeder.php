<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::create([
            'name' => 'Wayame Bay Hotel',
            'category' => 'Hotel Bintang 3',
            'address' => 'Jl. Ir Putuhena, Wayame, Teluk Ambon, Kota Ambon',
            'description' => 'Wayame Bay Hotel merupakan salah satu penginapan favorit di Kota Ambon...',
            'rooms' => 8,
            'bathrooms' => 8,
            'area' => 450,
            'floor' => 3,
            'parking' => '6 mobil',
            'image' => 'images/wayame-bay-hotel.jpg'
        ]);
    }
}
