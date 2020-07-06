<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\Trading\Types;

use maiorADV\eBaySDK\Trading\Types\AddTransactionConfirmationItemResponseType;

class AddTransactionConfirmationItemResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddTransactionConfirmationItemResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Trading\Types\AddTransactionConfirmationItemResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
