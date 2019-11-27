<?php

namespace BoolXY\DataForSEO\Api;


use BoolXY\DataForSEO\Client;

interface ApiInterface
{

    public function setClient(Client $client): self;

    public function getClient(): Client;

    public function setRequest(RequestInterface $request): self;

    public function getRequest(): RequestInterface;

    public function get();

}
