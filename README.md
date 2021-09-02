# (Unofficial) eBay API client (PHP) - Sell / Fulfillment

Code generated from eBay's Swagger file
using [allansun/openapi-code-generator](https://github.com/allansun/openapi-code-generator).

Generated code is well self-documented with proper PHPDoc annotations.

Please refer to [eBay's documentation](https://developer.ebay.com/api-docs/sell/account/overview.html) for detailed API
behaviour explanation.

## Installation

```shell
composer require bricre/ebay-api-sell-fulfillment
```

You will also need a [PSR-7 based client](https://www.php-fig.org/psr/psr-7/)
or [Symfony's HTTP Foundation based client](https://symfony.com/doc/current/http_client.html)

So either use Guzzle (or any other PSR-7 compatible clients)

```shell
composer require guzzlehttp/guzzle
```

**or** Symfony HTTP Client

```shell
composer require symfony/http-client
```

## Versioning

Starting from version v1.19.9, this project will match according eBay API's versioning. Should you found a matching 
version not being available. Please contact the author to generate against correct version.

## Usage

First you need to
configure [OpenAPI\RunTime\Client](https://github.com/allansun/openapi-runtime/blob/master/src/Client.php)
with required credentials and predefined responses types. You only need to do this once (or create a service in
your dependency injection).

```php
<?php
use Ebay\Sell\Account\ResponseTypes;
use OpenAPI\Runtime\DefaultResponseHandlerStack;
use OpenAPI\Runtime\Client;
use OpenAPI\Runtime\SimplePsrResponseHandlerStack;

Client::configure(
    new \GuzzleHttp\Client([
        'base_uri' => 'https://api.ebay.com/sell/fulfillment/v1/',
        'headers'=>[
            'Authorization'=> 'Bearer <accessToken>'
        ]
    ]),
    new SimplePsrResponseHandlerStack(new ResponseTypes())
);

```

Then in your business logic you can call API operations directly

```php
<?php
use Ebay\Sell\Account\Api\PaymentsProgram;
use Ebay\Sell\Account\Api\Program;

$programAPI = new Program();

$programs = $programAPI->getOptedIns();

$paymentsProgramAPI = new PaymentsProgram();

$response = $paymentsProgramAPI->get('marketplace_id','payments_programe_type');
```

## Author

* [Allan Sun](https://github.com/allansun) - *Initial work*

