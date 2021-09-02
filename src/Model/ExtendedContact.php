<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains shipping and contact information for a buyer or an eBay
 * shipping partner.
 */
class ExtendedContact extends AbstractModel
{
    /**
     * The company name associated with the buyer or eBay shipping partner. This field
     * is only returned if defined/applicable to the buyer or eBay shipping partner.
     *
     * @var string
     */
    public $companyName = null;

    /**
     * This container shows the shipping address of the buyer or eBay shipping partner.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Address
     */
    public $contactAddress = null;

    /**
     * This field contains the email address of the buyer. This address will be
     * returned for up to 14 days from order creation. If an order is more than 14 days
     * old, no address is returned. Note: If returned, this field contains the email
     * address of the buyer, even for Global Shipping Program shipments.
     *
     * @var string
     */
    public $email = null;

    /**
     * The full name of the buyer or eBay shipping partner.
     *
     * @var string
     */
    public $fullName = null;

    /**
     * The primary telephone number of the buyer or eBay shipping partner.
     *
     * @var \Ebay\Sell\Fulfillment\Model\PhoneNumber
     */
    public $primaryPhone = null;
}
