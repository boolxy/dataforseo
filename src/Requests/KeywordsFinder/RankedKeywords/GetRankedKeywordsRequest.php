<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\RankedKeywords;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetRankedKeywordsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_ranked_keywords_get';
}
