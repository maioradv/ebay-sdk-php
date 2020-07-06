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

use maiorADV\eBaySDK\Trading\Types\GetSellingManagerSaleRecordRequestType;

class GetSellingManagerSaleRecordRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetSellingManagerSaleRecordRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Trading\Types\GetSellingManagerSaleRecordRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
