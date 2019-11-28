<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\SuggestedKeywords;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class SetTaskRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_suggest_tasks_post';
}
