<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSetoran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setoran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('anak_id');
            $table->bigIncrements('materi_id');
            $table->string('fileAudio', 200);
            $table->string('status', 15)->default('belum diperiksa');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setoran', function (Blueprint $table) {
            Schema::dropIfExists('setoran');
        });
    }
}
