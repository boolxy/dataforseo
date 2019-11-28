<?php

use BoolXY\DataForSEO\DataForSEO;
use BoolXY\DataForSEO\Apis;
use BoolXY\DataForSEO\Tests\TestCase;

class CompetitorDataApiTest extends TestCase
{
    private $dfs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dfs = DataForSEO::create($this->base_uri, $this->user, $this->pass)
            ->setApi(Apis::COMPETITOR_DATA_API);
    }


    /** @test */
    public function testCompetitorInfo()
    {
        $data = [
            "domain" => "asana.com"
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\CompetitorData\Requests\CompetitorInfoRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }
}
