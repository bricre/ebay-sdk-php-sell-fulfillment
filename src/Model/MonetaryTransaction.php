<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to provide details about one or more monetary transactions
 * that occur as part of a payment dispute.
 */
class MonetaryTransaction extends AbstractModel
{
    /**
     * This timestamp indicates when the monetary transaction occurred. A date is
     * returned for all monetary transactions. The following format is used:
     * YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $date = null;

    /**
     * This enumeration value indicates the reason for the monetary transaction. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:MonetaryTransactionReasonEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reason = null;

    /**
     * The amount involved in the monetary transaction. For active cross-border trade
     * orders, the currency conversion and exchangeRate fields will be displayed as
     * well.
     *
     * @var \Ebay\Sell\Fulfillment\Model\DisputeAmount
     */
    public $amount = null;
}
