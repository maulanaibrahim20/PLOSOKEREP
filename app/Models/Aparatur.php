<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aparatur extends Model
{
    use HasFactory;

    protected $table = 'table_aparatur';

    protected $fillable = ['nama', 'jabatan', 'no_hp', 'gambar'];
}
