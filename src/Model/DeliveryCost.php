<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains a breakdown of all costs associated with the fulfillment of a
 * line item.
 */
class DeliveryCost extends AbstractModel
{
    /**
     * The amount of any import charges applied to international shipping of the line
     * item. This container is only returned if import charges apply to the line item.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $importCharges = null;

    /**
     * The total cost of shipping all units of the line item. This container is always
     * returned even when the shipping cost is free, in which case the value field will
     * show 0.0 (dollars).
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $shippingCost = null;

    /**
     * This field shows the fee due to eBay's international shipping provider for a
     * line item that is being shipped through the Global Shipping Program. This
     * container is only returned for line items being shipped internationally through
     * the Global Shipping Program, which is currently only supported in the US and UK
     * marketplaces. Note: The value returned for this field will always be 0.0 for
     * line items sold in the UK marketplace.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $shippingIntermediationFee = null;
}
