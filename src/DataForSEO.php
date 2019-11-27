<?php

namespace BoolXY\DataForSEO;

use BoolXY\DataForSEO\Api\RequestInterface;

class DataForSEO
{

    protected $client;

    protected $api;

    /**
     * DataForSEO constructor.
     * @param string $base_uri
     * @param string $user
     * @param string $pass
     */
    public function __construct(string $base_uri, string $user, string $pass)
    {
        $this->client = new Client($base_uri, $user, $pass);
    }

    /**
     * @param string $base_uri
     * @param string $user
     * @param string $pass
     * @return static
     */
    public static function create(string $base_uri, string $user, string $pass)
    {
        return new static($base_uri, $user, $pass);
    }

    /**
     * @param string $api
     * @return $this
     */
    public function setApi(string $api): self
    {
        $api = "BoolXY\\DataForSEO\\Api\\" . str_replace("Api", "", $api) . "\\" . $api;
        $this->api = new $api($this->client);

        return $this;
    }

    /**
     * @param RequestInterface $request
     * @return $this
     */
    public function setRequest(RequestInterface $request): self
    {
        $this->api->setRequest($request);

        return $this;
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->api->get();
    }

}