<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to provide details about an order line item being fulfilled by
 * eBay or an eBay fulfillment partner.
 */
class EbayFulfillmentProgram extends AbstractModel
{
    /**
     * The value returned in this field indicates the party that is handling
     * fulfillment of the order line item. Valid value: EBAY.
     *
     * @var string
     */
    public $fulfilledBy = null;
}
