<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\Subdomains;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetSubdomainsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_subdomains_get';
}
