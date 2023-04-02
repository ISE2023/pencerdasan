<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Core\Application\Service\UrlShortener\UrlShortenerService;
use Illuminate\Http\JsonResponse;

class UrlShortenerController extends Controller
{
    public function urlshortener(UrlShortenerService $service): JsonResponse
    {
        $urlshortener = $service->execute();
        return $this->successWithData($response, "Berhasil mendapatkan url panjang");

//         HTTP CODE : 200 OK
// {
//     “success”: true,
//     “data” : “http://ise-its.com/”,
//      “message” : “Berhasil mendapatkan url panjang” 
// }

// HTTP CODE : 400 BAD REQUEST
// {
//     “success”: false,
//     “message” : “Tidak berhasil mendapatkan url panjang” 
// }

    }
}
