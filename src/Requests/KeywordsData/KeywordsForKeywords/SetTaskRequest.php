<?php


namespace BoolXY\DataForSEO\Requests\KeywordsData\KeywordsForKeywords;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class SetTaskRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = "kwrd_for_keywords_tasks_post";
}
