<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains the complete details of an existing fulfillment for an order.
 */
class ShippingFulfillment extends AbstractModel
{
    /**
     * The unique identifier of the fulfillment; for example, 9405509699937003457459.
     * This eBay-generated value is created with a successful createShippingFulfillment
     * call.
     *
     * @var string
     */
    public $fulfillmentId = null;

    /**
     * This array contains a list of one or more line items (and purchased quantity) to
     * which the fulfillment applies.
     *
     * @var \Ebay\Sell\Fulfillment\Model\LineItemReference[]
     */
    public $lineItems = null;

    /**
     * The tracking number provided by the shipping carrier for the package shipped in
     * this fulfillment. This field is returned if available.
     *
     * @var string
     */
    public $shipmentTrackingNumber = null;

    /**
     * The date and time that the fulfillment package was shipped. This timestamp is in
     * ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.
     * This field should only be returned if the package has been shipped. Format:
     * [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $shippedDate = null;

    /**
     * The eBay code identifying the shipping carrier for this fulfillment. This field
     * is returned if available. Note: The Trading API's ShippingCarrierCodeType
     * enumeration type contains the most current list of eBay shipping carrier codes
     * and the countries served by each carrier. See ShippingCarrierCodeType.
     *
     * @var string
     */
    public $shippingCarrierCode = null;
}
