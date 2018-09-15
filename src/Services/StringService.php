<?php

namespace App\Services;

class StringService
{
    public function upperCaseWords(string $input) : string
    {
        return ucwords($input);
    }

    public function upperAllCharacters(string $input) : string
    {
        return strtoupper($input);
    }
}