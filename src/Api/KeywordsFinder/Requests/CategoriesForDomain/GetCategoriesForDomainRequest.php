<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\CategoriesForDomain;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetCategoriesForDomainRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_categories_for_domain_get';
}
