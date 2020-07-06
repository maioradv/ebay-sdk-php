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

use maiorADV\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest;

class ActivateRecurringJobRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ActivateRecurringJobRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }
}
