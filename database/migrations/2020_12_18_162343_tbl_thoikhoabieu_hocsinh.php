<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblThoikhoabieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_thoikhoabieu_hocsinh', function (Blueprint $table) {
            $table->integer('id_lop');
            $table->string('thu');
            $table->string('tiet');
            $table->string('mon');
            $table->string('giaovien');
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
        Schema::dropIfExists('tbl_thoikhoabieu_hocsinh');
    }
}
