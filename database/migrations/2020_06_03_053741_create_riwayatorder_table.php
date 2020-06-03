<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayatorder', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string('nomor_order');
            $table->string('alamat_pelanggan');
            $table->string('nama_pelanggan');
            $table->string('telp_pelanggan');
            $table->string('status')->default(false);
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
        Schema::dropIfExists('riwayatorder');
    }
}
