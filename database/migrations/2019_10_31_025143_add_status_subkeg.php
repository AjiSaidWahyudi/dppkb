<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusSubkeg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subkeg', function (Blueprint $table) {
            $table->enum('status',['Belum_terlaksana','Sudah_terlaksana']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subkeg', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
