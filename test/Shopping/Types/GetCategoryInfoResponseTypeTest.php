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

use maiorADV\eBaySDK\Shopping\Types\GetCategoryInfoResponseType;

class GetCategoryInfoResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetCategoryInfoResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Shopping\Types\GetCategoryInfoResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Shopping\Types\AbstractResponseType', $this->obj);
    }
}
