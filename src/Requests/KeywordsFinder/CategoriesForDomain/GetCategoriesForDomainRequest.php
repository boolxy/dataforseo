<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\CategoriesForDomain;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetCategoriesForDomainRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_categories_for_domain_get';
}
