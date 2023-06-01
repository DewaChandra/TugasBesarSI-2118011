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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('NIP');
            $table->string('Nama');
            $table->string('Tempat_Lahir');
            $table->date('Tanggal_Lahir');
            $table->string('Jenis_Kelamin');
            $table->string('Agama');
            $table->string('Alamat');
            $table->string('Status_Kawin');
            $table->string('Kewarganegaraan');
            $table->string('Pendidikan');
            $table->string('Jurusan');
            $table->string('Jabatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
