<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to provide details about the seller payments for an order.
 */
class Payment extends AbstractModel
{
    /**
     * The amount that seller receives for the order via the payment method mentioned
     * in Payment.paymentMethod. Note: For orders that are subject to 'eBay Collect and
     * Remit' tax, which includes US state-mandated sales tax, 'Good and Services' tax
     * in Australia and New Zealand, and VAT collected for UK or EU, the 'Collect and
     * Remit' tax amount for the order will be included in this amount.value field (and
     * in the amount.convertedFromValue field if currency conversion is applicable). To
     * determine if 'Collect and Remit' taxes were added into this totalDueSeller
     * value, the user can check for the corresponding
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
    public $amount = null;

    /**
     * The date and time that the payment was received by the seller. This field will
     * not be returned if buyer has yet to pay for the order. This timestamp is in ISO
     * 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.
     * Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $paymentDate = null;

    /**
     * This container is only returned if eBay is temporarily holding the seller's
     * funds for the order. If a payment hold has been placed on the order, this
     * container includes the reason for the payment hold, the expected release date of
     * the funds into the seller's account, the current state of the hold, and as soon
     * as the payment hold has been released, the actual release date.
     *
     * @var \Ebay\Sell\Fulfillment\Model\PaymentHold[]
     */
    public $paymentHolds = null;

    /**
     * The payment method used to pay for the order. See the PaymentMethodTypeEnum type
     * for more information on the payment methods. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:PaymentMethodTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $paymentMethod = null;

    /**
     * This field is only returned if payment has been made by the buyer, and the
     * paymentMethod is PAYPAL or ESCROW. This field contains the PayPal-generated
     * transaction identifier in case of payment made via PAYPAL.
     *
     * @var string
     */
    public $paymentReferenceId = null;

    /**
     * The enumeration value returned in this field indicates the status of the payment
     * for the order. See the PaymentStatusEnum type definition for more information on
     * the possible payment states. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:PaymentStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $paymentStatus = null;
}
