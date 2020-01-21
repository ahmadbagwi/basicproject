<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('anak_id');
            $table->string('kemajuan', 15);
            $table->string('status', 30);
            $table->string('semester', 30);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('status', function (Blueprint $table) {
            $table->index('anak_id');
            $table->foreign('anak_id')->references('id')->on('anak')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('status', function (Blueprint $table) {
            Schema::dropIfExists('status');
        });
    }
}
