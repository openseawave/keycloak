# openseawave/keycloak

[![Latest Version on Packagist](https://img.shields.io/packagist/v/openseawave/keycloak.svg?style=flat-square)](https://packagist.org/packages/openseawave/keycloak)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/openseawave/keycloak/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/openseawave/keycloak/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/openseawave/keycloak/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/openseawave/keycloak/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/openseawave/keycloak.svg?style=flat-square)](https://packagist.org/packages/openseawave/keycloak)

The keyclock plugin provides a simple way to integrate Keycloak admin api with full support for Laravel framework.

## Installation

You can install the package via composer:

```bash
composer require openseawave/keycloak
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="keycloak-config"
```

## Usage

you can use it like this:

```php
use Openseawave\Keycloak\Keycloak;

$keycloak = new Keycloak(
    baseUrl: 'http://localhost:8080',
    username: 'admin',
    password: 'admin',
    grantType: 'password',
    clientId: 'admin-cli',
);

$keycloak->getUsers();
```

Also you can use it using Laravel Facade:

```php
use Openseawave\Keycloak\Facades\Keycloak;
Keycloak::getUsers();
```

## Testing

```bash
composer test
```
## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Omar Haris](https://github.com/omar-haris)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
