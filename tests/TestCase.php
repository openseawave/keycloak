<?php

namespace OpenSeaWave\Keycloak\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use OpenSeaWave\Keycloak\KeycloakServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'OpenSeaWave\\Keycloak\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            KeycloakServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_keycloak_table.php.stub';
        $migration->up();
        */
    }
}
