<?php


namespace BoolXY\DataForSEO\Api\Merchant\Requests\Amazon;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class SettingTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'merchant_amazon_tasks_post';
}
