<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about any requests that have been made to cancel
 * an order.
 */
class CancelStatus extends AbstractModel
{
    /**
     * The date and time the order was cancelled, if applicable. This timestamp is in
     * ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.
     * Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $cancelledDate = null;

    /**
     * This array contains details of one or more buyer requests to cancel the order.
     * For the getOrders call: This array is returned but is always empty. For the
     * getOrder call: This array is returned fully populated with information about any
     * cancellation requests.
     *
     * @var \Ebay\Sell\Fulfillment\Model\CancelRequest[]
     */
    public $cancelRequests = null;

    /**
     * The state of the order with regard to cancellation. This field is always
     * returned, and if there are no cancellation requests, a value of NONE_REQUESTED
     * is returned. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CancelStateEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $cancelState = null;
}
