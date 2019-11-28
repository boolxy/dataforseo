<?php


namespace BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForKeywords;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class LiveDataRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = "kwrd_for_keywords";
}
