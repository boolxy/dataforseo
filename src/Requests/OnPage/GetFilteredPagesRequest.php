<?php


namespace BoolXY\DataForSEO\Requests\OnPage;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetFilteredPagesRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'op_tasks_get_pages_filter';
}
