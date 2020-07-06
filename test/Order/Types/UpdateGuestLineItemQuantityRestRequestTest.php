<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\Order\Types;

use maiorADV\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestRequest;

class UpdateGuestLineItemQuantityRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateGuestLineItemQuantityRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestRequest', $this->obj);
    }

    public function testExtendsUpdateQuantity()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Order\Types\UpdateQuantity', $this->obj);
    }
}
