<?php
namespace maiorADV\eBaySDK\Test\Trading\Mocks;

use maiorADV\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType;

class Service extends \maiorADV\eBaySDK\Trading\Services\TradingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new GeteBayOfficialTimeRequestType(),
            '\maiorADV\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
