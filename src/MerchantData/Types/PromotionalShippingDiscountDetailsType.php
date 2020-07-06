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
 * @property \maiorADV\eBaySDK\MerchantData\Enums\DiscountNameCodeType $DiscountName
 * @property \maiorADV\eBaySDK\MerchantData\Types\AmountType $ShippingCost
 * @property \maiorADV\eBaySDK\MerchantData\Types\AmountType $OrderAmount
 * @property integer $ItemCount
 */
class PromotionalShippingDiscountDetailsType extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DiscountName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountName'
        ],
        'ShippingCost' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingCost'
        ],
        'OrderAmount' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderAmount'
        ],
        'ItemCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCount'
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
