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
        Schema::create('magang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('posisi');
            $table->string('perusahaan');
            $table->string('pendidikan');
            $table->string('tipe');
            $table->string('sertifikat');
            $table->string('durasi');
            $table->date('deadline');
            $table->date('pengumuman');
            $table->date('mulai_magang');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('link_daftar');
            $table->string('kontak')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magang');
    }
};
