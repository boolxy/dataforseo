<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\KeywordsForCategories;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetKeywordsForCategoriesRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_keywords_for_category';
}
