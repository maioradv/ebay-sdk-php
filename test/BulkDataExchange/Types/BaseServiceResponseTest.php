<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\BulkDataExchange\Types;

use maiorADV\eBaySDK\BulkDataExchange\Types\BaseServiceResponse;

class BaseServiceResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BaseServiceResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\BulkDataExchange\Types\BaseServiceResponse', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Types\BaseType', $this->obj);
    }
}
