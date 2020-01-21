<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('anak_id');
            $table->unsignedBigInteger('materi_id');
            $table->unsignedBigInteger('setoran_id');
            $table->string('hafalan', 15);
            $table->string('makhraj', 15);
            $table->string('terjemahan', 15);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('nilai', function (Blueprint $table) {
            $table->index('anak_id');
            $table->index('materi_id');
            $table->index('setoran_id');
            $table->foreign('anak_id')->references('id')->on('anak')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('materi_id')->references('id')->on('materi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('setoran_id')->references('id')->on('setoran')->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilai', function (Blueprint $table) {
            Schema::dropIfExists('nilai');
        });
    }
}
