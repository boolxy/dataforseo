<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\SuggestedKeywords;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetResultsByTaskIdRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_finder_suggest_tasks_get/$task_id';
}
