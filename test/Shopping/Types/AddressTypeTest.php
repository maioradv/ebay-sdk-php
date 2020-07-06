<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\Shopping\Types;

use maiorADV\eBaySDK\Shopping\Types\AddressType;

class AddressTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Shopping\Types\AddressType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Types\BaseType', $this->obj);
    }
}
