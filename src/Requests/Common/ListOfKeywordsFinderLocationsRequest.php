<?php


namespace BoolXY\DataForSEO\Requests\Common;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class ListOfKeywordsFinderLocationsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'cmn_locations_stat_kwrd_finder';
}
