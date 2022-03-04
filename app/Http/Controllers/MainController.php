<?php

namespace App\Http\Controllers;

use App\Components\ImportDataClient;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function get_points($tel): string
    {
        $token = env('EXTERNAL_API_TOKEN');

        $uri = $token . '&' . $tel;

        try {
            $response = (new ImportDataClient())->client->request('GET', $uri)->getBody();
        } catch (GuzzleException $e) {
            $e->getTraceAsString();
            $response = response()->json([
                'message' => 'Server connection error'
            ], 500);
        }

        return $response;
    }

}
