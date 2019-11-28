<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\RelevantPages;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetRelevantPagesRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_relevant_pages_get';
}
