<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Buku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_buku',function(Blueprint $table){
            $table -> char('kode_buku',10);
            $table -> char('kode_kategori',10);
            $table -> char('kode_penerbit',10);
            $table -> varchar('judul_buku',50);
            $table -> int('jumlah_buku',11);
            $table -> varchar('pengarang_buku',50);
            $table -> int('tahun_terbit_buku',11);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       

    }
}
