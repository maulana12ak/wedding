<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    use HasFactory;

    // Tambahkan atribut yang dapat diisi
    protected $fillable = [
        'nama_baju', 
        'ukuran', 
        'harga_sewa', 
        'deskripsi', 
        // Jika Anda menggunakan foto lagi, tambahkan 'foto', tetapi jika tidak, abaikan.
    ];
}
