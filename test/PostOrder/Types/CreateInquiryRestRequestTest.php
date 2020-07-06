<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\PostOrder\Types;

use maiorADV\eBaySDK\PostOrder\Types\CreateInquiryRestRequest;

class CreateInquiryRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateInquiryRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\PostOrder\Types\CreateInquiryRestRequest', $this->obj);
    }

    public function testExtendsCreateInquiryRequest()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\PostOrder\Types\CreateInquiryRequest', $this->obj);
    }
}
