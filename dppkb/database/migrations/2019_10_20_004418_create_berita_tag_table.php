<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('berita_id');
            $table->timestamps();
            $table->foreign('tag_id')->references('id')->on('tag')->onDelete('cascade');
            $table->foreign('berita_id')->references('id')->on('berita')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita_tag');
    }
}
