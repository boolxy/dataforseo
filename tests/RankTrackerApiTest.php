<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\Requests\RankTracker\GetRankTasksResultsRequest;
use BoolXY\DataForSEO\Requests\RankTracker\SettingRankTasksRequest;
use BoolXY\DataForSEO\DataForSEO;

class RankTrackerApiTest extends TestCase
{
    private $dfs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dfs = DataForSEO::create($this->client);
    }

    /** @test */
    public function testSettingRankTasks()
    {
        $data = [];

        $my_unq_id = mt_rand(0, 30000000);
        $data[$my_unq_id] = [
            "priority" => 1,
            "site" => "dataforseo.com",
            "url" => "https://www.google.co.uk/search" .
                "?q=seo%20data%20api&hl=en&gl=GB&uule=w+CAIQIFISCXXeIa8LoNhHEZkq1d1aOpZS",
        ];

        $my_unq_id = mt_rand(0, 30000000);
        $data[$my_unq_id] = [
            "priority" => 1,
            "site" => "dataforseo.com",
            "se_name" => "google.co.uk",
            "se_language" => "English",
            "loc_name_canonical" => "London,England,United Kingdom",
            "key" => mb_convert_encoding("seo data api", "UTF-8"),
        ];

        $my_unq_id = mt_rand(0, 30000000);
        $data[$my_unq_id] = [
            "priority" => 1,
            "site" => "dataforseo.com",
            "se_id" => 22,
            "loc_id" => 1006886,
            "key_id" => 62845222,
        ];

        $result = $this->dfs
            ->setRequest(SettingRankTasksRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetRankTasksResults()
    {
        $data = [
            "task_id" => 123456789,
        ];

        $result = $this->dfs
            ->setRequest(GetRankTasksResultsRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }
}
