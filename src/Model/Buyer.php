<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about the order's buyer.
 */
class Buyer extends AbstractModel
{
    /**
     * This container consists of address information that can be used by sellers for
     * tax purpose.
     *
     * @var \Ebay\Sell\Fulfillment\Model\TaxAddress
     */
    public $taxAddress = null;

    /**
     * This container consists of taxpayer identification information for buyers from
     * Italy, Spain, or Guatemala. It is currently only returned for orders occurring
     * on the eBay Italy or eBay Spain marketplaces. Note: Currently, the taxIdentifier
     * container is only returned in getOrder and not in getOrders. So, if a seller
     * wanted to view a buyer's tax information for a particular order returned in
     * getOrders, that seller would need to use the orderId value for that particular
     * order, and then run a getOrder call against that order ID.
     *
     * @var \Ebay\Sell\Fulfillment\Model\TaxIdentifier
     */
    public $taxIdentifier = null;

    /**
     * The buyer's eBay user ID.
     *
     * @var string
     */
    public $username = null;
}
