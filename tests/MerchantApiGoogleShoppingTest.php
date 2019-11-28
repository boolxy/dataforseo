<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\Api\Merchant\Requests\GoogleShopping\GetCompletedTasksRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\GoogleShopping\GetResultsByTaskIdRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\GoogleShopping\SettingTasksRequest;
use BoolXY\DataForSEO\DataForSEO;
use BoolXY\DataForSEO\Apis;

class MerchantApiGoogleShoppingTest extends TestCase
{
    private $dfs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dfs = DataForSEO::create($this->base_uri, $this->user, $this->pass)
            ->setApi(Apis::MERCHANT_API);
    }

    /** @test */
    public function testSettingTasks()
    {
        $data = [];

        $my_unq_id = mt_rand(0, 30000000);
        $data[$my_unq_id] = [
            "priority" => 1,
            "url" => "https://www.google.co.uk/search" .
                "?q=shoes&tbm=shop&tbs=vw:l&hl=en&gl=GB&uule=w+CAIQIFISCXXeIa8LoNhHEZkq1d1aOpZS",
        ];

        $my_unq_id = mt_rand(0, 30000000);
        $data[$my_unq_id] = [
            "priority" => 1,
            "se_name" => "google.co.uk shopping",
            "se_language" => "English",
            "loc_name_canonical" => "London,England,United Kingdom",
            "key" => mb_convert_encoding("shoes", "UTF-8"),
        ];

        $my_unq_id = mt_rand(0, 30000000);
        $data[$my_unq_id] = [
            "priority" => 1,
            "se_id" => 2933,
            "loc_id" => 1006886,
            "key_id" => 68415,
        ];

        $result = $this->dfs
            ->setRequest(SettingTasksRequest::create($data))
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
            "task_id" => $this->getTaskId(),
        ];

        $result = $this->dfs
            ->setRequest(GetResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /**
     * @return mixed
     */
    private function getTaskId()
    {
        do {
            $result = $this->dfs
                ->setRequest(GetCompletedTasksRequest::create())
                ->get();
        } while (count($result->results) < 1);

        return $result->results[0];
    }
}
