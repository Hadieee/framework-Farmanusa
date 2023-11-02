<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apoteker extends Model
{
    use HasFactory;

    protected $table = 'apotekers';
    protected $fillable = ['id_apoteker', 'nama_apoteker', 'alamat_apoteker'];
    protected $appends = ['total_resep'];

    public function apoteker(): HasMany
    {
        return $this->HasMany(Resep::class);
    }

    public function getTotalResepAttribute()
    {
        return $this->resep->count();
    }
}
