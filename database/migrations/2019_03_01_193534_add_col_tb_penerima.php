<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColTbPenerima extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('tb_penerima', 'keterangan')) {
            Schema::table('tb_penerima', function (Blueprint $table) {
                $table->string('keterangan')->nullable();
            });
        }
        if (!Schema::hasColumn('tb_penerima', 'title')) {
            Schema::table('tb_penerima', function (Blueprint $table) {
                $table->string('title')->nullable();
            });
        }
        if (!Schema::hasColumn('tb_penerima', 'needed')) {
            Schema::table('tb_penerima', function (Blueprint $table) {
                $table->double('needed')->nullable();
            });
        }
        if (!Schema::hasColumn('tb_penerima', 'tgl_akhir')) {
            Schema::table('tb_penerima', function (Blueprint $table) {
                $table->date('tgl_akhir')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
