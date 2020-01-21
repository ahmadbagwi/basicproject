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
        Schema::create('setoran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('anak_id');
            $table->unsignedBigInteger('materi_id');
            $table->string('fileAudio', 200);
            $table->string('status', 15)->default('belum diperiksa');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('setoran', function (Blueprint $table) {
            $table->index('anak_id');
            $table->index('materi_id');
            $table->foreign('anak_id')->references('id')->on('anak')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('materi_id')->references('id')->on('materi')->onUpdate('cascade')->onDelete('cascade');
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
