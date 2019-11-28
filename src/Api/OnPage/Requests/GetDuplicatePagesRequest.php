<?php


namespace BoolXY\DataForSEO\Api\OnPage\Requests;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetDuplicatePagesRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'op_tasks_get_duplicates/$task_id/$duplicate_type/$limit/$offset';
}
