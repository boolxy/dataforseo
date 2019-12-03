<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\SimilarKeywords;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetSimilarKeywordsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_similar_keywords_get';
}
