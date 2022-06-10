<?php

namespace App\Services;

use App\Repositories\KendaraanRepository;

class KendaraanService
{
    public function __construct(
        KendaraanRepository $kendaraanRepository
    ) {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function get(array $params)
    {
        return $this->kendaraanRepository->get($params);
    }

    public function read(string $id)
    {
        return $this->kendaraanRepository->read($id);
    }

    public function create(array $params)
    {
        return $this->kendaraanRepository->create($params);
    }

    public function update(array $params, string $id)
    {
        return $this->kendaraanRepository->update($params, $id);
    }

    public function delete(string $id)
    {
        return $this->kendaraanRepository->delete($id);
    }
}
