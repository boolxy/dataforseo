<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\Api\Merchant\Requests\Amazon\GetASINCompletedTasksRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\Amazon\GetASINResultsByTaskIdRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\Amazon\GetCompletedTasksRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\Amazon\GetHTMLCompletedTasksRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\Amazon\GetHTMLResultsByTaskIdRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\Amazon\GetResultsByTaskIdRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\Amazon\SettingASINTasksRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\Amazon\SettingHTMLTasksRequest;
use BoolXY\DataForSEO\Api\Merchant\Requests\Amazon\SettingTasksRequest;
use BoolXY\DataForSEO\DataForSEO;
use BoolXY\DataForSEO\Apis;

class MerchantApiAmazonTest extends TestCase
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
        $post_array[$my_unq_id] = [
            "priority" => 1,
            "url" => "https://www.amazon.com/s/?field-keywords=shoes&language=en_US",
        ];

        $my_unq_id = mt_rand(0, 30000000);
        $post_array[$my_unq_id] = [
            "priority" => 1,
            "se_name" => "amazon.com",
            "se_language" => "English",
            "key" => mb_convert_encoding("shoes", "UTF-8"),
        ];

        $my_unq_id = mt_rand(0, 30000000);
        $post_array[$my_unq_id] = [
            "priority" => 1,
            "se_id" => 2897,
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
        $post_array[$my_unq_id] = [
            "priority" => 1,
            "url" => "https://www.amazon.com/s/?field-keywords=shoes&language=en_US",
        ];

        $my_unq_id = mt_rand(0, 30000000);
        $post_array[$my_unq_id] = [
            "priority" => 1,
            "se_name" => "amazon.com",
            "se_language" => "English",
            "key" => mb_convert_encoding("shoes", "UTF-8"),
        ];

        $my_unq_id = mt_rand(0, 30000000);
        $post_array[$my_unq_id] = [
            "priority" => 1,
            "se_id" => 2897,
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
    public function testSettingASINTasks()
    {
        $data = [];

        $my_unq_id = mt_rand(0, 30000000);
        $data[$my_unq_id] = [
            "priority" => 1,
            "se_id" => 2897,
            "product_id" => "B07F9M8CG3",
        ];

        $result = $this->dfs
            ->setRequest(SettingASINTasksRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetASINCompletedTasks()
    {
        $result = $this->dfs
            ->setRequest(GetASINCompletedTasksRequest::create())
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /** @test */
    public function testGetASINResultsByTaskId()
    {
        $data = [
            "task_id" => $this->getASINTaskId(),
        ];

        $result = $this->dfs
            ->setRequest(GetASINResultsByTaskIdRequest::create($data))
            ->get();

        $this->assertEquals("ok", $result->status);
    }

    /**
     * @return mixed
     */
    private function getASINTaskId()
    {
        do {
            $result = $this->dfs
                ->setRequest(GetASINCompletedTasksRequest::create())
                ->get();
        } while (count($result->results) < 1);

        return $result->results[0];
    }
}
