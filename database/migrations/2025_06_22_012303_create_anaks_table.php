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
        Schema::create('anak', function (Blueprint $table) {
            $table->id();
            
            // Foreign key ke tabel ibu
            $table->foreignId('ibu_id')->constrained('ibu')
                  ->onDelete('cascade')->onUpdate('cascade');
            
            // Data identitas anak
            $table->string('nik', 16)->unique();
            $table->string('nama', 100);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            
            // Data kelahiran
            $table->decimal('berat_lahir', 5, 2)->comment('Dalam kilogram');
            $table->decimal('panjang_lahir', 5, 2)->comment('Dalam centimeter');
            $table->enum('kondisi_lahir', ['Normal', 'Prematur', 'Cacat'])->default('Normal');
            
            // Data medis
            $table->string('golongan_darah', 2)->nullable();
            $table->text('riwayat_penyakit')->nullable();
            
            // Data administrasi
            $table->string('no_akta', 50)->nullable()->comment('Nomor akta kelahiran');
            $table->string('foto')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak');
    }
};
