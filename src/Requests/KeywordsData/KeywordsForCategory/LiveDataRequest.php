<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\KeywordsForCategory;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class LiveDataRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = "kwrd_for_category";
}
