<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\KeywordsForDomain;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetResultsByTaskIdRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'kwrd_for_domain_tasks_get/$task_id';
}
