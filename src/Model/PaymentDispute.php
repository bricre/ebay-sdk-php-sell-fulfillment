<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base response of the getPaymentDispute method. The
 * getPaymentDispute method retrieves detailed information on a specific payment
 * dispute.
 */
class PaymentDispute extends AbstractModel
{
    /**
     * This container shows the dollar value associated with the payment dispute in the
     * currency used by the seller's marketplace.
     *
     * @var \Ebay\Sell\Fulfillment\Model\SimpleAmount
     */
    public $amount = null;

    /**
     * The value(s) returned in this array indicate the choices that the seller has
     * when responding to the payment dispute. Once the seller has responded to the
     * payment dispute, this field will no longer be shown, and instead, the
     * sellerResponse field will show the decision that the seller made.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:SellerDecisionEnum'>eBay
     *                   API documentation</a>[]
     */
    public $availableChoices = null;

    /**
     * This container is returned if the buyer is returning one or more line items in
     * an order that is associated with the payment dispute, and that buyer has
     * provided return shipping tracking information and/or a note about the return.
     *
     * @var \Ebay\Sell\Fulfillment\Model\InfoFromBuyer
     */
    public $buyerProvided = null;

    /**
     * This is the eBay user ID of the buyer that initiated the payment dispute.
     *
     * @var string
     */
    public $buyerUsername = null;

    /**
     * The timestamp in this field shows the date/time when the payment dispute was
     * closed, so this field is only returned for payment disputes in the CLOSED state.
     * The timestamps returned here use the ISO-8601 24-hour date and time format, and
     * the time zone used is Universal Coordinated Time (UTC), also known as Greenwich
     * Mean Time (GMT), or Zulu. The ISO-8601 format looks like this:
     * yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $closedDate = null;

    /**
     * This container shows any evidence that has been provided by the seller to
     * contest the payment dispute. Evidence may include shipment tracking information,
     * proof of authentication documentation, image(s) to proof that an item is as
     * described, or financial documentation/invoice. This container is only returned
     * if the seller has provided at least one document used as evidence against the
     * payment dispute.
     *
     * @var \Ebay\Sell\Fulfillment\Model\DisputeEvidence[]
     */
    public $evidence = null;

    /**
     * This container is returned if one or more evidence documents are being requested
     * from the seller.
     *
     * @var \Ebay\Sell\Fulfillment\Model\EvidenceRequest[]
     */
    public $evidenceRequests = null;

    /**
     * This array is used to identify one or more order line items associated with the
     * payment dispute. There will always be at least one itemId/lineItemId pair
     * returned in this array.
     *
     * @var \Ebay\Sell\Fulfillment\Model\OrderLineItems[]
     */
    public $lineItems = null;

    /**
     * This array provide details about one or more monetary transactions that occur as
     * part of a payment dispute. This array is only returned once one or more monetary
     * transacations occur with a payment dispute.
     *
     * @var \Ebay\Sell\Fulfillment\Model\MonetaryTransaction[]
     */
    public $monetaryTransactions = null;

    /**
     * The timestamp in this field shows the date/time when the payment dispute was
     * opened. This field is returned for payment disputes in all states. The
     * timestamps returned here use the ISO-8601 24-hour date and time format, and the
     * time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean
     * Time (GMT), or Zulu. The ISO-8601 format looks like this:
     * yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $openDate = null;

    /**
     * This is the unique identifier of the order involved in the payment dispute.
     * Note: eBay rolled out a new Order ID format in June 2019. The legacy APIs still
     * support the old and new order ID format to identify orders, but only the new
     * order ID format is returned in REST-based API responses.
     *
     * @var string
     */
    public $orderId = null;

    /**
     * This is the unique identifier of the payment dispute. This is the same
     * identifier that is passed in to the call URI. This identifier is automatically
     * created by eBay once the payment dispute comes into the eBay Managed Payments
     * system.
     *
     * @var string
     */
    public $paymentDisputeId = null;

    /**
     * The enumeration value in this field gives the current status of the payment
     * dispute. The status of a payment dispute partially determines other fields that
     * are returned in the response. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:DisputeStateEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $paymentDisputeStatus = null;

    /**
     * The enumeration value in this field gives the reason why the buyer initiated the
     * payment dispute. See DisputeReasonEnum type for a description of the supported
     * reasons that buyers can give for initiating a payment dispute. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:DisputeReasonEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reason = null;

    /**
     * This container gives details about a payment dispute that has been resolved.
     * This container is only returned for resolved/closed payment disputes.
     *
     * @var \Ebay\Sell\Fulfillment\Model\PaymentDisputeOutcomeDetail
     */
    public $resolution = null;

    /**
     * The timestamp in this field shows the date/time when the seller must response to
     * a payment dispute, so this field is only returned for payment disputes in the
     * ACTION_NEEDED state. For payment disputes that currently require action by the
     * seller, that same seller should look at the availableChoices array to see the
     * available actions. The timestamps returned here use the ISO-8601 24-hour date
     * and time format, and the time zone used is Universal Coordinated Time (UTC),
     * also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like
     * this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $respondByDate = null;

    /**
     * This container gives the address where the order will be returned to. This
     * container is returned if the seller is accepting the payment dispute and will
     * issue a refund to the buyer once the item is returned to this address.
     *
     * @var \Ebay\Sell\Fulfillment\Model\ReturnAddress
     */
    public $returnAddress = null;

    /**
     * This integer value indicates the revision number of the payment dispute. Each
     * time an action is taken against a payment dispute, this integer value increases
     * by 1.
     *
     * @var int
     */
    public $revision = null;

    /**
     * The enumeration value returned in this field indicates how the seller has
     * responded to the payment dispute. The seller has the option of accepting the
     * payment dispute and agreeing to issue a refund, accepting the payment dispute
     * and agreeing to issue a refund as long as the buyer returns the item, or
     * contesting the payment dispute. This field is returned as soon as the seller
     * makes an initial decision on the payment dispute. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:SellerResponseEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $sellerResponse = null;
}
