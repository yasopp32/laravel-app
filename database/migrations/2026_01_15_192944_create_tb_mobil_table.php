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
        Schema::create('tb_mobil', function (Blueprint $table) {
            $table->bigIncrements('id_mobil'); // ID mobil sebagai primary key
            $table->unsignedBigInteger('id_merek'); // Menggunakan unsignedBigInteger untuk foreign key
            $table->string('nama_mobil', 100); // Nama mobil
            $table->integer('tahun')->nullable(); // Tahun mobil (nullable)
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('id_merek')->references('id_merek')->on('tb_merek')
                ->onDelete('cascade') // Jika merek dihapus, mobil terkait akan dihapus
                ->onUpdate('cascade'); // Jika ID merek diupdate, akan diupdate juga
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_mobil');
    }
};

