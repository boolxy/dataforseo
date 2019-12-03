<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\Requests\Common\GetAdWordsStatusRequest;
use BoolXY\DataForSEO\Requests\Common\GetKeywordIdRequest;
use BoolXY\DataForSEO\Requests\Common\ListOfClickstreamLocationsRequest;
use BoolXY\DataForSEO\Requests\Common\ListOfKeywordsFinderLocationsRequest;
use BoolXY\DataForSEO\Requests\Common\ListOfLocationsRequest;
use BoolXY\DataForSEO\Requests\Common\ListOfSearchEnginesRequest;
use BoolXY\DataForSEO\Requests\Common\UserRequest;
use BoolXY\DataForSEO\DataForSEO;

class CommonApiTest extends TestCase
{
    private $dfs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dfs = DataForSEO::create($this->client);
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
