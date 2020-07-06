<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property \maiorADV\eBaySDK\BusinessPoliciesManagement\Types\PaymentProfile $paymentProfile
 * @property \maiorADV\eBaySDK\BusinessPoliciesManagement\Types\ReturnPolicyProfile $returnPolicyProfile
 * @property \maiorADV\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyProfile $shippingPolicyProfile
 */
class AddSellerProfileRequest extends \maiorADV\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'paymentProfile' => [
            'type' => 'maiorADV\eBaySDK\BusinessPoliciesManagement\Types\PaymentProfile',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentProfile'
        ],
        'returnPolicyProfile' => [
            'type' => 'maiorADV\eBaySDK\BusinessPoliciesManagement\Types\ReturnPolicyProfile',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPolicyProfile'
        ],
        'shippingPolicyProfile' => [
            'type' => 'maiorADV\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyProfile',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingPolicyProfile'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'addSellerProfileRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
