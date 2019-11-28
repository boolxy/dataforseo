<?php


namespace BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetResultsByTaskIdRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_ad_traffic_by_platforms_tasks_get/$task_id';
}
