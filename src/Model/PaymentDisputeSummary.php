<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by each payment dispute that is returned with the
 * getPaymentDisputeSummaries method.
 */
class PaymentDisputeSummary extends AbstractModel
{
    /**
     * This container shows the dollar value associated with the payment dispute in the
     * currency used by the seller's marketplace. This container is returned for all
     * payment disputes returned in the response.
     *
     * @var \Ebay\Sell\Fulfillment\Model\SimpleAmount
     */
    public $amount = null;

    /**
     * This is the buyer's eBay user ID. This field is returned for all payment
     * disputes returned in the response.
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
     * order ID format is supported in REST-based APIs.
     *
     * @var string
     */
    public $orderId = null;

    /**
     * This is the unique identifier of the payment dispute. This identifier is
     * automatically created by eBay once the payment dispute comes into the eBay
     * Managed Payments system. This identifier is passed in at the end of the
     * getPaymentDispute call URI to retrieve a specific payment dispute. The
     * getPaymentDispute method returns more details about a payment dispute than the
     * getPaymentDisputeSummaries method.
     *
     * @var string
     */
    public $paymentDisputeId = null;

    /**
     * The enumeration value in this field gives the current status of the payment
     * dispute. For implementation help, refer to <a
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
     * The timestamp in this field shows the date/time when the seller must response to
     * a payment dispute, so this field is only returned for payment disputes in the
     * ACTION_NEEDED state. For payment disputes that require action by the seller,
     * that same seller must call getPaymentDispute to see the next action(s) that they
     * can take against the payment dispute. The timestamps returned here use the
     * ISO-8601 24-hour date and time format, and the time zone used is Universal
     * Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The
     * ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be
     * 2019-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $respondByDate = null;
}
