<?php


namespace BoolXY\DataForSEO\Api\OnPage\Requests;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetHTagsOnPageRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'op_tasks_htags_on_page/$task_id/$page/$limit/$offset';
}
