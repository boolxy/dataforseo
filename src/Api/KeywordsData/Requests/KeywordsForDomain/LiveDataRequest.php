<?php


namespace BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain;


use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class LiveDataRequest extends AbstractRequest implements RequestInterface
{

    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_for_domain/$domain/$country_code/$language/$sort_by';

}
