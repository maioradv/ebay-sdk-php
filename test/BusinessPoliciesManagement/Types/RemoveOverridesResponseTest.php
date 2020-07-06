<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\BusinessPoliciesManagement\Types;

use maiorADV\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse;

class RemoveOverridesResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RemoveOverridesResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\BusinessPoliciesManagement\Types\BaseResponse', $this->obj);
    }
}
