<?php
namespace maiorADV\eBaySDK\Test\Mocks;

class RestService extends \maiorADV\eBaySDK\Test\Mocks\BaseRestService
{
    protected static $operations =  [
        'foo' => [
            'method' => 'GET',
            'resource' => '',
            'responseClass' => '\maiorADV\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function foo(\maiorADV\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync('foo', $request)->wait();
    }
}
