<?php


namespace BoolXY\DataForSEO\Api\KeywordsFinder\Requests\CompetitorsDomain;

use BoolXY\DataForSEO\Api\AbstractRequest;
use BoolXY\DataForSEO\Api\RequestInterface;

class GetCompetitorsDomainRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_domain_competitors';
}
