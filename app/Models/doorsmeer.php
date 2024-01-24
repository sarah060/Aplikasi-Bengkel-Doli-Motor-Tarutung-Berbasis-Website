<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doorsmeer extends Model
{
    use HasFactory;

    protected $fillable = [
        'namalengkap',
        'nomortelepon',
        'tipekendaraan',
        'jenis',
        'tanggal',
        'waktu',
        'status',

    ];
}
