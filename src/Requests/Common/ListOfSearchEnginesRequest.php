<?php


namespace BoolXY\DataForSEO\Requests\Common;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class ListOfSearchEnginesRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'cmn_se/$country_iso_code';
}
