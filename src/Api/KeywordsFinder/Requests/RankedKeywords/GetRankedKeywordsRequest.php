<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\RankedKeywords;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetRankedKeywordsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_ranked_keywords_get';
}
