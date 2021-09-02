<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to indicate the merchant's store where the buyer will pickup
 * their In-Store Pickup order. The pickupStep container is only returned for
 * In-Store Pickup orders. The In-Store Pickup feature is supported in the US,
 * Canada, UK, Germany, and Australia marketplaces.
 */
class PickupStep extends AbstractModel
{
    /**
     * A merchant-defined unique identifier of the merchant's store where the buyer
     * will pick up their In-Store Pickup order. This field is always returned with the
     * pickupStep container.
     *
     * @var string
     */
    public $merchantLocationKey = null;
}
