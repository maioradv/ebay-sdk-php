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
 * @property \maiorADV\eBaySDK\Trading\Enums\SellingManagerProductSortCodeType $Sort
 * @property integer $FolderID
 * @property \maiorADV\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property \maiorADV\eBaySDK\Trading\Enums\SortOrderCodeType $SortOrder
 * @property \maiorADV\eBaySDK\Trading\Types\SellingManagerSearchType $Search
 * @property integer $StoreCategoryID
 * @property \maiorADV\eBaySDK\Trading\Enums\SellingManagerInventoryPropertyTypeCodeType[] $Filter
 */
class GetSellingManagerInventoryRequestType extends \maiorADV\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Sort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Sort'
        ],
        'FolderID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FolderID'
        ],
        'Pagination' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'SortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ],
        'Search' => [
            'type' => 'maiorADV\eBaySDK\Trading\Types\SellingManagerSearchType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Search'
        ],
        'StoreCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ],
        'Filter' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Filter'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellingManagerInventoryRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
