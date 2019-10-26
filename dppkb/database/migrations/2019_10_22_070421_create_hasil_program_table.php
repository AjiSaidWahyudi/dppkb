<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_program', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bidang_id');
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('kegiatan_id');
            $table->unsignedBigInteger('subkeg_id')->nullable();
            $table->timestamps();
            $table->foreign('bidang_id')->references('id')->on('bidang')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('unit')->onDelete('cascade');
            $table->foreign('program_id')->references('id')->on('program')->onDelete('cascade');
            $table->foreign('kegiatan_id')->references('id')->on('kegiatan')->onDelete('cascade');
            $table->foreign('subkeg_id')->references('id')->on('subkeg')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_program');
    }
}
