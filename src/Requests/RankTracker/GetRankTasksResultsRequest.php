<?php


namespace BoolXY\DataForSEO\Requests\RankTracker;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetRankTasksResultsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'rnk_tasks_get/$task_id';
}
