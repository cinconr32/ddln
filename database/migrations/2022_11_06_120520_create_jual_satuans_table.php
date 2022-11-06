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
        Schema::create('jual_satuans', function (Blueprint $table) {
            $table->id('idJual');
            $table->integer('idBarang');
            $table->integer('hargajual');
            $table->integer('jumlah');
            $table->integer('totaljual');
            $table->integer('nominalbayar');
            $table->dateTime('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jual_satuans');
    }
};
