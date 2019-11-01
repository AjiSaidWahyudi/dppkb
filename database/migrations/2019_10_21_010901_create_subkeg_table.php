<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubkegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subkeg', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kegiatan_id');
            $table->string('nama');
            $table->text('detail');
            $table->string('file')->nullable();
            $table->timestamps();
            $table->foreign('kegiatan_id')->references('id')->on('kegiatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subkeg');
    }
}
