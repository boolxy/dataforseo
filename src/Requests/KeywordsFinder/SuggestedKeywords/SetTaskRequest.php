<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\SuggestedKeywords;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class SetTaskRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_suggest_tasks_post';
}
