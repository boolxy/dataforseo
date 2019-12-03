<?php


namespace BoolXY\DataForSEO\Requests\Merchant\GoogleShopping;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetProductSpecificationCompletedTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'merchant_google_shopping_product_spec_tasks_get';
}
