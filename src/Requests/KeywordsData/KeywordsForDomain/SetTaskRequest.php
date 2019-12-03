<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\KeywordsForDomain;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class SetTaskRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = "kwrd_for_domain_tasks_post";
}
