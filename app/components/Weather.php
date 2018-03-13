<?php


class weather
{
    const API_URL = 'http://api.openweathermap.org/data/2.5/';
    const CACHE_DIR = 'weather';

    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        //throw new Exception('API-ключ неверный');
    }

    public function getWeatherByCity($city, $cache=false) {

        $param = [
            'q' => $city,
            'appid' => $this->apiKey
        ];

        $url = self::API_URL . 'weather?' . http_build_query($param);

        return $this->getResponse($url, $cache);

    }

    public function getWeatherByCoordinate() {

    }

    private function getResponse($url, $cache=false) {
        if ($cache) {
            return $url;
        }else {
            $result = file_get_contents($url);
            return json_decode($result, true);
        }
    }
}