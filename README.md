# GreenHouse Provider for OAuth 2.0 Client

This package provides GreenHouse OAuth 2.0 support for the PHP League's [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client).

## Installation

To install, use composer:

```
composer require krdinesh/oauth2-greenhouse
```
## Usage

Usage is the same as The League's OAuth client, using `\League\OAuth2\Client\Provider\GreenHouse` as the provider.


### Managing Scopes

When creating your GreenHouse authorization URL, you can specify the state and scopes your application may authorize.

```php
$options = [
    'scope' => ['candidates.views','candidates.create','jobs.views'] // array or string
];

$authorizationUrl = $provider->getAuthorizationUrl($options);
```
## Testing

``` bash
$ ./vendor/bin/phpunit
```

## License

The MIT License (MIT). Please see [License File](https://github.com/krdinesh/oauth2-greenhouse/blob/master/LICENSE) for more information.
