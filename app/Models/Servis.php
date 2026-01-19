<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servis extends Model
{
    use HasFactory;

    protected $table = 'tb_servis';         
    protected $primaryKey = 'id_servis';     

    protected $fillable = [
        'id_mobil',
        'nama_servis',
        'biaya',
        'keterangan'
    ];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id_mobil');
    }
}
