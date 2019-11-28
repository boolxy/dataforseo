<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\DataForSEO;
use BoolXY\DataForSEO\Apis;

use BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword\LiveDataRequest as SVFK_LiveDataRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\BulkKeywordSearchVolume\LiveDataRequest as BKSV_LiveDataRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain\LiveDataRequest as KFD_LiveDataRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForKeywords\LiveDataRequest as KFK_LiveDataRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForCategory\LiveDataRequest as KFC_LiveDataRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficForKeywords\LiveDataRequest as ATFK_LiveDataRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms\LiveDataRequest as ATBP_LiveDataRequest;

use BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword\SetTaskRequest as SVFK_SetTaskRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\BulkKeywordSearchVolume\SetTaskRequest as BKSV_SetTaskRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain\SetTaskRequest as KFD_SetTaskRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForKeywords\SetTaskRequest as KFK_SetTaskRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForCategory\SetTaskRequest as KFC_SetTaskRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficForKeywords\SetTaskRequest as ATFK_SetTaskRequest;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms\SetTaskRequest as ATBP_SetTaskRequest;

use BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword\GetCompletedTasksRequest as SVFK_GCT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\BulkKeywordSearchVolume\GetCompletedTasksRequest as BKSV_GCT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain\GetCompletedTasksRequest as KFD_GCT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForKeywords\GetCompletedTasksRequest as KFK_GCT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForCategory\GetCompletedTasksRequest as KFC_GCT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficForKeywords\GetCompletedTasksRequest as ATFK_GCT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms\GetCompletedTasksRequest as ATBP_GCT_Request;

use BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword\GetResultsByTaskIdRequest as SVFK_GRBT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\BulkKeywordSearchVolume\GetResultsByTaskIdRequest as BKSV_GRBT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForDomain\GetResultsByTaskIdRequest as KFD_GRBT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForKeywords\GetResultsByTaskIdRequest as KFK_GRBT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\KeywordsForCategory\GetResultsByTaskIdRequest as KFC_GRBT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficForKeywords\GetResultsByTaskIdRequest as ATFK_GRBT_Request;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\AdsTrafficByPlatforms\GetResultsByTaskIdRequest as ATBP_GRBT_Request;

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
            ->setRequest(SVFK_LiveDataRequest::create($data))
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
            ->setRequest(BKSV_LiveDataRequest::create($data))
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
            ->setRequest(KFD_LiveDataRequest::create($data))
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
            ->setRequest(KFK_LiveDataRequest::create($data))
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
            ->setRequest(KFC_LiveDataRequest::create($data))
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
            ->setRequest(ATFK_LiveDataRequest::create($data))
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
            ->setRequest(ATBP_LiveDataRequest::create($data))
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
            ->setRequest(SVFK_SetTaskRequest::create($data))
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
            ->setRequest(BKSV_SetTaskRequest::create($data))
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
            ->setRequest(KFD_SetTaskRequest::create($data))
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
            ->setRequest(KFK_SetTaskRequest::create($data))
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
            ->setRequest(KFC_SetTaskRequest::create($data))
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
            ->setRequest(ATFK_SetTaskRequest::create($data))
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
            ->setRequest(ATBP_SetTaskRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    #endregion


    #region Get Completed Tasks Tests

    /** @test */
    public function testSearchVolumeForKeywordGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(SVFK_GCT_Request::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testBulkKeywordSearchVolumeGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(BKSV_GCT_Request::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForDomainGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(KFD_GCT_Request::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForKeywordsGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(KFK_GCT_Request::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForCategoryGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(KFC_GCT_Request::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficForKeywordsGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(ATFK_GCT_Request::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficByPlatformsGetCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(ATBP_GCT_Request::create())
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
            ->setRequest(SVFK_GRBT_Request::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testBulkKeywordSearchVolumeGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(BKSV_GRBT_Request::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForDomainGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(KFD_GRBT_Request::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForKeywordsGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(KFK_GRBT_Request::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testKeywordsForCategoryGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(KFC_GRBT_Request::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficForKeywordsGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(ATFK_GRBT_Request::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testAdsTrafficByPlatformsGetResultsByTaskId()
    {
        $data = ["task_id" => $this->getTaskId(__FUNCTION__)];
        $result = $this->dfs
            ->setRequest(ATBP_GRBT_Request::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    #endregion
}
