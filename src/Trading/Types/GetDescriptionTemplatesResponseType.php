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
 * @property \maiorADV\eBaySDK\Trading\Types\DescriptionTemplateType[] $DescriptionTemplate
 * @property integer $LayoutTotal
 * @property integer[] $ObsoleteLayoutID
 * @property integer[] $ObsoleteThemeID
 * @property \maiorADV\eBaySDK\Trading\Types\ThemeGroupType[] $ThemeGroup
 * @property integer $ThemeTotal
 */
class GetDescriptionTemplatesResponseType extends \maiorADV\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DescriptionTemplate' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\DescriptionTemplateType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DescriptionTemplate'
        ],
        'LayoutTotal' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LayoutTotal'
        ],
        'ObsoleteLayoutID' => [
            'type' => 'integer',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ObsoleteLayoutID'
        ],
        'ObsoleteThemeID' => [
            'type' => 'integer',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ObsoleteThemeID'
        ],
        'ThemeGroup' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\ThemeGroupType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ThemeGroup'
        ],
        'ThemeTotal' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ThemeTotal'
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
