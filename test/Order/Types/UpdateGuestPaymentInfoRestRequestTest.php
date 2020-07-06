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

use maiorADV\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestRequest;

class UpdateGuestPaymentInfoRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateGuestPaymentInfoRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestRequest', $this->obj);
    }

    public function testExtendsUpdatePaymentInformation()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Order\Types\UpdatePaymentInformation', $this->obj);
    }
}
