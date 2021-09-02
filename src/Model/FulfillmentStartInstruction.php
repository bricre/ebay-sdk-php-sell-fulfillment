<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains a set of specifications for processing a fulfillment of an
 * order, including the type of fulfillment, shipping carrier and service,
 * addressing details, and estimated delivery window. These instructions are
 * derived from the buyer's and seller's eBay account preferences, the listing
 * parameters, and the buyer's checkout selections. The seller can use them as a
 * starting point for packaging, addressing, and shipping the order.
 */
class FulfillmentStartInstruction extends AbstractModel
{
    /**
     * This field is only returned if its value is true and indicates that the
     * fulfillment will be shipped via eBay's Global Shipping Program. For more
     * information, see the Global Shipping Program help topic.
     *
     * @var bool
     */
    public $ebaySupportedFulfillment = null;

    /**
     * This container is only returned if the value of ebaySupportedFulfillment field
     * is true. This is the final destination address for a Global Shipping Program
     * shipment, which is usually the buyer's home. Sellers should not ship directly to
     * this address; instead they should ship this package to their international
     * shipping provider's domestic warehouse. The international shipping provider is
     * responsible for delivery to the final destination address. For more information,
     * see Addressing a Global Shipping Program Shipment. Note: For Authenticity
     * Guarantee program shipment, this is the address of the authenticator&rsquo;s
     * warehouse. The authenticator is responsible for delivery to the buyer shipping
     * address.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Address
     */
    public $finalDestinationAddress = null;

    /**
     * The enumeration value returned in this field indicates the method of fulfillment
     * that will be used to deliver this set of line items (this package) to the buyer.
     * This field will have a value of SHIP_TO if the ebaySupportedFulfillment field is
     * returned with a value of true. See the FulfillmentInstructionsType definition
     * for more information about different fulfillment types. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:FulfillmentInstructionsType'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $fulfillmentInstructionsType = null;

    /**
     * This is the estimated latest date that the fulfillment will be completed. This
     * timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated
     * Time (UTC) clock. This field is not returned ifthe value of the
     * fulfillmentInstructionsType field is DIGITAL or PREPARE_FOR_PICKUP. Format:
     * [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $maxEstimatedDeliveryDate = null;

    /**
     * This is the estimated earliest date that the fulfillment will be completed. This
     * timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated
     * Time (UTC) clock. This field is not returned if the value of the
     * fulfillmentInstructionsType field is DIGITAL or PREPARE_FOR_PICKUP. Format:
     * [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $minEstimatedDeliveryDate = null;

    /**
     * This container is only returned for In-Store Pickup orders, and it indicates the
     * specific merchant's store where the buyer will pick up the order. The In-Store
     * Pickup feature is supported in the US, Canada, UK, Germany, and Australia
     * marketplaces.
     *
     * @var \Ebay\Sell\Fulfillment\Model\PickupStep
     */
    public $pickupStep = null;

    /**
     * This container consists of shipping information for this fulfillment, including
     * the shipping carrier, the shipping service option, and the shipment destination.
     * This container is not returned if the value of the fulfillmentInstructionsType
     * field is DIGITAL, or for In-Store Pickup orders. For Click and Collect orders,
     * the shipping destination will be a brick-and-mortar store where the buyer will
     * pick up the order.
     *
     * @var \Ebay\Sell\Fulfillment\Model\ShippingStep
     */
    public $shippingStep = null;
}
