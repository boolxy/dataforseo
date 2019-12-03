<?php


namespace BoolXY\DataForSEO\Requests\Merchant\Amazon;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class SettingTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'merchant_amazon_tasks_post';
}
