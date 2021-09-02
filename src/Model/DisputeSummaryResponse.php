<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the base response payload of the getPaymentDisputeSummaries
 * method. Each payment dispute that matches the input criteria is returned under
 * the paymentDisputeSummaries array.
 */
class DisputeSummaryResponse extends AbstractModel
{
    /**
     * The URI of the getPaymentDisputeSummaries call request that produced the current
     * page of the result set.
     *
     * @var string
     */
    public $href = null;

    /**
     * This value shows the maximum number of payment disputes that will appear on one
     * page of the result set. The limit value can be passed in as a query parameter in
     * the request, or if it is not used, it defaults to 200. If the value in the total
     * field exceeds this limit value, there are multiple pages in the current result
     * set. Min: 1; Max: 200; Default: 200.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The getPaymentDisputeSummaries call URI to use if you wish to view the next page
     * of the result set. For example, the following URI returns records 11 thru 20
     * from the collection of payment disputes:
     * path/payment_dispute_summary?limit=10&amp;offset=10 This field is only returned
     * if there is a next page of results to view based on the current input criteria.
     *
     * @var string
     */
    public $next = null;

    /**
     * This integer value indicates the number of payment disputes skipped before
     * listing the first payment dispute from the result set. The offset value can be
     * passed in as a query parameter in the request, or if it is not used, it defaults
     * to 0 and the first payment dispute of the result set is shown at the top of the
     * response.
     *
     * @var int
     */
    public $offset = null;

    /**
     * Each payment dispute that matches the input criteria is returned under this
     * array. If no payment disputes are found, an empty array is returned.
     *
     * @var \Ebay\Sell\Fulfillment\Model\PaymentDisputeSummary[]
     */
    public $paymentDisputeSummaries = null;

    /**
     * The getPaymentDisputeSummaries call URI to use if you wish to view the previous
     * page of the result set. For example, the following URI returns records 1 thru 10
     * from the collection of payment disputes:
     * path/payment_dispute_summary?limit=10&amp;offset=0 This field is only returned
     * if there is a previous page of results to view based on the current input
     * criteria.
     *
     * @var string
     */
    public $prev = null;

    /**
     * This integer value is the total number of payment disputes that matched the
     * input criteria. If the total number of entries exceeds the value that was set
     * for limit in the request payload, you will have to make multiple API calls to
     * see all pages of the results set. This field is returned even if it is 0.
     *
     * @var int
     */
    public $total = null;
}
