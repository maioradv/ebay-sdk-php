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
 * @property \maiorADV\eBaySDK\PostOrder\Types\DateTime $actionDate
 * @property string $activityParty
 * @property \maiorADV\eBaySDK\PostOrder\Enums\CancelActivityTypeEnum $activityType
 * @property string $cancelStateFrom
 * @property string $cancelStateTo
 * @property string $cancelStatetateTo
 */
class CancelActivityHistory extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'actionDate' => [
            'type' => 'maiorADV\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actionDate'
        ],
        'activityParty' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'activityParty'
        ],
        'activityType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'activityType'
        ],
        'cancelStateFrom' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelStateFrom'
        ],
        'cancelStateTo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelStateTo'
        ],
        'cancelStatetateTo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelStatetateTo'
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
