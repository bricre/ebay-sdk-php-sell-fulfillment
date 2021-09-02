<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about the eBay programs under which a line item
 * was listed and sold.
 */
class LineItemProperties extends AbstractModel
{
    /**
     * A value of true indicates that the line item is covered by eBay's Buyer
     * Protection program.
     *
     * @var bool
     */
    public $buyerProtection = null;

    /**
     * This field is only returned if true and indicates that the purchase occurred by
     * the buyer and seller mutually agreeing on a Best Offer amount. The Best Offer
     * feature can be set up for any listing type, but if this feature is set up for an
     * auction listing, it will no longer be available once a bid has been placed on
     * the listing.
     *
     * @var bool
     */
    public $fromBestOffer = null;

    /**
     * This field is only returned if true and indicates that the line item was sold as
     * a result of a seller's ad campaign.
     *
     * @var bool
     */
    public $soldViaAdCampaign = null;
}
