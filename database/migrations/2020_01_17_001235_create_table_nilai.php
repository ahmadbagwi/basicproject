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
        Schema::table('nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('anak_id');
            $table->bigIncrements('materi_id');
            $table->bigIncrements('setoran_id');
            $table->string('hafalan', 15);
            $table->string('makhraj', 15);
            $table->string('terjemahan', 15);
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
        Schema::table('nilai', function (Blueprint $table) {
            Schema::dropIfExists('nilai');
        });
    }
}
