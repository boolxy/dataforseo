<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\RankedDomainsByCategory;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetRankedDomainsByCategoryRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_ranked_domains_by_category_get';
}
