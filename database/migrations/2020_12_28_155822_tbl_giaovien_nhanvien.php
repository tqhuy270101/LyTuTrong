<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblGiaovienNhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_giaovien_nhanvien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoten');
            $table->string('monday');
            $table->string('chucvu');
            $table->date('ngaysinh');
            $table->string('sdt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_giaovien_nhanvien');
    }
}
