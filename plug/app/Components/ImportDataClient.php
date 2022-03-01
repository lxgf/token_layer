<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportDataClient
{
    public Client $client;

    /**
     * ImportDataClient constructor.
     * @param $client
     */
    public function __construct()
    {
       $this->client = new Client([
            // Базовый URI используется с относительными запросами
            'base_uri' => 'http://127.0.0.1:8000/',
            // Вы можете установить любое количество параметров запроса по умолчанию.
            'timeout'  => 2.0,
            'verify' => false
        ]);
    }

}
