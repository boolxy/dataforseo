<?php


namespace BoolXY\DataForSEO\Api\Merchant\Requests\GoogleShopping;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class SettingSellersTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'merchant_google_shopping_shops_tasks_post';
}
