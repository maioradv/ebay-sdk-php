<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Test\Inventory\Types;

use maiorADV\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest;

class BulkMigrateListingsRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BulkMigrateListingsRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest', $this->obj);
    }

    public function testExtendsBulkMigrateListing()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Inventory\Types\BulkMigrateListing', $this->obj);
    }
}
