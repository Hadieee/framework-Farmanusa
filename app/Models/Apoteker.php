<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoteker extends Model
{
    use HasFactory;

    protected $table = 'apotekers';
    protected $fillable = ['id_apoteker', 'nama_apoteker', 'alamat_apoteker'];

    public function apotekers()
    {
        return $this->belongsToMany(Apoteker::class);
    }
}
