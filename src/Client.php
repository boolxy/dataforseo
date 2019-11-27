<?php

namespace BoolXY\DataForSEO;

class Client extends \GuzzleHttp\Client
{

    private $base_uri;

    private $user;

    private $pass;

    public function __construct(string $base_uri, string $user, string $pass)
    {
        $this->base_uri = $base_uri;
        $this->user = $user;
        $this->pass = $pass;

        parent::__construct([
            "base_uri" => $this->base_uri,
            "auth" => [$this->user, $this->pass],
        ]);
    }

}