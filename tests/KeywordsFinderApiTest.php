<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\Requests\KeywordsFinder\CategoriesForDomain\GetCategoriesForDomainRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\CompetitorsDomain\GetCompetitorsDomainRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\DomainIntersection\GetDomainIntersectionRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\KeywordsForCategories\GetKeywordsForCategoriesRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\KeywordsForTerms\GetKeywordsForTermsRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\RankedDomainsByCategory\GetRankedDomainsByCategoryRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\RankedKeywords\GetRankedKeywordsRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\RelatedKeywords\GetRelatedKeywordsRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\RelevantPages\GetRelevantPagesRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\SERPCompetitors\GetSERPCompetitorsRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\SimilarKeywords\GetSimilarKeywordsRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\Subdomains\GetSubdomainsRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\SuggestedKeywords\GetCompletedTasksRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\SuggestedKeywords\GetResultsByTaskIdRequest;
use BoolXY\DataForSEO\Requests\KeywordsFinder\SuggestedKeywords\SetTaskRequest;
use BoolXY\DataForSEO\DataForSEO;

class KeywordsFinderApiTest extends TestCase
{
    private $dfs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dfs = DataForSEO::create($this->client);
    }

    /** @test */
    public function testGetRelatedKeywords()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "keyword" => "mountain house",
            "country_code" => "US",
            "language" => "en",
            "depth" => 2,
            "limit" => 1,
            "offset" => 0,
            "orderby" => "cpc,desc",
            "filters" => [
                ["cpc", ">", 0],
                "or",
                [
                    ["search_volume", ">", 0],
                    "and",
                    ["search_volume", "<=", 1000],
                ]
            ]
        ];

        $result = $this->dfs
            ->setRequest(GetRelatedKeywordsRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function getSimilarKeywords()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "keyword" => "ice tea",
            "country_code" => "US",
            "language" => "en",
            "limit" => 1,
            "offset" => 0,
            "orderby" => "cpc,desc",
            "filters" => [
                ["cpc", ">", 0],
                "or",
                [
                    ["search_volume", ">", 0],
                    "and",
                    ["search_volume", "<=", 1000],
                ]
            ]
        ];

        $result = $this->dfs
            ->setRequest(GetSimilarKeywordsRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetRankedKeywords()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "domain" => "dataforseo.com",
            "country_code" => "US",
            "language" => "en",
            "limit" => 1,
            "offset" => 0,
            "orderby" => "position,asc",
            "filters" => [
                ["cpc", ">", 0],
                "and",
                ["search_volume", ">=", 1000],
            ]
        ];

        $result = $this->dfs
            ->setRequest(GetRankedKeywordsRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetKeywordsForTerms()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "keywords" => ["seo"],
            "country_code" => "US",
            "language" => "en",
            "limit" => 20,
        ];

        $result = $this->dfs
            ->setRequest(GetKeywordsForTermsRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetSERPCompetitors()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "keywords" => ["phone", "buy"],
            "country_code" => "US",
            "language" => "en",
            "limit" => 20,
        ];

        $result = $this->dfs
            ->setRequest(GetSERPCompetitorsRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetRelevantPages()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "domain" => "rankactive.com",
            "country_code" => "US",
            "language" => "en",
            "limit" => 3,
        ];

        $result = $this->dfs
            ->setRequest(GetRelevantPagesRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetSubdomains()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "domain" => "dataforseo.com",
            "country_code" => "US",
            "language" => "en",
            "limit" => 3,
        ];

        $result = $this->dfs
            ->setRequest(GetSubdomainsRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetCompetitorsDomain()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "domain" => "dataforseo.com",
            "country_code" => "US",
            "language" => "en",
            "limit" => 5,
        ];

        $result = $this->dfs
            ->setRequest(GetCompetitorsDomainRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetCategoriesForDomain()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "domain" => "hide.co.uk",
            "country_code" => "GB",
            "language" => "en",
            "limit" => 10,
            "orderby" => "organic_count,desc",
        ];

        $result = $this->dfs
            ->setRequest(GetCategoriesForDomainRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetKeywordsForCategories()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "categories" => [12193, 12191],
            "country_code" => "US",
            "language" => "en",
            "limit" => 10,
        ];

        $result = $this->dfs
            ->setRequest(GetKeywordsForCategoriesRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetRankedDomainsByCategory()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "categories" => [13841],
            "country_code" => "GB",
            "language" => "en",
            "limit" => 10,
            "orderby" => "organic_count,desc",
        ];

        $result = $this->dfs
            ->setRequest(GetRankedDomainsByCategoryRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetDomainIntersection()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "country_code" => "US",
            "language" => "en",
            "domain1" => "similarweb.com",
            "domain2" => "dataforseo.com",
            "limit" => 3,
            "filters" => [
                ["domain_1_pos", "<", 10],
                "and",
                ["url_2", "like", "/pricing%"],
            ]
        ];

        $result = $this->dfs
            ->setRequest(GetDomainIntersectionRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testSuggestedKeywordsSetTask()
    {
        $data = [];
        $my_unq_id = mt_rand(0, 30000000);

        $data[$my_unq_id] = [
            "keyword" => "stone",
            "se_id" => 4790,
        ];

        $result = $this->dfs
            ->setRequest(SetTaskRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(GetCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetResultsByTaskId()
    {
        $data = [
            "task_id" => 473,
        ];

        $result = $this->dfs
            ->setRequest(GetResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }
}
