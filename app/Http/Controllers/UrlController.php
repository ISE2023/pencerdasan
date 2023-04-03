<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Url;

class UrlController extends Controller
{
    public function shorten(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'url' => 'required|url'
        ]);

        if ($validator->fails()) {
            // Return a failure response if validation fails
            return response()->json([
                'error' => 'Invalid URL'
            ], 400);
        }

        $url = $request->input('url');

        // Generate a short URL code
        $code = str_random(6);

        // Save the URL in the database
        $urlModel = new Url;
        $urlModel->original_url = $url;
        $urlModel->short_url = $code;
        $urlModel->save();

        //Return a successful response with the short URL
        return response()->json([
            'short_url' => url('/'.$code)
        ], 201);
    }
}