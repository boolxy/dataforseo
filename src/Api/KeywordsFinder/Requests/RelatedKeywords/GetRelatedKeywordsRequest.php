<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\RelatedKeywords;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetRelatedKeywordsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_related_keywords_get';
}
