<?php


namespace BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForCategory;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class SetTaskRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = "kwrd_for_category_tasks_post";
}
