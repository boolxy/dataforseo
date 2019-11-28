<?php


namespace BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class SetTaskRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = "kwrd_for_domain_tasks_post";
}
