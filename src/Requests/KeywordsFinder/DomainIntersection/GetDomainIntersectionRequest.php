<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\DomainIntersection;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetDomainIntersectionRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_domain_intersection_get';
}
