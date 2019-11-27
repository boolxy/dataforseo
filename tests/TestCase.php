<?php

namespace BoolXY\DataForSEO\Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{

    protected $base_uri;

    protected $user;

    protected $pass;

    protected function setUp(): void
    {
        parent::setUp();

        $this->base_uri = getenv("DFS_BASE_URI");
        $this->user = getenv("DFS_USER");
        $this->pass = getenv("DFS_PASS");
    }

}