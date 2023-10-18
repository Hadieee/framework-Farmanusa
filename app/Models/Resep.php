<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'reseps';
    protected $fillable = ['id_resep', 'nama_resep', 'nama_obat', 'jumlah_obat'];

    public function Reseps()
    {
        return $this->belongsTo(Apoteker::class, 'id_apoteker');
    }
}
