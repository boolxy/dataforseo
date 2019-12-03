<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\AdsTrafficByPlatforms;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetCompletedTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_ad_traffic_by_platforms_tasks_get';
}
