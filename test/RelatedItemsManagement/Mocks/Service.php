<?php
namespace maiorADV\eBaySDK\Test\RelatedItemsManagement\Mocks;

use maiorADV\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \maiorADV\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\maiorADV\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
