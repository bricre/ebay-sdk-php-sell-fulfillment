<?php

namespace Ebay\Sell\Fulfillment;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getOrder' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\Order',
        ],
        'getOrders' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\OrderSearchPagedCollection',
        ],
        'issueRefund' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\Refund',
        ],
        'getShippingFulfillments' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\ShippingFulfillmentPagedCollection',
        ],
        'createShippingFulfillment' => [
            '201.' => null,
        ],
        'getShippingFulfillment' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\ShippingFulfillment',
        ],
        'getPaymentDispute' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\PaymentDispute',
        ],
        'getActivities' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\PaymentDisputeActivityHistory',
        ],
        'getPaymentDisputeSummaries' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\DisputeSummaryResponse',
        ],
        'uploadEvidenceFile' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\FileEvidence',
        ],
        'addEvidence' => [
            '200.' => 'Ebay\\Sell\\Fulfillment\\Model\\AddEvidencePaymentDisputeResponse',
        ],
    ];
}
