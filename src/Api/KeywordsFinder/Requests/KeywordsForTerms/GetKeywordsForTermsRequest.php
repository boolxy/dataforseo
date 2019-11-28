<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\KeywordsForTerms;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetKeywordsForTermsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_kwrd_for_terms';
}
