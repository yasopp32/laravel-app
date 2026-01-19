<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_servis', function (Blueprint $table) {

            // Primary Key
            $table->bigIncrements('id_servis');

            // Foreign key ke tb_mobil
            $table->unsignedBigInteger('id_mobil');

            // Data servis
            $table->string('nama_servis', 100);
            $table->decimal('biaya', 10, 2);
            $table->text('keterangan')->nullable();

            $table->timestamps();

            // Relasi FK
            $table->foreign('id_mobil')
                ->references('id_mobil')
                ->on('tb_mobil')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_servis');
    }
};
