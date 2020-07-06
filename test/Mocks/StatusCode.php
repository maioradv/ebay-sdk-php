<?php
namespace maiorADV\eBaySDK\Test\Mocks;

use maiorADV\eBaySDK\StatusCodeTrait;

class StatusCode
{
    use StatusCodeTrait;

    public function __construct($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
