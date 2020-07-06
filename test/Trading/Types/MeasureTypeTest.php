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

use maiorADV\eBaySDK\Trading\Types\MeasureType;

class MeasureTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MeasureType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Trading\Types\MeasureType', $this->obj);
    }

    public function testExtendsDecimalType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Types\DecimalType', $this->obj);
    }
}
