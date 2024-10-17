<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketPernikahan extends Model
{
    use HasFactory;

    protected $table = 'paket_pernikahan';

    protected $fillable = [
        'nama_paket',
        'harga',
        'deskripsi',
        'fasilitas',
        'foto'
    ];
}
