<?php

namespace Fc9\Lang\Tests;

use Orchestra\Testbench\TestCase;
use Fc9\Lang\LangServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LangServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
