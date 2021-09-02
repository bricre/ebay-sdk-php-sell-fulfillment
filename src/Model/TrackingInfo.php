<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the shipmentTracking array returned under the evidence
 * container if the seller has provided shipment tracking information as evidence
 * to support PROOF_OF_DELIVERY for an INR-related payment dispute.
 */
class TrackingInfo extends AbstractModel
{
    /**
     * This string value represents the shipment tracking number of the package.
     *
     * @var string
     */
    public $shipmentTrackingNumber = null;

    /**
     * This string value represents the shipping carrier used to ship the package.
     *
     * @var string
     */
    public $shippingCarrierCode = null;
}
