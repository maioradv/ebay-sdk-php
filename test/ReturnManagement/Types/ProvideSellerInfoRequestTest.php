<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\ReturnManagement\Types;

use maiorADV\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest;

class ProvideSellerInfoRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProvideSellerInfoRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\ReturnManagement\Types\BaseRequest', $this->obj);
    }
}
