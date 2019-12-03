<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\BulkKeywordSearchVolume;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetCompletedTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_sv_batch_tasks_get';
}
