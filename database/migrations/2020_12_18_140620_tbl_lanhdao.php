<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblLanhdao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lanhdao', function (Blueprint $table) {
            $table->increments('lanhdao_id');
            $table->string('lanhdao_hoten');
            $table->date('lanhdao_ngaysinh');
            $table->string('lanhdao_gioitinh');
            $table->string('lanhdao_chucvu');
            $table->string('lanhdao_nhiemky');
            $table->string('lanhdao_hinhanh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_lanhdao');
    }
}
