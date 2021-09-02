<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains a summary of cumulative costs and charges for all line items
 * of an order, including item price, price adjustments, sales taxes, delivery
 * costs, and order discounts.
 */
class PricingSummary extends AbstractModel
{
    /**
     * This container shows the total amount of any adjustments that were applied to
     * the cost of the item(s) in the order. This amount does not include shipping,
     * discounts, fixed fees, or taxes. This container is only returned if price
     * adjustments were made to the order after the initial transaction/commitment to
     * buy occurred.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $adjustment = null;

    /**
     * This container shows the total cost of delivering the order to the buyer, before
     * any shipping/delivery discount is applied.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $deliveryCost = null;

    /**
     * This container shows the total amount of delivery discounts (including shipping
     * discounts) that apply to the order. This should be a negative real number. This
     * container is only returned if delivery discounts are being applied to the order.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $deliveryDiscount = null;

    /**
     * This container shows the total amount of any special fees applied to the order,
     * such as a tire recycling fee or an electronic waste fee. This container is
     * returned if special fees are being applied to the order and if the fieldGroups
     * is set to TAX_BREAKDOWN.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $fee = null;

    /**
     * This container shows the total amount of all item price discounts (including
     * promotions) that apply to the order and reduce its cost to the buyer. This
     * should be a negative real number. This container is only returned if special
     * discounts are being applied to the order.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $priceDiscountSubtotal = null;

    /**
     * This container shows the cumulative costs of of all units of all line items in
     * the order, before any discount is applied.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $priceSubtotal = null;

    /**
     * This container shows the total amount of tax for the order. To calculate the tax
     * percentage rate, divide this value by the value of the total field. This
     * container is only returned if any type of tax (sales tax, tax on shipping, tax
     * on handling, import tax, etc.) is applied to the order.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $tax = null;

    /**
     * The total cost of the order after adding all line item costs, delivery costs,
     * sales tax, and special fees, and then subtracting all special discounts and
     * price adjustments. Note: For orders that are subject to 'eBay Collect and Remit'
     * tax, the 'Collect and Remit' tax amount for the order will be included in this
     * total value only when the fieldGroups query parameter is set to TAX_BREAKDOWN.
     * If the fieldGroups query parameter is not set to TAX_BREAKDOWN, 'Collect and
     * Remit' will not be added into this total value. To determine if 'Collect and
     * Remit' taxes were added into this total value, the user can check for the
     * corresponding lineItems.ebayCollectAndRemitTaxes and the lineItems.taxes
     * containers in the response. If both of these containers appear for one or more
     * line items in the response with the following taxType values, the 'Collect and
     * Remit' tax amount that the buyer paid is in this amount: STATE_SALES_TAX: US
     * state-mandated sales tax GST: 'Good and Services' tax in Australia or New
     * Zealand VAT: VAT collected for UK or EU countriesPayPal sellers, be aware the
     * 'Collect and Remit' tax that the buyer pays for the order will initially be
     * included when the order funds are distributed to their PayPal account, but
     * PayPal will pull out the 'Collect and Remit' tax amount shortly after the
     * payment clears and distribute the tax to the appropriate taxing authority.
     * Previous to this change, PayPal would strip out the 'Collect and Remit' tax
     * before distributing order funds to the seller's account.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $total = null;
}
