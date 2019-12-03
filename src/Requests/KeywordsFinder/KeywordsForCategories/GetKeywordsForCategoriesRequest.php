<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\KeywordsForCategories;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetKeywordsForCategoriesRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_keywords_for_category';
}
