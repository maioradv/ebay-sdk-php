<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Trading\Types;

/**
 *
 * @property integer $ActiveAuctionCount
 * @property integer $AuctionSellingCount
 * @property integer $AuctionBidCount
 * @property \maiorADV\eBaySDK\Trading\Types\AmountType $TotalAuctionSellingValue
 * @property integer $TotalSoldCount
 * @property \maiorADV\eBaySDK\Trading\Types\AmountType $TotalSoldValue
 * @property integer $SoldDurationInDays
 * @property integer $ClassifiedAdCount
 * @property integer $TotalLeadCount
 * @property integer $ClassifiedAdOfferCount
 * @property integer $TotalListingsWithLeads
 * @property integer $QuantityLimitRemaining
 * @property \maiorADV\eBaySDK\Trading\Types\AmountType $AmountLimitRemaining
 */
class MyeBaySellingSummaryType extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ActiveAuctionCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActiveAuctionCount'
        ],
        'AuctionSellingCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AuctionSellingCount'
        ],
        'AuctionBidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AuctionBidCount'
        ],
        'TotalAuctionSellingValue' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalAuctionSellingValue'
        ],
        'TotalSoldCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalSoldCount'
        ],
        'TotalSoldValue' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalSoldValue'
        ],
        'SoldDurationInDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldDurationInDays'
        ],
        'ClassifiedAdCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCount'
        ],
        'TotalLeadCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalLeadCount'
        ],
        'ClassifiedAdOfferCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdOfferCount'
        ],
        'TotalListingsWithLeads' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalListingsWithLeads'
        ],
        'QuantityLimitRemaining' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityLimitRemaining'
        ],
        'AmountLimitRemaining' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountLimitRemaining'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
