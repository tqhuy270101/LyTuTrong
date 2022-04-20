<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblTkbHsSang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tkb_hs_sang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lop');
            $table->string('thu', 10);
            $table->integer('tiet');
            $table->string('mon', 50);
            $table->string('giaovien', 100);
            $table->string('buoi', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tkb_hs_sang');
    }
}
