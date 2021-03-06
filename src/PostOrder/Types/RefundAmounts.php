<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\PostOrder\Types;

/**
 *
 * @property \maiorADV\eBaySDK\PostOrder\Types\Amount $buyerFinalAcceptRefundAmt
 * @property \maiorADV\eBaySDK\PostOrder\Types\Amount $buyerInitExpectRefundAmt
 * @property \maiorADV\eBaySDK\PostOrder\Types\Amount $internationalRefundAmount
 * @property \maiorADV\eBaySDK\PostOrder\Types\Amount $refundAmount
 */
class RefundAmounts extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerFinalAcceptRefundAmt' => [
            'type' => 'maiorADV\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerFinalAcceptRefundAmt'
        ],
        'buyerInitExpectRefundAmt' => [
            'type' => 'maiorADV\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerInitExpectRefundAmt'
        ],
        'internationalRefundAmount' => [
            'type' => 'maiorADV\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'internationalRefundAmount'
        ],
        'refundAmount' => [
            'type' => 'maiorADV\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundAmount'
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
