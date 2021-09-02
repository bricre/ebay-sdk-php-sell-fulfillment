<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the request payload of the contestPaymentDispute method.
 */
class ContestPaymentDisputeRequest extends AbstractModel
{
    /**
     * This container is needed if the seller is requesting that the buyer return the
     * item. If this container is used, all relevant fields must be included, including
     * fullName and primaryPhone.
     *
     * @var \Ebay\Sell\Fulfillment\Model\ReturnAddress
     */
    public $returnAddress = null;

    /**
     * This integer value indicates the revision number of the payment dispute. This
     * field is required. The current revision number for a payment dispute can be
     * retrieved with the getPaymentDispute method. Each time an action is taken
     * against a payment dispute, this integer value increases by 1.
     *
     * @var int
     */
    public $revision = null;
}
