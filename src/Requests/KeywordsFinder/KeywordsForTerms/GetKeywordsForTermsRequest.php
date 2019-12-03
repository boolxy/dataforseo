<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\KeywordsForTerms;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetKeywordsForTermsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_kwrd_for_terms';
}
