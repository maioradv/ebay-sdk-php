<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\MerchantData\Types;

use maiorADV\eBaySDK\MerchantData\Types\TaxIdentifierAttributeType;

class TaxIdentifierAttributeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TaxIdentifierAttributeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\MerchantData\Types\TaxIdentifierAttributeType', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Types\StringType', $this->obj);
    }
}
