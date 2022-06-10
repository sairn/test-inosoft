<?php

namespace App\Repositories;

use App\Models\Kendaraan;

class KendaraanRepository
{
    public function get(array $params)
    {
        return Kendaraan::where($params)->get();
    }

    public function read(string $id)
    {
        return Kendaraan::find($id);
    }

    public function create(array $params)
    {
        return Kendaraan::create($params);
    }

    public function update(array $params, $id)
    {
        return Kendaraan::find($id)->update($params);
    }

    public function delete(string $id)
    {
        return Kendaraan::find($id)->delete();
    }
}
