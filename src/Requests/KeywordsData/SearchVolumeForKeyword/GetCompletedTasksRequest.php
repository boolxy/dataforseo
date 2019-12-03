<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\SearchVolumeForKeyword;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetCompletedTasksRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_sv_tasks_get';
}
