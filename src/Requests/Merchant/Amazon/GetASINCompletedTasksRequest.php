<?php


namespace BoolXY\DataForSEO\Requests\Merchant\Amazon;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetASINCompletedTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'merchant_amazon_asin_tasks_get';
}
