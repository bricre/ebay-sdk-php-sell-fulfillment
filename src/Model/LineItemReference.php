<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type identifies the line item and quantity of that line item that comprises
 * one fulfillment, such as a shipping package.
 */
class LineItemReference extends AbstractModel
{
    /**
     * This is the unique identifier of the eBay order line item that is part of the
     * shipping fulfillment. The line item ID is created as soon as there is a
     * commitment to buy from the seller.
     *
     * @var string
     */
    public $lineItemId = null;

    /**
     * This field is reserved for internal or future use.
     *
     * @var int
     */
    public $quantity = null;
}
