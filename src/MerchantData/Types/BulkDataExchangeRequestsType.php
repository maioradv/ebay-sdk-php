<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\MerchantData\Types;

/**
 *
 * @property \maiorADV\eBaySDK\MerchantData\Types\MerchantDataRequestHeaderType $Header
 * @property \maiorADV\eBaySDK\MerchantData\Types\AddFixedPriceItemRequestType[] $AddFixedPriceItemRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\AddItemRequestType[] $AddItemRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\EndFixedPriceItemRequestType[] $EndFixedPriceItemRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\EndItemRequestType[] $EndItemRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\OrderAckRequestType[] $OrderAckRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\RelistFixedPriceItemRequestType[] $RelistFixedPriceItemRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\RelistItemRequestType[] $RelistItemRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\ReviseFixedPriceItemRequestType[] $ReviseFixedPriceItemRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\ReviseInventoryStatusRequestType[] $ReviseInventoryStatusRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\ReviseItemRequestType[] $ReviseItemRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoRequestType[] $SetShipmentTrackingInfoRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesRequestType[] $UploadSiteHostedPicturesRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemRequestType[] $VerifyAddFixedPriceItemRequest
 * @property \maiorADV\eBaySDK\MerchantData\Types\VerifyAddItemRequestType[] $VerifyAddItemRequest
 */
class BulkDataExchangeRequestsType extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Header' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\MerchantDataRequestHeaderType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Header'
        ],
        'AddFixedPriceItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\AddFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AddFixedPriceItemRequest'
        ],
        'AddItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\AddItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AddItemRequest'
        ],
        'EndFixedPriceItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\EndFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EndFixedPriceItemRequest'
        ],
        'EndItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\EndItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EndItemRequest'
        ],
        'OrderAckRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\OrderAckRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'OrderAckRequest'
        ],
        'RelistFixedPriceItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\RelistFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RelistFixedPriceItemRequest'
        ],
        'RelistItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\RelistItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RelistItemRequest'
        ],
        'ReviseFixedPriceItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\ReviseFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseFixedPriceItemRequest'
        ],
        'ReviseInventoryStatusRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\ReviseInventoryStatusRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseInventoryStatusRequest'
        ],
        'ReviseItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\ReviseItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseItemRequest'
        ],
        'SetShipmentTrackingInfoRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SetShipmentTrackingInfoRequest'
        ],
        'UploadSiteHostedPicturesRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'UploadSiteHostedPicturesRequest'
        ],
        'VerifyAddFixedPriceItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddFixedPriceItemRequest'
        ],
        'VerifyAddItemRequest' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\VerifyAddItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddItemRequest'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'BulkDataExchangeRequests';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
