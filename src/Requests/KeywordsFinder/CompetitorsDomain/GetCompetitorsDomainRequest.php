<?php


namespace BoolXY\DataForSEO\Requests\KeywordsFinder\CompetitorsDomain;

use BoolXY\DataForSEO\Requests\AbstractRequest;
use BoolXY\DataForSEO\Requests\RequestInterface;

class GetCompetitorsDomainRequest extends AbstractRequest implements RequestInterface
{
    protected $method = self::METHOD_POST;

    protected $path = 'kwrd_finder_domain_competitors';
}
