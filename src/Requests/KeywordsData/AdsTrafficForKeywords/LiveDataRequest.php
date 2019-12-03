<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\AdsTrafficForKeywords;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class LiveDataRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = "kwrd_ad_traffic_by_keywords";
}
