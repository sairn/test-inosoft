<?php

namespace App\Repositories;

use App\Models\Kendaraan;
use App\Models\Mobil;

class KendaraanRepository
{
    public function get(array $params)
    {
        return Mobil::where($params)->get();
    }

    public function read(string $id)
    {
        return Mobil::find($id);
    }

    public function create(array $params)
    {
        return Mobil::create($params);
    }

    public function update(array $params, $id)
    {
        return Mobil::find($id)->update($params);
    }

    public function delete(string $id)
    {
        return Mobil::find($id)->delete();
    }
}
