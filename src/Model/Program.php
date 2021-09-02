<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is returned for order line items eligible for the Authenticity
 * Guarantee service and/or for order line items fulfilled by the eBay Fulfillment
 * program.
 */
class Program extends AbstractModel
{
    /**
     * This field is returned when the third-party authenticator performs the
     * authentication verification inspection on the order line item. Different values
     * will be returned based on whether the item passed or failed the authentication
     * verification inspection.
     *
     * @var \Ebay\Sell\Fulfillment\Model\PostSaleAuthenticationProgram
     */
    public $authenticityVerification = null;

    /**
     * This field provides details about an order line item being handled by eBay
     * fulfillment. It is only returned for paid orders being fulfilled by eBay or an
     * eBay fulfillment partner.
     *
     * @var \Ebay\Sell\Fulfillment\Model\EbayFulfillmentProgram
     */
    public $fulfillmentProgram = null;
}
