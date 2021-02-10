<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTroubleshootsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troubleshoot', function (Blueprint $table) {
            $table->increments('troubleshoot_id');
            $table->integer('tanggal');
            $table->integer('bulan');
            $table->year('tahun');
            $table->text('purpose_work');
            $table->text('visitor_name');
            $table->string('visitor_company');
            $table->string('visitor_id');
            $table->string('visitor_department');
            $table->string('visitor_phone');
            $table->string('validity');
            $table->integer('time_in');
            $table->integer('time_out');
            $table->string('lokasi');
            $table->string('akses');
            $table->text('background_objective');
            $table->text('description_work');
            $table->text('resiko_dampak');
            $table->string('perlatan');
            $table->text('kegiatan');
            $table->string('kabel');
            $table->string('length');
            $table->integer('qty');
            $table->string('area_from');
            $table->string('area_to');
            $table->integer('rack_from');
            $table->integer('rack_to');
            $table->string('jenis_rack');
            $table->string('permintaan');
            $table->string('io');
            $table->string('merk');
            $table->string('serial');
            $table->string('jumlah');
            $table->string('remarks');
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
        Schema::dropIfExists('troubleshoot');
    }
}
