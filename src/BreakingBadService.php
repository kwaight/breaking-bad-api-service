<?php

namespace kwaight\BreakingBadApiService;

use GuzzleHttp\Client;

class BreakingBadService
{
    /**
     * @var $baseUrl
     */
    private $baseUrl = '';

    private $client;

    /**
     * BreakingBadService constructor.
     */
    public function __construct()
    {
        $this->baseUrl = config('breaking_bad_api.base_url');
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'timeout'  => 2.0,
        ]);
    }

    public function searchCharactersByQuery($query)
    {
        $url = 'characters?name=' . $query;
        $response = $this->client->request('GET', $url);

        if ($response->getStatusCode() !== 200) {
            throw new BreakingBadServiceException('Invalid service request');
        }

        return json_decode($response->getBody());
    }

}