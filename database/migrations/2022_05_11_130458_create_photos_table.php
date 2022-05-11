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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('albumID')->nullable();
            $table->unsignedBigInteger('locationID')->nullable();
            $table->unsignedBigInteger('memberID')->nullable();
            
            $table->string('judul', 120);
            $table->string('penjelasan')->nullable();
            $table->string('pribadi', 20);
            $table->date('tanggalUnggah');
            $table->integer('view')->default(0);
            $table->string('namaFile');

            $table->foreign('albumID')->references('id')->on('albums')->onDelete('cascade');
            $table->foreign('locationID')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('memberID')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
};
