<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\RankedDomainsByCategory;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetRankedDomainsByCategoryRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_ranked_domains_by_category_get';
}
