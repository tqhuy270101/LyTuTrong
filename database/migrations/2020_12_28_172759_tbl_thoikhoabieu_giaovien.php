<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblThoikhoabieuGiaovien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_thoikhoabieu_giaovien', function (Blueprint $table) {
            $table->integer('id_giaovien');
            $table->string('thu');
            $table->string('tiet');
            $table->string('mon');
            $table->string('buoi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_thoikhoabieu_giaovien');
    }
}
