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

use maiorADV\eBaySDK\PostOrder\Types\GetStoreCategoriesRestResponse;

class GetStoreCategoriesRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetStoreCategoriesRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\PostOrder\Types\GetStoreCategoriesRestResponse', $this->obj);
    }

    public function testExtendsGetStoreCategoryResponse()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\PostOrder\Types\GetStoreCategoryResponse', $this->obj);
    }
}
