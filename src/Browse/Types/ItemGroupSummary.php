<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Browse\Types;

/**
 *
 * @property \maiorADV\eBaySDK\Browse\Types\Image[] $itemGroupAdditionalImages
 * @property string $itemGroupHref
 * @property string $itemGroupId
 * @property \maiorADV\eBaySDK\Browse\Types\Image $itemGroupImage
 * @property string $itemGroupTitle
 * @property \maiorADV\eBaySDK\Browse\Enums\ItemGroupTypeEnum $itemGroupType
 */
class ItemGroupSummary extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'itemGroupAdditionalImages' => [
            'type' => 'maiorADV\eBaySDK\Browse\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'itemGroupAdditionalImages'
        ],
        'itemGroupHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupHref'
        ],
        'itemGroupId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupId'
        ],
        'itemGroupImage' => [
            'type' => 'maiorADV\eBaySDK\Browse\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupImage'
        ],
        'itemGroupTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupTitle'
        ],
        'itemGroupType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupType'
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
