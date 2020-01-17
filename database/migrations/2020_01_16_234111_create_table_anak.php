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
        Schema::table('anak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('users_id');
            $table->string('namaLengkap', 100);
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin', ['ikhwan', 'akhwat']);
            $table->enum('jenjangSekolah', ['paud', 'tk', 'sd']);
            $table->string('namaSekolah', 15);
            $table->rememberToken();
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
        Schema::table('anak', function (Blueprint $table) {
            Schema::dropIfExists('anak');
        });
    }
}
