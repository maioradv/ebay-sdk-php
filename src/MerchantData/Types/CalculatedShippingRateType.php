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
 * @property string $OriginatingPostalCode
 * @property \maiorADV\eBaySDK\MerchantData\Enums\MeasurementSystemCodeType $MeasurementUnit
 * @property \maiorADV\eBaySDK\MerchantData\Types\MeasureType $PackageDepth
 * @property \maiorADV\eBaySDK\MerchantData\Types\MeasureType $PackageLength
 * @property \maiorADV\eBaySDK\MerchantData\Types\MeasureType $PackageWidth
 * @property \maiorADV\eBaySDK\MerchantData\Types\AmountType $PackagingHandlingCosts
 * @property boolean $ShippingIrregular
 * @property \maiorADV\eBaySDK\MerchantData\Enums\ShippingPackageCodeType $ShippingPackage
 * @property \maiorADV\eBaySDK\MerchantData\Types\MeasureType $WeightMajor
 * @property \maiorADV\eBaySDK\MerchantData\Types\MeasureType $WeightMinor
 * @property \maiorADV\eBaySDK\MerchantData\Types\AmountType $InternationalPackagingHandlingCosts
 */
class CalculatedShippingRateType extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OriginatingPostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OriginatingPostalCode'
        ],
        'MeasurementUnit' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MeasurementUnit'
        ],
        'PackageDepth' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ],
        'PackageLength' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ],
        'PackageWidth' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ],
        'PackagingHandlingCosts' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackagingHandlingCosts'
        ],
        'ShippingIrregular' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingIrregular'
        ],
        'ShippingPackage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ],
        'WeightMajor' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ],
        'WeightMinor' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
        ],
        'InternationalPackagingHandlingCosts' => [
            'type' => 'maiorADV\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalPackagingHandlingCosts'
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
