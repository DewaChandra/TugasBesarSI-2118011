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
        Schema::create('pengajuanizins', function (Blueprint $table) {
            $table->id();
            $table->string('ID_PengajuanIzin');
            $table->date('Tgl_Pengajuan');
            $table->date('Tgl_Mulai');
            $table->date('Tgl_Akhir');
            $table->string('Alasan_Cuti');
            $table->string('NIP');
            $table->foreign('NIP')->references('id')->on('karyawans');
            $table->string('Validasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuanizins');
    }
};
