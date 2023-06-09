<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function produksi()
    {
        return $this->hasMany(Produksi::class);
    }

    public function Pengiriman()
    {
        return $this->hasMany(Pengiriman::class);
    }
    public function setoran(): BelongsTo
    {
        return $this->belongsTo(Setoran::class, 'cabang');
    }
}
