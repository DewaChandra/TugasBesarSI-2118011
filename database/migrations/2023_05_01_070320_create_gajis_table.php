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
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->string('ID_Gaji');
            $table->unsignedBigInteger('NIP');
            $table->foreign('NIP')->references('id')->on('karyawans');
            $table->integer('Gaji_Pokok');
            $table->unsignedBigInteger('ID_Tunjangan');
            $table->foreign('ID_Tunjangan')->references('id')->on('tunjangans');
            $table->string('Jabatan');
            $table->integer('Total_Gaji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gajis');
    }
};
