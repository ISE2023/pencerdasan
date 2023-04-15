<?php

namespace App\Core\Application\Service\Shortener;

use Illuminate\Http\Request;

class ShortenerRequest
{
    public function _requestUrl(Request $request) {
        $request->short_url = $short_url;
        $request->long_url = $long_url;
        $request->is_customized = $is_customized;
    }

}
 
