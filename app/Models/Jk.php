<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jk extends Model
{
    use HasFactory;
    protected $table = 'jk';
    
    protected $fillable = ['jk', 'jumlah'];
}
