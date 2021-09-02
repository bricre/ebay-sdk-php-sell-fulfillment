<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains the details of an order, including information about the
 * buyer, order history, shipping fulfillments, line items, costs, payments, and
 * order fulfillment status.
 */
class Order extends AbstractModel
{
    /**
     * This container consists of information about the order's buyer. At this time,
     * only the buyer's eBay user ID is returned, but it's possible that more buyer
     * information can be added to this container in the future.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Buyer
     */
    public $buyer = null;

    /**
     * This field contains any comments that the buyer left for the seller about the
     * order during checkout process. This field is only returned if a buyer left
     * comments at checkout time.
     *
     * @var string
     */
    public $buyerCheckoutNotes = null;

    /**
     * This container consists of order cancellation information if a cancel request
     * has been made. This container is always returned, and if no cancel request has
     * been made, the cancelState field is returned with a value of NONE_REQUESTED, and
     * an empty cancelRequests array is also returned.
     *
     * @var \Ebay\Sell\Fulfillment\Model\CancelStatus
     */
    public $cancelStatus = null;

    /**
     * The date and time that the order was created. This timestamp is in ISO 8601
     * format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format:
     * [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $creationDate = null;

    /**
     * This field is only returned if true, and indicates that eBay will collect tax
     * (US state-mandated sales tax, 'Goods and Services' tax in Australia or New
     * Zealand, and VAT collected for UK and EU countries) for at least one line item
     * in the order, and remit the tax to the taxing authority of the buyer's
     * residence. If this field is returned, the seller should search for one or more
     * ebayCollectAndRemitTaxes containers at the line item level to get more
     * information about the type of tax and the amount.
     *
     * @var bool
     */
    public $ebayCollectAndRemitTax = null;

    /**
     * This array contains a list of one or more getShippingFulfillment call URIs that
     * can be used to retrieve shipping fulfillments that have been set up for the
     * order.
     *
     * @var string[]
     */
    public $fulfillmentHrefs = null;

    /**
     * This container consists of a set of specifications for fulfilling the order,
     * including the type of fulfillment, shipping carrier and service, shipping
     * address, and estimated delivery window. These instructions are derived from the
     * buyer's and seller's eBay account preferences, the listing parameters, and the
     * buyer's checkout selections. The seller can use them as a starting point for
     * packaging, addressing, and shipping the order. Note: Although this container is
     * presented as an array, it currently returns only one set of fulfillment
     * specifications. Additional array members will be supported in future
     * functionality.
     *
     * @var \Ebay\Sell\Fulfillment\Model\FulfillmentStartInstruction[]
     */
    public $fulfillmentStartInstructions = null;

    /**
     * The date and time that the order was last modified. This timestamp is in ISO
     * 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.
     * Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $lastModifiedDate = null;

    /**
     * The unique identifier of the order in legacy format, as traditionally used by
     * the Trading API (and other legacy APIs). Both the orderId field and this field
     * are always returned. Note: In June 2019, Order IDs in REST APIs transitioned to
     * a new format. For the Trading and other legacy APIs, by using version
     * control/compatibility level, users have the option of using the older legacy
     * order ID format, or they can migrate to the new order ID format, which is the
     * same order ID format being used by REST APIs. Although users of the Trading API
     * (and other legacy APIs) can now transition to the new order ID format, this
     * legacyOrderId field will still return order IDs in the old format to distinguish
     * between the old and new order IDs.
     *
     * @var string
     */
    public $legacyOrderId = null;

    /**
     * This array contains the details for all line items that comprise the order.
     *
     * @var \Ebay\Sell\Fulfillment\Model\LineItem[]
     */
    public $lineItems = null;

    /**
     * The degree to which fulfillment of the order is complete. See the
     * OrderFulfillmentStatus type definition for more information about each possible
     * fulfillment state. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:OrderFulfillmentStatus'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $orderFulfillmentStatus = null;

    /**
     * The unique identifier of the order. Both the legacyOrderId field (traditionally
     * used by Trading and other legacy APIS) and this field are always returned. Note:
     * In June 2019, Order IDs in REST APIs transitioned to a new format. For the
     * Trading and other legacy APIs, by using version control/compatibility level,
     * users have the option of using the older legacy order ID format, or they can
     * migrate to the new order ID format, which is the same order ID format being used
     * by REST APIs. The new format is a non-parsable string, globally unique across
     * all eBay marketplaces, and consistent for both single line item and multiple
     * line item orders. These order identifiers are automatically generated after
     * buyer payment, and unlike in the past, instead of just being known and exposed
     * to the seller, these unique order identifiers will also be known and
     * used/referenced by the buyer and eBay customer support.
     *
     * @var string
     */
    public $orderId = null;

    /**
     * The enumeration value returned in this field indicates the current payment
     * status of an order, or in case of a refund request, the current status of the
     * refund. See the OrderPaymentStatusEnum type definition for more information
     * about each possible payment/refund state. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:OrderPaymentStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $orderPaymentStatus = null;

    /**
     * This container consists of detailed payment information for the order, including
     * buyer payment for the order, refund information (if applicable), and seller
     * payment holds (if applicable).
     *
     * @var \Ebay\Sell\Fulfillment\Model\PaymentSummary
     */
    public $paymentSummary = null;

    /**
     * This container consists of a summary of cumulative costs and charges for all
     * line items of an order, including item price, price adjustments, sales taxes,
     * delivery costs, and order discounts.
     *
     * @var \Ebay\Sell\Fulfillment\Model\PricingSummary
     */
    public $pricingSummary = null;

    /**
     * This container is returned for orders that are eligible for eBay's Authenticity
     * Guarantee service. The seller ships Authenticity Guarantee service items to the
     * authentication partner instead of the buyer. The authenticator address is found
     * in the fulfillmentStartInstructions.shippingStep.shipTo container. If the item
     * is successfully authenticated, the authenticator will ship the item to the
     * buyer.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Program
     */
    public $program = null;

    /**
     * An eBay-generated identifier that is used to identify and manage orders through
     * the Selling Manager and Selling Manager Pro tools. This order identifier can
     * also be found on the Orders grid page and in the Sales Record pages in Seller
     * Hub. A salesRecordReference number is only generated and returned at the order
     * level, and not at the order line item level. In cases where the seller does not
     * have a Selling Manager or Selling Manager Pro subscription nor access to Seller
     * Hub, this field may not be returned.
     *
     * @var string
     */
    public $salesRecordReference = null;

    /**
     * The unique eBay user ID of the seller who sold the order.
     *
     * @var string
     */
    public $sellerId = null;

    /**
     * This is the cumulative base amount used to calculate the final value fees for
     * each order. The final value fees are deducted from the seller payout associated
     * with the order. Final value fees are calculated as a percentage of order cost
     * (item cost + shipping cost) and the percentage rate can vary by eBay category.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $totalFeeBasisAmount = null;

    /**
     * This is the cumulative fees accrued for the order and deducted from the seller
     * payout.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $totalMarketplaceFee = null;
}
