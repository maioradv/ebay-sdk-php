<?php
namespace maiorADV\eBaySDK\Test;

use maiorADV\eBaySDK\Sdk;

class SdkTest extends \PHPUnit_Framework_TestCase
{
    private $sdk;

    protected function setUp()
    {
        $this->sdk = new Sdk([
            'apiVersion' => '',
            'appId' => '',
            'authToken' => '',
            'authorization' => '',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId' => '',
            'ruName' => '',
            'siteId' => 0
        ]);
    }

    public function testCanCreateServices()
    {
        $s = new Sdk([
            'appId' => '123',
            'apiVersion' => '999',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'Finding' => [
                'appId' => '321'
            ],
            'Trading' => [
                'siteId' => 0
            ]
        ]);
        $f = $s->createFinding();
        $t = $s->createTrading();

        $this->assertEquals('321', $f->getConfig('appId'));
        $this->assertEquals('999', $f->getConfig('apiVersion'));

        $this->assertEquals('123', $t->getConfig('appId'));
        $this->assertEquals('999', $t->getConfig('apiVersion'));
        $this->assertEquals(0, $t->getConfig('siteId'));

        /**
         * Options passed in via the create methods overwrite existing.
         */
        $t = $s->createTrading([
            'appId' => '111',
            'apiVersion' => '222',
            'siteId' => 333
        ]);

        $this->assertEquals('111', $t->getConfig('appId'));
        $this->assertEquals('222', $t->getConfig('apiVersion'));
        $this->assertEquals(333, $t->getConfig('siteId'));
    }

    public function testCallingUnknownMethod()
    {
        $this->setExpectedException('\BadMethodCallException', 'Unknown method: foo');

        $this->sdk->foo();
    }

    public function testCanCreateOAuth()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\OAuth\Services\OAuthService', $this->sdk->createOAuth());
    }

    public function testCanCreateAccount()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Account\Services\AccountService', $this->sdk->createAccount());
    }

    public function testCanCreateAnalytics()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Analytics\Services\AnalyticsService', $this->sdk->createAnalytics());
    }

    public function testCanCreateBrowse()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Browse\Services\BrowseService', $this->sdk->createBrowse());
    }

    public function testCanCreateBulkDataExchange()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService', $this->sdk->createBulkDataExchange());
    }

    public function testCanCreateBusinessPoliciesManagement()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService', $this->sdk->createBusinessPoliciesManagement());
    }

    public function testCanCreateFeedback()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Feedback\Services\FeedbackService', $this->sdk->createFeedback());
    }

    public function testCanCreateFileTransfer()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\FileTransfer\Services\FileTransferService', $this->sdk->createFileTransfer());
    }

    public function testCanCreateFinding()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Finding\Services\FindingService', $this->sdk->createFinding());
    }

    public function testCanCreateFulfillment()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Fulfillment\Services\FulfillmentService', $this->sdk->createFulfillment());
    }

    public function testCanCreateHalfFinding()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\HalfFinding\Services\HalfFindingService', $this->sdk->createHalfFinding());
    }

    public function testCanCreateInventory()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Inventory\Services\InventoryService', $this->sdk->createInventory());
    }

    public function testCanCreateMarketing()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Marketing\Services\MarketingService', $this->sdk->createMarketing());
    }

    public function testCanCreateMetadata()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Metadata\Services\MetadataService', $this->sdk->createMetadata());
    }

    public function testCanCreateMerchandising()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Merchandising\Services\MerchandisingService', $this->sdk->createMerchandising());
    }

    public function testCanCreateOrder()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Order\Services\OrderService', $this->sdk->createOrder());
    }

    public function testCanCreatePostOrder()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\PostOrder\Services\PostOrderService', $this->sdk->createPostOrder());
    }

    public function testCanCreateProduct()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Product\Services\ProductService', $this->sdk->createProduct());
    }

    public function testCanCreateProductMetadata()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\ProductMetadata\Services\ProductMetadataService', $this->sdk->createProductMetadata());
    }

    public function testCanCreateRelatedItemsManagement()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementService', $this->sdk->createRelatedItemsManagement());
    }

    public function testCanCreateResolutionCaseManagement()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService', $this->sdk->createResolutionCaseManagement());
    }

    public function testCanCreateReturnManagement()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\ReturnManagement\Services\ReturnManagementService', $this->sdk->createReturnManagement());
    }

    public function testCanCreateShopping()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Shopping\Services\ShoppingService', $this->sdk->createShopping());
    }

    public function testCanCreateTrading()
    {
        $this->assertInstanceOf('\maiorADV\eBaySDK\Trading\Services\TradingService', $this->sdk->createTrading());
    }
}
