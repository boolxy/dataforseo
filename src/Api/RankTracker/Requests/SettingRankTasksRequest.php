<?php


namespace BoolXY\DataForSEO\Api\RankTracker\Requests;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class SettingRankTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'rnk_tasks_post';
}
