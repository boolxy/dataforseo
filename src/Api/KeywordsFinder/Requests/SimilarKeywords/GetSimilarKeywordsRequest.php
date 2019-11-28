<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\SimilarKeywords;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetSimilarKeywordsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_similar_keywords_get';
}
