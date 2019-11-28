<?php


namespace BoolXY\DataForSEO\Api\CompetitorData\Requests;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class CompetitorInfoRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'cmp_get/$domain';
}
