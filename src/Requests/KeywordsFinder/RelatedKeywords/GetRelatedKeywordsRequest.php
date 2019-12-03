<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\RelatedKeywords;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetRelatedKeywordsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_related_keywords_get';
}
