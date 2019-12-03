<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\DataForSEO;
use BoolXY\DataForSEO\Requests\CompetitorData\CompetitorInfoRequest;

class CompetitorDataApiTest extends TestCase
{
    private $dfs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dfs = DataForSEO::create($this->client);
    }


    /** @test */
    public function testCompetitorInfo()
    {
        $data = [
            "domain" => "asana.com"
        ];

        $result = $this->dfs
            ->setRequest(CompetitorInfoRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }
}
