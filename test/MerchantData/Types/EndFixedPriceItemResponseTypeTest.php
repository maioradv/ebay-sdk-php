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

use maiorADV\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType;

class EndFixedPriceItemResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EndFixedPriceItemResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\MerchantData\Types\AbstractResponseType', $this->obj);
    }
}
