<?php

// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'idpaket',
        'tgl_order',
        'tgl_acara',
        'tgl_selesai',
        'status',
        'total',
    ];

    // Relationship to Paket
    public function paket()
    {
        return $this->belongsTo(Paket::class, 'idpaket');
    }
}
