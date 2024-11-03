<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = ['nama_paket', 'baju_id', 'pelaminan_id', 'makeup_id', 'harga'];

    public function baju()
    {
        return $this->belongsTo(Baju::class);
    }

    public function pelaminan()
    {
        return $this->belongsTo(Pelaminan::class);
    }

    public function makeup()
    {
        return $this->belongsTo(Makeup::class);
    }
}

