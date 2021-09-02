<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to state possible action(s) that a seller can take to release
 * a payment hold placed against an order.
 */
class SellerActionsToRelease extends AbstractModel
{
    /**
     * A possible action that the seller can take to expedite the release of a payment
     * hold. A sellerActionToRelease field is returned for each possible action that a
     * seller may take. Possible actions may include providing shipping/tracking
     * information, issuing a refund, providing refund information, contacting customer
     * support, etc.
     *
     * @var string
     */
    public $sellerActionToRelease = null;
}
