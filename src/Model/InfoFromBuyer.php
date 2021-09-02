<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This container is returned if the buyer is returning one or more line items in
 * an order that is associated with the payment dispute, and that buyer has
 * provided return shipping tracking information and/or a note about the return.
 */
class InfoFromBuyer extends AbstractModel
{
    /**
     * This field shows any note that was left by the buyer for in regards to the
     * dispute.
     *
     * @var string
     */
    public $note = null;

    /**
     * This array shows shipment tracking information for one or more shipping packages
     * being returned to the buyer after a payment dispute.
     *
     * @var \Ebay\Sell\Fulfillment\Model\TrackingInfo[]
     */
    public $returnShipmentTracking = null;
}
