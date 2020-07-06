<?php
require __DIR__ . '/artifacts/ebay-sdk-php.phar';

$sdk = new \maiorADV\eBaySDK\Sdk();

$trading = new \maiorADV\eBaySDK\Trading\Services\TradingService([
    'siteId'      => 0,
    'credentials' => [
        'appId'  => 'secret',
        'certId' => 'secret',
        'devId'  => 'secret'
    ]
]);

echo 'Version=' . \maiorADV\eBaySDK\Sdk::VERSION;
