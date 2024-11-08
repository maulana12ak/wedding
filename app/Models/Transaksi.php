<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'tanggal', 'total', 'status'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id');
    }
}
