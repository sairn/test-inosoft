<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{

    public function get()
    {
        // Mobil::where($params)->get();
        return Mobil::count();
    }
}
