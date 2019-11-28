<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\Subdomains;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetSubdomainsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_subdomains_get';
}
