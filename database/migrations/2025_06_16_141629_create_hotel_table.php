<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hotel', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('category'); // contoh: Hotel, Villa, Apartemen
        $table->string('address');
        $table->text('description');
        $table->integer('rooms');
        $table->integer('bathrooms');
        $table->integer('area'); // dalam m2
        $table->integer('floor');
        $table->string('parking');
        $table->string('image')->nullable();
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel');
    }
};
