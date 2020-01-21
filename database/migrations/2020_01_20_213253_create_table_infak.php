<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInfak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 50);
            $table->date('tanggalTransfer');
            $table->bigInteger('nominal');
            $table->string('bukti', 200);
            $table->string('status', 20)->default('belum verifikasi');
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
        Schema::dropIfExists('infak');
    }
}
