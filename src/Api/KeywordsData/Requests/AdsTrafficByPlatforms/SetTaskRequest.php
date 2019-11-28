<?php


namespace BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class SetTaskRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = "kwrd_ad_traffic_by_platforms_tasks_post";
}
