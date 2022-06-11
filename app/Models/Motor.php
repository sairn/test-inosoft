<?php

namespace App\Models;

class Motor extends Kendaraan
{
    protected $fillable = [
        'tahun', 'warna', 'harga',
        'mesin', 'suspensi', 'transmisi',
    ];
}
