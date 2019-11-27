<?php


namespace BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword;


use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class SetTaskRequest extends AbstractRequest implements RequestInterface
{

    protected $method = self::METHOD_POST;

    protected $path = "kwrd_sv_tasks_post";

}
