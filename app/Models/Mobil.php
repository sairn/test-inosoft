<?php

namespace App\Models;

class Mobil extends Kendaraan
{
    protected $fillable = [
        'tahun', 'warna', 'harga',
        'mesin', 'kapasitas', 'tipe',
    ];
}
