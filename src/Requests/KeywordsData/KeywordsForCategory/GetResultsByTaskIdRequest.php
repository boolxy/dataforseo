<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\KeywordsForCategory;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetResultsByTaskIdRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_for_category_tasks_get/$task_id';
}
