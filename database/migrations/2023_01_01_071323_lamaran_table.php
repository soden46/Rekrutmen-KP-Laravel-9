<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 20);
            $table->string('email');
            $table->string('nama_caffe');
            $table->text('alamat_caffe');
            $table->string('foto');
            $table->string('cv');
            $table->string('surat_lamaran');
            $table->string('status')->default('Menunggu Ditidaklanjuti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lamaran');
    }
};
