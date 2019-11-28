<?php


namespace BoolXY\DataForSEO\Api\Common\Requests;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class ListOfLocationsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_GET;

    protected $path = 'cmn_locations/$country_iso_code';
}
