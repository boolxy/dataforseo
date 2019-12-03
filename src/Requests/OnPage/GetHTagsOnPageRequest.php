<?php


namespace BoolXY\DataForSEO\Requests\OnPage;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetHTagsOnPageRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'op_tasks_htags_on_page/$task_id/$page/$limit/$offset';
}
