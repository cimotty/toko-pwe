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
        Schema::create('check_ups', function (Blueprint $table) {
            $table->id('idCheckUp');
            $table->unsignedBigInteger('idPasien');
            $table->unsignedBigInteger('idDokter');
            $table->unsignedBigInteger('idPerawat');
            $table->timestamp('waktuMulaiCheckUp');
            $table->dateTime('waktuKeluarCheckUp');
            $table->text('diagnosa');
            $table->text('keluhanPasien');

            $table->foreign('idPasien')->references('idPasien')->on('pasiens')->onDelete('cascade');
            $table->foreign('idDokter')->references('idDokter')->on('dokters')->onDelete('cascade');
            $table->foreign('idPerawat')->references('idPerawat')->on('perawats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_ups');
    }
};
