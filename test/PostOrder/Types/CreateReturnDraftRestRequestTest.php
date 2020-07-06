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

use maiorADV\eBaySDK\PostOrder\Types\CreateReturnDraftRestRequest;

class CreateReturnDraftRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateReturnDraftRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\PostOrder\Types\CreateReturnDraftRestRequest', $this->obj);
    }

    public function testExtendsSetReturnCreationSessionRequest()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\PostOrder\Types\SetReturnCreationSessionRequest', $this->obj);
    }
}
