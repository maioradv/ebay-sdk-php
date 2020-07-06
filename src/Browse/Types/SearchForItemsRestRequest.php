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
 * @property string $aspect_filter
 * @property string $category_ids
 * @property string $epid
 * @property string $fieldgroups
 * @property string $filter
 * @property string $gtin
 * @property string $limit
 * @property string $offset
 * @property string $q
 * @property string $sort
 */
class SearchForItemsRestRequest extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspect_filter' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'aspect_filter'
        ],
        'category_ids' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'category_ids'
        ],
        'epid' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'epid'
        ],
        'fieldgroups' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fieldgroups'
        ],
        'filter' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'filter'
        ],
        'gtin' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'gtin'
        ],
        'limit' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'limit'
        ],
        'offset' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offset'
        ],
        'q' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'q'
        ],
        'sort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sort'
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
