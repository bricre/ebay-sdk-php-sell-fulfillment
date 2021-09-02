<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the resolution container that is returned for payment
 * disputes that have been resolved.
 */
class PaymentDisputeOutcomeDetail extends AbstractModel
{
    /**
     * This container will show the dollar value of any fees associated with the
     * payment dispute. This container is only returned if there are fees associated
     * with the payment dispute.
     *
     * @var \Ebay\Sell\Fulfillment\Model\SimpleAmount
     */
    public $fees = null;

    /**
     * This container shows the amount of money that the seller is protected against in
     * a payment dispute under eBay's seller protection policy.
     *
     * @var \Ebay\Sell\Fulfillment\Model\SimpleAmount
     */
    public $protectedAmount = null;

    /**
     * This enumeration value indicates if the seller is fully protected, partially
     * protected, or not protected by eBay for the payment dispute. This field is
     * always returned once the payment dispute is resolved. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ProtectionStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $protectionStatus = null;

    /**
     * The enumeration value returned in this field indicates the outcome of the
     * payment dispute for the seller. This field is always returned once the payment
     * dispute is resolved. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:OutcomeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reasonForClosure = null;

    /**
     * This container shows the dollar amount being recouped from the seller. This
     * container is empty if the seller wins the payment dispute or if the seller is
     * fully protected by eBay's seller protection policy.
     *
     * @var \Ebay\Sell\Fulfillment\Model\SimpleAmount
     */
    public $recoupAmount = null;

    /**
     * This container shows the amount of money in selling fee credits due back to the
     * seller after a payment dispute is settled.
     *
     * @var \Ebay\Sell\Fulfillment\Model\SimpleAmount
     */
    public $totalFeeCredit = null;
}
