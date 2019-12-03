<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\RelevantPages;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetRelevantPagesRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_relevant_pages_get';
}
