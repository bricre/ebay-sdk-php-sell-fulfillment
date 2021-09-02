<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains shipping information for a fulfillment, including the
 * shipping carrier, the shipping service option, the shipment destination, and the
 * Global Shipping Program reference ID.
 */
class ShippingStep extends AbstractModel
{
    /**
     * The unique identifier of the shipping carrier being used to ship the line item.
     * Note: The Trading API's GeteBayDetails call can be used to retrieve the latest
     * shipping carrier and shipping service option enumeration values.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * The unique identifier of the shipping service option being used to ship the line
     * item. Note: Use the Trading API's GeteBayDetails call to retrieve the latest
     * shipping carrier and shipping service option enumeration values. When making the
     * GeteBayDetails call, include the DetailName field in the request payload and set
     * its value to ShippingServiceDetails. Each valid shipping service option
     * (returned in ShippingServiceDetails.ShippingService field) and corresponding
     * shipping carrier (returned in ShippingServiceDetails.ShippingCarrier field) is
     * returned in response payload.
     *
     * @var string
     */
    public $shippingServiceCode = null;

    /**
     * This container consists of shipping and contact information about the individual
     * or organization to whom the fulfillment package will be shipped. Note: For a
     * Global Shipping Program shipment, this is the address of the international
     * shipping provider's domestic warehouse. The international shipping provider is
     * responsible for delivery to the final destination address. For more information,
     * see Addressing a Global Shipping Program Shipment.
     *
     * @var \Ebay\Sell\Fulfillment\Model\ExtendedContact
     */
    public $shipTo = null;

    /**
     * This is the unique identifer of the Global Shipping Program (GSP) shipment. This
     * field is only returned if the line item is being shipped via GSP (the value of
     * the fulfillmentStartInstructions.ebaySupportedFulfillment field will be true.
     * The international shipping provider uses the shipToReferenceId value as the
     * primary reference number to retrieve the relevant details about the buyer, the
     * order, and the fulfillment, so the shipment can be completed. Sellers must
     * include this value on the shipping label immediately above the street address of
     * the international shipping provider. Example: &quot;Reference
     * #1234567890123456&quot; Note: This value is the same as the
     * ShipToAddress.ReferenceID value returned by the Trading API's GetOrders call.
     *
     * @var string
     */
    public $shipToReferenceId = null;
}
