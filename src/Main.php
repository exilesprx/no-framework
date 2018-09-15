<?php

namespace App;

use App\Services\StringService;

class Main
{
    private $service;

    public function __construct()
    {
        $this->service = new StringService();
    }

    public function run() : void
    {
        echo $this->service->upperCaseWords("heLlO woRlD");

        echo $this->service->upperAllCharacters("hello world");
    }
}