<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\KeywordsForDomain;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class LiveDataRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_for_domain/$domain/$country_code/$language/$sort_by';
}
