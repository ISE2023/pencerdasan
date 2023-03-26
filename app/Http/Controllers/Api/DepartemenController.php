<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Core\Application\Service\Departemen\DepartemenService;
use Illuminate\Http\JsonResponse;

class DepartemenController extends Controller
{
    public function departemen(DepartemenService $service): JsonResponse
    {
        $response = $service->execute();
        return $this->successWithData($response, "Berhasil Mengambil Data Departemen");
    }
}
