<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\Finding\Types;

use maiorADV\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationResponse;

class GetSearchKeywordsRecommendationResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetSearchKeywordsRecommendationResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Finding\Types\BaseServiceResponse', $this->obj);
    }
}
