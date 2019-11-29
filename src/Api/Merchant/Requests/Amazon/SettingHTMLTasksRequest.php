<?php


namespace BoolXY\DataForSEO\Api\Merchant\Requests\Amazon;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class SettingHTMLTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'merchant_amazon_html_tasks_post';
}
