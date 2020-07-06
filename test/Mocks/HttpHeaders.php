<?php
namespace maiorADV\eBaySDK\Test\Mocks;

use maiorADV\eBaySDK\HttpHeadersTrait;

class HttpHeaders
{
    use HttpHeadersTrait;

    public function __construct(array $headers)
    {
        $this->setHeaders($headers);
    }
}
