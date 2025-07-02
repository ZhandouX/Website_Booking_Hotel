<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('nomor_hp');
            $table->string('nama_hotel');
            $table->string('tipe_kamar');
            $table->integer('jumlah_kamar');
            $table->integer('jumlah_dewasa');
            $table->integer('jumlah_anak');
            $table->date('tanggal_checkin');
            $table->bigInteger('total_harga');
            $table->string('status')->default('pending');
            $table->string('snap_token')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
