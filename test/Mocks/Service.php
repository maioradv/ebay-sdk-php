<?php
namespace maiorADV\eBaySDK\Test\Mocks;

class Service extends \maiorADV\eBaySDK\Test\Mocks\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId' => '',
                    'certId' => '',
                    'devId' => ''
                ]
            ]
        );
    }

    public function foo(\maiorADV\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\maiorADV\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }

    public function bar(\maiorADV\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\maiorADV\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
