<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Finding\Types;

/**
 *
 * @property string $keywords
 * @property string $storeName
 * @property \maiorADV\eBaySDK\Finding\Types\ItemFilter[] $itemFilter
 * @property \maiorADV\eBaySDK\Finding\Enums\OutputSelectorType[] $outputSelector
 * @property \maiorADV\eBaySDK\Finding\Types\AspectFilter[] $aspectFilter
 * @property string[] $categoryId
 */
class FindItemsIneBayStoresRequest extends \maiorADV\eBaySDK\Finding\Types\BaseFindingServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'keywords' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'keywords'
        ],
        'storeName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'storeName'
        ],
        'itemFilter' => [
            'type' => 'maiorADV\eBaySDK\Finding\Types\ItemFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'itemFilter'
        ],
        'outputSelector' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'outputSelector'
        ],
        'aspectFilter' => [
            'type' => 'maiorADV\eBaySDK\Finding\Types\AspectFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspectFilter'
        ],
        'categoryId' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryId'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findItemsIneBayStoresRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
