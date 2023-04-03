<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Core\Application\Service\Kabupaten\KabupatenService;
use Illuminate\Http\JsonResponse;

class KabupatenController extends Controller
{
    public function kabupaten(KabupatenService $service): JsonResponse
    {
        $response = $service->execute();
        return $this->successWithData($response, "Berhasil Mengambil Data Kabupaten");
    }
}
