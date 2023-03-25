<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Core\Application\Service\ListBank\ListBankService;
use Illuminate\Http\JsonResponse;

class ListBankController extends Controller
{
    public function list_bank(ListBankService $service): JsonResponse
    {
        $response = $service->execute();
        return $this->successWithData($response, "Berhasil Mengambil Data List_Bank");
    }
}
