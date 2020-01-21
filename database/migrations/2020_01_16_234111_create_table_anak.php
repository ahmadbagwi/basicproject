<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('namaLengkap', 100);
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin', ['ikhwan', 'akhwat']);
            $table->enum('jenjangSekolah', ['paud', 'tk', 'sd']);
            $table->string('namaSekolah', 15);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('anak', function (Blueprint $table) {
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anak', function (Blueprint $table) {
            Schema::dropIfExists('anak');
        });
    }
}
