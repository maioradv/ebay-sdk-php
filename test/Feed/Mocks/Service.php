<?php
namespace maiorADV\eBaySDK\Test\Feed\Mocks;

use maiorADV\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \maiorADV\eBaySDK\Feed\Services\FeedBaseService
{
    protected static $operations = [
        'testOperation' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\maiorADV\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync('testOperation', new ComplexClass())->wait();
    }
}
