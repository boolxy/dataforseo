<?php


namespace BoolXY\DataForSEO\Api\RankTracker\Requests;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetRankTasksResultsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'rnk_tasks_get/$task_id';
}
