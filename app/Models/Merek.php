<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    protected $table = 'tb_merek';  
    protected $primaryKey = 'id_merek'; 
    protected $fillable = ['nama_merek'];

    public function mobil()
    {
        return $this->hasMany(Mobil::class, 'id_merek', 'id_merek');
    }
}
