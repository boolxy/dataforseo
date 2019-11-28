<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\DomainIntersection;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetDomainIntersectionRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_domain_intersection_get';
}
