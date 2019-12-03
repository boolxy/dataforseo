<?php


namespace BoolXY\DataForSEO\Requests\CompetitorData;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class CompetitorInfoRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'cmp_get/$domain';
}
