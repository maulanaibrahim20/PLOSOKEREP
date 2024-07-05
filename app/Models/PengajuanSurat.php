<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    use HasFactory;

    // Menentukan field yang dapat diisi secara mass assignment
    protected $fillable = [
        'nama_lengkap',
        'nik',
        'nomor_hp',
        'upload_surat',
    ];
}
