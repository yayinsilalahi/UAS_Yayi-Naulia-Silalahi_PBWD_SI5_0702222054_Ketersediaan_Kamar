<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kamar_pasiens', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_kamar');
            $table->bigInteger('level_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('pesan_kamars', function(Blueprint $table) {
            $table->foreign('level_id')->references('id')->on('level_kamars')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar_pasiens');
    }
};
