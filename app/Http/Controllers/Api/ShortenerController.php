<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Core\Application\Service\Shortener\ShortenerService;
use App\Exceptions\UserException;
use Illuminate\Http\JsonResponse;

class ShortenerController extends Controller
{
    public function getShortener(ShortenerService $service, string $short_url): JsonResponse
    {
        $response = $service->getLongUrl($short_url);
        if (empty($response))
        {
            $error = new UserException('Tidak Mendapat URL Panjang',1000,400);
            return $error-> render();
        }


        return $this->successWithData($response, "Berhasil mendapatkan url panjang");

    }
}
