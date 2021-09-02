<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the lineItems array that is used to identify one or more
 * line items in the order with the payment dispute.
 */
class OrderLineItems extends AbstractModel
{
    /**
     * The unique identifier of the eBay listing associated with the order.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The unique identifier of the line item within the order. The lineItemId value is
     * created once the buyer actually purchases the item, or if there is a commitment
     * to buy (such as an auction that is won by the buyer, an accepted Best Offer, or
     * other situation that does not require immediate payment from the buyer).
     *
     * @var string
     */
    public $lineItemId = null;
}
