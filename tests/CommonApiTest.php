<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\Api\Common\Requests\GetAdWordsStatusRequest;
use BoolXY\DataForSEO\Api\Common\Requests\GetKeywordIdRequest;
use BoolXY\DataForSEO\Api\Common\Requests\ListOfClickstreamLocationsRequest;
use BoolXY\DataForSEO\Api\Common\Requests\ListOfKeywordsFinderLocationsRequest;
use BoolXY\DataForSEO\Api\Common\Requests\ListOfLocationsRequest;
use BoolXY\DataForSEO\Api\Common\Requests\ListOfSearchEnginesRequest;
use BoolXY\DataForSEO\Api\Common\Requests\UserRequest;
use BoolXY\DataForSEO\DataForSEO;
use BoolXY\DataForSEO\Apis;

class CommonApiTest extends TestCase
{
    private $dfs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dfs = DataForSEO::create($this->base_uri, $this->user, $this->pass)
            ->setApi(Apis::COMMON_API);
    }


    /** @test */
    public function testListOfSearchEngines()
    {
        $result = $this->dfs
            ->setRequest(ListOfSearchEnginesRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testListOfLocations()
    {
        $result = $this->dfs
            ->setRequest(ListOfLocationsRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testListOfKeywordsFinderLocations()
    {
        $result = $this->dfs
            ->setRequest(ListOfKeywordsFinderLocationsRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testListOfClickstreamLocations()
    {
        $result = $this->dfs
            ->setRequest(ListOfClickstreamLocationsRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetKeywordId()
    {
        $data = [
            "keyword" => "online rank checker",
        ];

        $result = $this->dfs
            ->setRequest(GetKeywordIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testUser()
    {
        $result = $this->dfs
            ->setRequest(UserRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetAdWordsStatus()
    {
        $result = $this->dfs
            ->setRequest(GetAdWordsStatusRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }
}
