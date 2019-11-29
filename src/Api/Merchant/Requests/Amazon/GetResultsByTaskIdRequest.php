<?php


namespace BoolXY\DataForSEO\Api\Merchant\Requests\Amazon;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetResultsByTaskIdRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'merchant_amazon_tasks_get/$task_id';
}
