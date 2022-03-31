<?php

namespace Gajosu\EcLaravelValidator\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Gajosu\EcLaravelValidator\EcValidatorServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [EcValidatorServiceProvider::class];
    }
}
