<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\Order\Enums;

use maiorADV\eBaySDK\Order\Enums\PaymentMethodTypeEnum;

class PaymentMethodTypeEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentMethodTypeEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Order\Enums\PaymentMethodTypeEnum', $this->obj);
    }
}
