<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\ResolutionCaseManagement\Types;

use maiorADV\eBaySDK\ResolutionCaseManagement\Types\ProvideReturnInfoRequest;

class ProvideReturnInfoRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProvideReturnInfoRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\ResolutionCaseManagement\Types\ProvideReturnInfoRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\ResolutionCaseManagement\Types\BaseRequest', $this->obj);
    }
}
