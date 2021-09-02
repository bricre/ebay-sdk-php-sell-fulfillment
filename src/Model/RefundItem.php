<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used if the seller is issuing a refund for one or more individual
 * order line items in a multiple line item order. Otherwise, the seller just uses
 * the orderLevelRefundAmount container to specify the amount of the refund for the
 * entire order.
 */
class RefundItem extends AbstractModel
{
    /**
     * This container is used to specify the amount of the refund for the corresponding
     * order line item. If a seller wants to issue a refund for an entire order, the
     * seller would use the orderLevelRefundAmount container instead.
     *
     * @var \Ebay\Sell\Fulfillment\Model\SimpleAmount
     */
    public $refundAmount = null;

    /**
     * The unique identifier of an order line item. This identifier is created once a
     * buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning
     * bidder. Either this field or the legacyReference container is needed to identify
     * an individual order line item that will receive a refund. Note: The lineItemId
     * field is used to identify an order line item in REST API format, and the
     * legacyReference container is used to identify an order line item in
     * Trading/legacy API format. Both legacy and REST API identifiers are returned in
     * getOrder (Fulfillment API) and GetOrders (Trading API).
     *
     * @var string
     */
    public $lineItemId = null;

    /**
     * This container is needed if the seller is issuing a refund for an individual
     * order line item, and wishes to use an item ID/transaction ID pair to identify
     * the order line item. Either this container or the lineItemId field is needed to
     * identify an individual order line item that will receive a refund. Note: The
     * lineItemId field is used to identify an order line item in REST API format, and
     * the legacyReference container is used to identify an order line item in
     * Trading/legacy API format. Both legacy and REST API identifiers are returned in
     * getOrder (Fulfillment API) and GetOrders (Trading API).
     *
     * @var \Ebay\Sell\Fulfillment\Model\LegacyReference
     */
    public $legacyReference = null;
}
