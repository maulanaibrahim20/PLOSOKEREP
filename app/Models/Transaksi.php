<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    public $timestamps = true;

    protected $fillable = [
        'kode_transaksi',
        'sku_transaksi',
        'total_jml',
        'total_harga',
        'nama_customer',
        'alamat',
        'no_tlp',
        
    ];

    protected $hidden;

}
