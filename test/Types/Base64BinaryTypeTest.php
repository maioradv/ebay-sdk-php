<?php
namespace maiorADV\eBaySDK\Types\Test;

use maiorADV\eBaySDK\Types\Base64BinaryType;

class Base64BinaryTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Base64BinaryType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Types\Base64BinaryType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 'foo';
        $this->assertEquals('foo', $this->obj->value);
        $this->assertInternalType('string', $this->obj->value);
    }
}
