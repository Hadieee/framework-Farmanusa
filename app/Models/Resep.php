<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'reseps';
    protected $fillable = ['id_resep', 'nama_resep', 'nama_obat', 'jumlah_obat', "apoteker_id"];

    public function resep(): BelongsTo
    {
        return $this->belongsTo(Apoteker::class, 'apoteker_id');
    }
}
