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
        Schema::create('resep_obats', function (Blueprint $table) {
            $table->id('idResepObat');
            $table->unsignedBigInteger('idDokter');
            $table->unsignedBigInteger('idPasien');
            $table->unsignedBigInteger('idObat');
            $table->timestamp('tanggalPenulisan');

            $table->foreign('idPasien')->references('idPasien')->on('pasiens')->onDelete('cascade');
            $table->foreign('idDokter')->references('idDokter')->on('dokters')->onDelete('cascade');
            $table->foreign('idObat')->references('idObat')->on('obats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep_obats');
    }
};
