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
 * @property \maiorADV\eBaySDK\Trading\Types\SearchStandingDashboardType $SearchStanding
 * @property \maiorADV\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType $SellerFeeDiscount
 * @property \maiorADV\eBaySDK\Trading\Types\PowerSellerDashboardType $PowerSellerStatus
 * @property \maiorADV\eBaySDK\Trading\Types\PolicyComplianceDashboardType $PolicyCompliance
 * @property \maiorADV\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType $BuyerSatisfaction
 * @property \maiorADV\eBaySDK\Trading\Types\SellerAccountDashboardType $SellerAccount
 * @property \maiorADV\eBaySDK\Trading\Types\PerformanceDashboardType[] $Performance
 */
class GetSellerDashboardResponseType extends \maiorADV\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SearchStanding' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\SearchStandingDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchStanding'
        ],
        'SellerFeeDiscount' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerFeeDiscount'
        ],
        'PowerSellerStatus' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\PowerSellerDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PowerSellerStatus'
        ],
        'PolicyCompliance' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\PolicyComplianceDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PolicyCompliance'
        ],
        'BuyerSatisfaction' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerSatisfaction'
        ],
        'SellerAccount' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\SellerAccountDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerAccount'
        ],
        'Performance' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\PerformanceDashboardType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Performance'
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
