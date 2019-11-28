<?php


namespace BoolXY\DataForSEO\Api\OnPage\Requests;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetLinksToPageRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'op_tasks_get_links_to/$task_id/$page/$limit/$offset';
}
