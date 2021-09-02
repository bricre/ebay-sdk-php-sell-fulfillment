<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about the various monetary exchanges that apply
 * to the net balance due for the order.
 */
class PaymentSummary extends AbstractModel
{
    /**
     * This array consists of payment information for the order, including payment
     * status, payment method, payment amount, and payment date. This array is always
     * returned, although some of the fields under this container will not be returned
     * until payment has been made.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Payment[]
     */
    public $payments = null;

    /**
     * This array is always returned, but is returned as an empty array unless the
     * seller has submitted a partial or full refund to the buyer for the order. If a
     * refund has occurred, the refund amount and refund date will be shown for each
     * refund.
     *
     * @var \Ebay\Sell\Fulfillment\Model\OrderRefund[]
     */
    public $refunds = null;

    /**
     * This is the total price that the seller receives for the entire order after all
     * costs (item cost, delivery cost, taxes) are added for all line items, minus any
     * discounts and/or promotions for any of the line items. Note that this value is
     * subject to change before payment is actually made by the buyer (if the
     * paymentStatus value was PENDING or FAILED), or if a partial or full refund
     * occurs with the order. Note: For orders that are subject to 'eBay Collect and
     * Remit' tax, the 'Collect and Remit' tax amount for the order will be included in
     * this totalDueSeller value. To determine if 'Collect and Remit' taxes were added
     * into this totalDueSeller value, the user can check for the corresponding
     * lineItems.ebayCollectAndRemitTaxes and the lineItems.taxes containers in the
     * response. If both of these containers appear for one or more line items in the
     * response with the following taxType values, the 'Collect and Remit' tax amount
     * that the buyer paid is in this amount: STATE_SALES_TAX: US GST: Australia or New
     * Zealand VAT: UK or EU countriesPayPal sellers, be aware the 'Collect and Remit'
     * tax that the buyer pays for the order will initially be included when the order
     * funds are distributed to their PayPal account, but PayPal will pull out the
     * 'Collect and Remit' tax amount shortly after the payment clears and distribute
     * the tax to the appropriate taxing authority. Previous to this change, PayPal
     * would strip out the 'Collect and Remit' tax before distributing order funds to
     * the seller's account.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $totalDueSeller = null;
}
