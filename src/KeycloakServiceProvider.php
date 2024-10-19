<?php

namespace OpenSeaWave\Keycloak;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/**
 * KeycloakServiceProvider service provider class.
 *
 * @package OpenSeaWave\Keycloak
 * @author  Omar Haris
 */
class KeycloakServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('keycloak');
        $package->hasConfigFile();
    }
}
