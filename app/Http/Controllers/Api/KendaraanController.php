<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\KendaraanService;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function __construct(
        KendaraanService $kendaraanService
    ) {
        $this->kendaraanService = $kendaraanService;
    }


    public function get(Request $request)
    {
        return $this->kendaraanService->get($request->all());
    }

    public function read(string $id,)
    {
        return $this->kendaraanService->read($id);
    }

    public function create(Request $request)
    {
        return $this->kendaraanService->create($request->all());
    }

    public function update(Request $request, string $id)
    {
        return $this->kendaraanService->update($request->all(), $id);
    }

    public function delete(string $id)
    {
        return $this->kendaraanService->delete($id);
    }
}
