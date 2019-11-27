<?php


namespace BoolXY\DataForSEO\Api;


use BoolXY\DataForSEO\Client;
use GuzzleHttp\RequestOptions;

abstract class AbstractApi implements ApiInterface
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

    public static function create(Client $client, RequestInterface $request): ApiInterface
    {
        return new static($client, $request);
    }

    /**
     * @param Client $client
     * @return AbstractApi
     */
    public function setClient(Client $client): ApiInterface
    {
        $this->client = $client;

        return $this;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param mixed $request
     * @return AbstractApi
     */
    public function setRequest(RequestInterface $request): ApiInterface
    {
        $this->request = $request;

        return $this;
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * @return mixed
     */
    public function get()
    {
        $request = $this->getRequest();

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
