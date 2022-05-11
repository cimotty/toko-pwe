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
        Schema::create('rawat_inaps', function (Blueprint $table) {
            $table->id('idRawatInap');
            $table->unsignedBigInteger('idKamar');
            $table->unsignedBigInteger('idPasien');
            $table->unsignedBigInteger('idPerawat');
            $table->timestamp('waktuMulaiInap');
            $table->dateTime('waktuSelesaiInap');

            $table->foreign('idPasien')->references('idPasien')->on('pasiens')->onDelete('cascade');
            $table->foreign('idKamar')->references('idKamar')->on('kamars')->onDelete('cascade');
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
        Schema::dropIfExists('rawat_inaps');
    }
};
