<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_produk',
        'jumlah',
        'harga',
    ];

    public function produk() {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
