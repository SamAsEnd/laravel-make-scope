<?php

namespace SamAsEnd\ScopeMake\Tests;

use SamAsEnd\ScopeMake\ScopeMakeCommandServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [ScopeMakeCommandServiceProvider::class];
    }
}