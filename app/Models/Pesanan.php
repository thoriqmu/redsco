<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_produk',
        'nama_pemesan',
        'jumlah',
        'harga',
        'alamat',
        'status',
        'bukti',
        'resi,'
    ];

    public function produk() {
        return $this->belongsTo('App\Models\Produk', 'id_produk');
    }
    public static function latestOrders()
    {
        return static::latest()->take(5)->get();
    }
}
