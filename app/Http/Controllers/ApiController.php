<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{

    public function index($username)
    {
        $response  = Http::get('https://medium.com/feed/@' . $username);

        if ($response->status() == "404") {
            return 'User not found';
        }
        //turn xml to json
        $xml = simplexml_load_string($response->getBody(), 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $data = json_decode($json, TRUE);
        //parse data
        return response(view('svg', ['data' => $data]))
            ->withHeaders([
                'Content-Type' => 'image/svg+xml',
            ]);
    }
}
