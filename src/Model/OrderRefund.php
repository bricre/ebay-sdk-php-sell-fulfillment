<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about a refund issued for an order. This does not
 * include line item level refunds.
 */
class OrderRefund extends AbstractModel
{
    /**
     * The monetary amount of the refund. This container is always returned for each
     * refund.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $amount = null;

    /**
     * The date and time that the refund was issued. This timestamp is in ISO 8601
     * format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This
     * field is not returned until the refund has been issued. Format:
     * [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $refundDate = null;

    /**
     * Unique identifier of a refund that was initiated for an order through the
     * issueRefund method. If the issueRefund method was used to issue one or more
     * refunds at the line item level, these refund identifiers are returned at the
     * line item level instead (lineItems.refunds.refundId field). A refundId value is
     * returned in the response of the issueRefund method, and this same value will be
     * returned in the getOrders and getOrders responses for pending and completed
     * refunds. The issueRefund method can only be used for eBay managed payment
     * orders. For other refunds, see the refundReferenceId field.
     *
     * @var string
     */
    public $refundId = null;

    /**
     * The eBay-generated unique identifier for the refund. This field is not returned
     * until the refund has been issued.
     *
     * @var string
     */
    public $refundReferenceId = null;

    /**
     * This enumeration value indicates the current status of the refund to the buyer.
     * This container is always returned for each refund. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:RefundStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $refundStatus = null;
}
