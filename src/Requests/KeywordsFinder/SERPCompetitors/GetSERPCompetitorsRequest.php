<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\SERPCompetitors;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetSERPCompetitorsRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_serp_competitors';
}
