<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains the specifications for the entire collection of shipping
 * fulfillments that are associated with the order specified by a
 * getShippingFulfillments call. The fulfillments container returns an array of all
 * the fulfillments in the collection.
 */
class ShippingFulfillmentPagedCollection extends AbstractModel
{
    /**
     * This array contains one or more fulfillments required for the order that was
     * specified in method endpoint.
     *
     * @var \Ebay\Sell\Fulfillment\Model\ShippingFulfillment[]
     */
    public $fulfillments = null;

    /**
     * The total number of fulfillments in the specified order. Note: If no
     * fulfillments are found for the order, this field is returned with a value of 0.
     *
     * @var int
     */
    public $total = null;

    /**
     * This array is only returned if one or more errors or warnings occur with the
     * call request.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Error[]
     */
    public $warnings = null;
}
