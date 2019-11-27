<?php


class Client extends GuzzleHttp\Client
{

    private $uri;

    private $user;

    private $pass;

    public function __construct(string $uri, string $user, string $pass)
    {
        $this->uri = $uri;
        $this->user = $user;
        $this->pass = $pass;

        parent::__construct([
            "base_uri" => $this->uri,
            "auth" => [$this->user, $this->pass],
        ]);
    }

}