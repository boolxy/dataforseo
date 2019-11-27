<?php


namespace BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficForKeywords;


use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class LiveDataRequest extends AbstractRequest implements RequestInterface
{

    protected $method = self::METHOD_POST;

    protected $path = "kwrd_ad_traffic_by_keywords";

}
