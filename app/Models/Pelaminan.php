<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaminan extends Model
{
    use HasFactory;

    // Tambahkan atribut yang dapat diisi
    protected $fillable = [
        'nama_pelaminan',
        'foto', 
        'harga',
    ];
}
