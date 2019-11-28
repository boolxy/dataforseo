<?php

use BoolXY\DataForSEO\DataForSEO;
use BoolXY\DataForSEO\Apis;
use BoolXY\DataForSEO\Tests\TestCase;

class KeywordsDataApiTest extends TestCase
{
    private $dfs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dfs = DataForSEO::create($this->base_uri, $this->user, $this->pass)
            ->setApi(Apis::KEYWORDS_DATA_API);
    }


    #region Live Tests

    /** @test */
    public function testSearchVolumeForKeywordLive()
    {
        $data = [
            [
                "language" => "en",
                "loc_name_canonical" => "United States",
                "key" => "average page rpm adsense",
            ],
            [
                "language" => "en",
                "loc_id" => 2840,
                "key" => "adsense blank ads how long",
            ],
            [
                "language" => "en",
                "loc_name_canonical" => "United States",
                "key" => "leads and prospects",
            ],
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword\LiveDataRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testBulkKeywordSearchVolumeLive()
    {
        $data = [
            "language" => "en",
            "loc_name_canonical" => "United States",
            "keys" => [
                "average page rpm adsense",
                "adsense blank ads how long",
                "leads and prospects",
            ],
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\BulkKeywordSearchVolume\LiveDataRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForDomainLive()
    {
        $data = [
            "domain" => "webtures.com",
            "country_code" => "TR",
            "language" => "tr",
            "sort_by" => "sv",
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain\LiveDataRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForKeywordsLive()
    {
        $data = [
            [
                "language" => "en",
                "loc_name_canonical" => "United States",
                "keys" => [
                    "seo",
                    "seo agency",
                    "seo marketing",
                ],
            ],
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForKeywords\LiveDataRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForCategoryLive()
    {
        $data = [
            [
                "language" => "en",
                "loc_name_canonical" => "United States",
                "category_id" => 13895,
            ],
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForCategory\LiveDataRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficForKeywordsLive()
    {
        $data = [
            [
                "language" => "en",
                "loc_name_canonical" => "United States",
                "bid" => 100.00,
                "match" => "exact",
                "keys" => [
                    "seo marketing",
                ],
            ],
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficForKeywords\LiveDataRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficByPlatformsLive()
    {
        $data = [
            [
                "language" => "en",
                "loc_name_canonical" => "United States",
                "bid" => 100.00,
                "match" => "exact",
                "keys" => [
                    "seo marketing",
                ],
            ],
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms\LiveDataRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    #endregion


    #region Set Task Tests

    /** @test */
    public function testSearchVolumeForKeywordSetTask()
    {
        $data["your post_id parameter here"] = [
            "language" => "en",
            "loc_name_canonical" => "United States",
            "key" => "best seo",
            "pingback_url" => 'https://your-server.com/your_pingback_url.php?task_id=$task_id&post_id=$post_id',
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword\SetTaskRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testBulkKeywordSearchVolumeSetTask()
    {
        $data["your post_id parameter here"] = [
            "language" => "en",
            "loc_name_canonical" => "United States",
            "keys" => [
                "repeat customers",
                "best sleeping wireless earbuds",
                "staniel cay day trip",
                "iota hoodie",
                "monero hat",
            ],
            "pingback_url" => 'https://your-server.com/your_pingback_url.php?task_id=$task_id&post_id=$post_id',
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\BulkKeywordSearchVolume\SetTaskRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForDomainSetTask()
    {
        $data["your post_id parameter here"] = [
            "domain" => "ranksonic.com",
            "country_code" => "us",
            "language" => "en",
            "sort_by" => "relevance",
            "pingback_url" => 'https://your-server.com/your_pingback_url.php?task_id=$task_id&post_id=$post_id'
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain\SetTaskRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForKeywordsSetTask()
    {
        $data["your post_id parameter here"] = [
            "language" => "en",
            "loc_name_canonical" => "United States",
            "keys" => [
                "online rank checker",
                "best seo",
            ],
            "pingback_url" => 'https://your-server.com/your_pingback_url.php?task_id=$task_id&post_id=$post_id',
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForKeywords\SetTaskRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForCategorySetTask()
    {
        $data["your post_id parameter here"] = [
            "language" => "en",
            "loc_name_canonical" => "United States",
            "category_id" => 13895,
            "pingback_url" => 'https://your-server.com/your_pingback_url.php?task_id=$task_id&post_id=$post_id'
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForCategory\SetTaskRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficForKeywordsSetTask()
    {
        $data["your post_id parameter here"] = [
            "language" => "en",
            "loc_name_canonical" => "United States",
            "bid" => 999.0,
            "match" => "exact",
            "keys" => [
                "online rank checker",
                "best seo",
            ],
            "pingback_url" => 'https://your-server.com/your_pingback_url.php?task_id=$task_id&post_id=$post_id',
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficForKeywords\SetTaskRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficByPlatformsSetTask()
    {
        $data["your post_id parameter here"] = [
            "language" => "en",
            "loc_name_canonical" => "United States",
            "bid" => 999.0,
            "match" => "exact",
            "keys" => [
                "online rank checker",
                "best seo",
            ],
            "pingback_url" => 'https://your-server.com/your_pingback_url.php?task_id=$task_id&post_id=$post_id',
        ];

        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms\SetTaskRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    #endregion


    #region Get Completed Tasks Tests

    /** @test */
    public function testSearchVolumeForKeywordGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword\GetCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testBulkKeywordSearchVolumeGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\BulkKeywordSearchVolume\GetCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForDomainGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain\GetCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForKeywordsGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForKeywords\GetCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForCategoryGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForCategory\GetCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficForKeywordsGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficForKeywords\GetCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficByPlatformsGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms\GetCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    #endregion


    #region Get Results By TaskId Tests

    private function getTaskId(string $fn)
    {
        $class = str_replace('test', '', $fn);
        $class = str_replace('GetResultsByTaskId', '', $class);
        $class = "BoolXY\\DataForSEO\\Api\\KeywordsData\\Requests\\" . $class . "\\GetCompletedTasksRequest";

        do {
            $result = $this->dfs
                ->setRequest($class::create())
                ->get();
        } while (!isset($result->results[0]));

        return $result->results[0]->task_id;
    }

    /** @test */
    public function testSearchVolumeForKeywordGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword\GetResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testBulkKeywordSearchVolumeGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\BulkKeywordSearchVolume\GetResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForDomainGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain\GetResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForKeywordsGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForKeywords\GetResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForCategoryGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForCategory\GetResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficForKeywordsGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficForKeywords\GetResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficByPlatformsGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms\GetResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    #endregion
}
