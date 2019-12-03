<?php


namespace BoolXY\DataForSEO\Requests\OnPage;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetBrokenPagesRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'op_tasks_get_broken_pages/$task_id/$limit/$offset';
}
