<?php


class DataForSEO
{

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public static function create(Client $client)
    {
        return new static($client);
    }
}