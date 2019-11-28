<?php


namespace BoolXY\DataForSEO\Api\OnPage\Requests;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetFilteredPagesRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'op_tasks_get_pages_filter';
}
