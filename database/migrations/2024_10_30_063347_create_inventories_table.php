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
        Schema::create('inventories', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('namaBarang', 50);
            $table->string('jumlah', 50);
            $table->string('kategori', 50);
            $table->string('harga', 50);
            $table->string('statusBarang', 50);
            $table->string('stokBarang', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
