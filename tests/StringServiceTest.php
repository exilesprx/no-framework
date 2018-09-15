<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Services\StringService;

class StringServiceTest extends TestCase
{
    protected $service;

    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->service = new StringService();
    }

    public function testItUpperCasesWords() : void
    {
        $message = $this->service->upperCaseWords("hello world");

        $this->assertEquals($message, "Hello World");
    }

    public function testItUpperCasesAllCharacters() : void
    {
        $message = $this->service->upperAllCharacters("hello world");

        $this->assertEquals($message, "HELLO WORLD");
    }
}