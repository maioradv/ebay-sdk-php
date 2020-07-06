<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\ResolutionCaseManagement\Types;

use maiorADV\eBaySDK\ResolutionCaseManagement\Types\CaseUserType;

class CaseUserTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CaseUserType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\ResolutionCaseManagement\Types\CaseUserType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Types\BaseType', $this->obj);
    }
}
