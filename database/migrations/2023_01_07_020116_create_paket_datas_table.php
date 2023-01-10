<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_datas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kecepatan');
            $table->string('kategori_id');
            $table->Integer('harga');
            $table->Integer('harga_pemasangan');
            $table->string('label');
            $table->string('image');
            $table->Integer('ppn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_datas');
    }
};
