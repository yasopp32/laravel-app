<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    // Menentukan nama tabel
    protected $table = 'tb_mobil';

    // Menentukan primary key
    protected $primaryKey = 'id_mobil';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = ['id_merek', 'nama_mobil', 'tahun'];

    /**
     * Relasi ke model Merek (One-to-Many)
     *
     * Setiap mobil memiliki satu merek.
     * Menggunakan relasi belongsTo untuk menyatakan hubungan ini.
     */
    public function merek()
    {
        return $this->belongsTo(Merek::class, 'id_merek', 'id_merek');
    }

}
