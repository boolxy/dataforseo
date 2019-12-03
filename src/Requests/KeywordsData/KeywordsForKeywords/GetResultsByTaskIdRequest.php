<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\KeywordsForKeywords;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetResultsByTaskIdRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_for_keywords_tasks_get/$task_id';
}
