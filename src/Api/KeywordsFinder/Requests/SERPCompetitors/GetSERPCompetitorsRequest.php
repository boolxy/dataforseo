<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\SERPCompetitors;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetSERPCompetitorsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_serp_competitors';
}
