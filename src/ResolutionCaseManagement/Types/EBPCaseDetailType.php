<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property string $openReason
 * @property string $decisionReason
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\DecisionReasonDetailType $decisionReasonDetail
 * @property \DateTime $decisionDate
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Enums\CaseDecisionType $decision
 * @property boolean $FVFCredited
 * @property boolean $notCountedInBuyerProtectionCases
 * @property string $globalId
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\AppealType[] $appeal
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\EBPCaseResponseHistoryType[] $responseHistory
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\Amount $agreedRefundAmount
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\PaymentDetailType $paymentDetail
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\ShipmentType $buyerReturnShipment
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\ShipmentType $sellerShipment
 * @property string $detailStatus
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\DetailStatusInfoType $detailStatusInfo
 * @property string $initialBuyerExpectation
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType $initialBuyerExpectationDetail
 * @property string $returnMerchandiseAuthorization
 * @property \maiorADV\eBaySDK\ResolutionCaseManagement\Types\EBPCaseDocumentInfoType[] $caseDocumentInfo
 */
class EBPCaseDetailType extends \maiorADV\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'openReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'openReason'
        ],
        'decisionReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decisionReason'
        ],
        'decisionReasonDetail' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\DecisionReasonDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decisionReasonDetail'
        ],
        'decisionDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decisionDate'
        ],
        'decision' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decision'
        ],
        'FVFCredited' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FVFCredited'
        ],
        'notCountedInBuyerProtectionCases' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'notCountedInBuyerProtectionCases'
        ],
        'globalId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'globalId'
        ],
        'appeal' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\AppealType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'appeal'
        ],
        'responseHistory' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\EBPCaseResponseHistoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'responseHistory'
        ],
        'agreedRefundAmount' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'agreedRefundAmount'
        ],
        'paymentDetail' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\PaymentDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentDetail'
        ],
        'buyerReturnShipment' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerReturnShipment'
        ],
        'sellerShipment' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerShipment'
        ],
        'detailStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'detailStatus'
        ],
        'detailStatusInfo' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\DetailStatusInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'detailStatusInfo'
        ],
        'initialBuyerExpectation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initialBuyerExpectation'
        ],
        'initialBuyerExpectationDetail' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initialBuyerExpectationDetail'
        ],
        'returnMerchandiseAuthorization' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnMerchandiseAuthorization'
        ],
        'caseDocumentInfo' => [
            'type' => 'maiorADV\eBaySDK\ResolutionCaseManagement\Types\EBPCaseDocumentInfoType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'caseDocumentInfo'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
