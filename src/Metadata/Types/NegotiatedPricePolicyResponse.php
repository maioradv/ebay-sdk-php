<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Metadata\Types;

/**
 *
 * @property \maiorADV\eBaySDK\Metadata\Types\NegotiatedPricePolicy[] $negotiatedPricePolicies
 * @property \maiorADV\eBaySDK\Metadata\Types\ErrorDetailV3[] $warnings
 */
class NegotiatedPricePolicyResponse extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'negotiatedPricePolicies' => [
            'type' => 'maiorADV\eBaySDK\Metadata\Types\NegotiatedPricePolicy',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'negotiatedPricePolicies'
        ],
        'warnings' => [
            'type' => 'maiorADV\eBaySDK\Metadata\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
