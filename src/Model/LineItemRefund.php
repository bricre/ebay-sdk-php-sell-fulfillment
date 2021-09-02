<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains refund information for a line item.
 */
class LineItemRefund extends AbstractModel
{
    /**
     * This field shows the refund amount for a line item. This field is only returned
     * if the buyer is due a refund for the line item.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $amount = null;

    /**
     * The date and time that the refund was issued for the line item. This timestamp
     * is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC)
     * clock. This field is not returned until the refund has been issued. Format:
     * [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $refundDate = null;

    /**
     * Unique identifier of a refund that was initiated for an order's line item
     * through the issueRefund method. If the issueRefund method was used to issue a
     * refund at the order level, this identifier is returned at the order level
     * instead (paymentSummary.refunds.refundId field). A refundId value is returned in
     * the response of the issueRefund method, and this same value will be returned in
     * the getOrder and getOrders responses for pending and completed refunds. The
     * issueRefund method can only be used for eBay managed payment orders.
     *
     * @var string
     */
    public $refundId = null;

    /**
     * This field is reserved for internal or future use.
     *
     * @var string
     */
    public $refundReferenceId = null;
}
