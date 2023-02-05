<?php

namespace IvanLisitsa\TestPackage;

class TestService
{
    public function run(string $string)
    {
        sleep(1);
        return $string;
    }
}