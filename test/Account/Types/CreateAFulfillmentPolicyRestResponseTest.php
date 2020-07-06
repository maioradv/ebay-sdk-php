<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\Account\Types;

use maiorADV\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse;

class CreateAFulfillmentPolicyRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateAFulfillmentPolicyRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse', $this->obj);
    }

    public function testExtendsSetFulfillmentPolicyResponse()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Account\Types\SetFulfillmentPolicyResponse', $this->obj);
    }
}
