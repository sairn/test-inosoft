<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Mobil extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $fillable = ['mesin', 'kapasitas', 'tipe', 'stok'];
}
