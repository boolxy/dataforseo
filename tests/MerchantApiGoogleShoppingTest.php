<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\GetCompletedTasksRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\GetHTMLCompletedTasksRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\GetHTMLResultsByTaskIdRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\GetProductSpecificationCompletedTasksRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\GetProductSpecificationResultsByTaskIdRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\GetResultsByTaskIdRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\GetSellersAdURLRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\GetSellersCompletedTasksRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\GetSellersResultsByTaskIdRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\SettingHTMLTasksRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\SettingProductSpecificationTasksRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\SettingSellersTasksRequest;
use BoolXY\DataForSEO\Requests\Merchant\GoogleShopping\SettingTasksRequest;
use BoolXY\DataForSEO\DataForSEO;

class MerchantApiGoogleShoppingTest extends TestCase
{
    private $dfs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dfs = DataForSEO::create($this->client);
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

    /** @test */
    public function testSettingHTMLTasks()
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
            ->setRequest(SettingHTMLTasksRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetHTMLCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(GetHTMLCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetHTMLResultsByTaskId()
    {
        $data = [
            "task_id" => $this->getHTMLTaskId(),
        ];

        $result = $this->dfs
            ->setRequest(GetHTMLResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /**
     * @return mixed
     */
    private function getHTMLTaskId()
    {
        do {
            $result = $this->dfs
                ->setRequest(GetHTMLCompletedTasksRequest::create())
                ->get();
        } while (count($result->results) < 1);

        return $result->results[0];
    }

    /** @test */
    public function testSettingSellersTasks()
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
            ->setRequest(SettingSellersTasksRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetSellersCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(GetSellersCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetSellersResultsByTaskId()
    {
        $data = [
            "task_id" => $this->getSellersTaskId(),
        ];

        $result = $this->dfs
            ->setRequest(GetSellersResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /**
     * @return mixed
     */
    private function getSellersTaskId()
    {
        do {
            $result = $this->dfs
                ->setRequest(GetSellersCompletedTasksRequest::create())
                ->get();
        } while (count($result->results) < 1);

        return $result->results[0];
    }

    /** @test */
    public function testSettingProductSpecificationTasks()
    {
        $data = [];

        $my_unq_id = mt_rand(0, 30000000);
        $data[$my_unq_id] = [
            "se_id" => 2933,
            "loc_name_canonical" => "London,England,United Kingdom",
            "product_id" => "1583419775492369734",
        ];

        $result = $this->dfs
            ->setRequest(SettingProductSpecificationTasksRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetProductSpecificationCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(GetProductSpecificationCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetProductSpecificationResultsByTaskId()
    {
        $data = [
            "task_id" => $this->getProductTaskId(),
        ];

        $result = $this->dfs
            ->setRequest(GetProductSpecificationResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /**
     * @return mixed
     */
    private function getProductTaskId()
    {
        do {
            $result = $this->dfs
                ->setRequest(GetProductSpecificationCompletedTasksRequest::create())
                ->get();
        } while (count($result->results) < 1);

        return $result->results[0];
    }

    /** @test */
    public function testGetSellersAdURL()
    {
        $data = [
            "ad_aclk" => "DChcSEwjRxPWhsLnjAhUVHisKHc4YABABGgJzZg",
        ];

        $result = $this->dfs
            ->setRequest(GetSellersAdURLRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }
}
