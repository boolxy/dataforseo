<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\SuggestedKeywords;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetCompletedTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_finder_suggest_tasks_get';
}
