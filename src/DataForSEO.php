<?php

namespace BoolXY\DataForSEO;

use BoolXY\DataForSEO\Requests\RequestInterface;
use GuzzleHttp\RequestOptions;

class DataForSEO
{
    protected $client;

    protected $request;

    public function __construct(Client $client, RequestInterface $request = null)
    {
        $this->client = $client;

        if (isset($request)) {
            $this->request = $request;
        }
    }

    public static function create(Client $client, RequestInterface $request = null)
    {
        return new static($client, $request);
    }

    /**
     * @param RequestInterface $request
     * @return $this
     */
    public function setRequest(RequestInterface $request): self
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get()
    {
        $request = $this->request;

        $method = $request->getMethod();

        $path = $request->getPath();

        $data = $request->getData();

        $result = $this->client->$method($path, [
            RequestOptions::SYNCHRONOUS => false,
            RequestOptions::HEADERS => [
                "Accept" => "application/json",
                "Content-Type" => "application/json",
            ],
            RequestOptions::JSON => [
                "data" => $data,
            ],
        ]);

        return json_decode((string) $result->getBody());
    }
}
