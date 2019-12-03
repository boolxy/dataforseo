<?php

namespace BoolXY\DataForSEO\Tests;

use BoolXY\DataForSEO\Client;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected $client;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = new Client(
            getenv("DFS_BASE_URI"),
            getenv("DFS_USER"),
            getenv("DFS_PASS"),
        );
    }
}
