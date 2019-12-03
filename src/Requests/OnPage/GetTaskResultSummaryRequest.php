<?php


namespace BoolXY\DataForSEO\Requests\OnPage;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetTaskResultSummaryRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'op_tasks_get/$task_id';
}
