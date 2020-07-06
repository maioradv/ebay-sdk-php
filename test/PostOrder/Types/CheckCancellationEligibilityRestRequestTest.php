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

use maiorADV\eBaySDK\PostOrder\Types\CheckCancellationEligibilityRestRequest;

class CheckCancellationEligibilityRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CheckCancellationEligibilityRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\PostOrder\Types\CheckCancellationEligibilityRestRequest', $this->obj);
    }

    public function testExtendsOrderEligibilityCheckInfo()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\PostOrder\Types\OrderEligibilityCheckInfo', $this->obj);
    }
}
