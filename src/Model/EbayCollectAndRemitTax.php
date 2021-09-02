<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about the type and amount of tax that eBay will
 * collect and remit to the state, province, country, or other taxing authority in
 * the buyer's location, as required by that taxing authority. 'Collect and Remit'
 * tax includes US state-mandated sales tax, 'Goods and Services' tax in Australia
 * or New Zealand, VAT collected for the UK and EU countries.
 */
class EbayCollectAndRemitTax extends AbstractModel
{
    /**
     * The monetary amount of the 'Collect and Remit' tax. This presently includes US
     * state-mandated sales tax, 'Good and Services' tax in Australia and New Zealand,
     * and VAT collected for the UK and EU countries. Note: If the corresponding
     * taxType is STATE_SALES_TAX, GST, or VAT, and the lineItems.taxes container also
     * appears for this line item with the same tax amount, the order is subject to
     * 'eBay Collect and Remit' tax. For orders that are subject to 'eBay Collect and
     * Remit' tax, the tax amount in this field will be included in the
     * lineItems.total, paymentSummary.payments.amount, paymentSummary.totalDueSeller,
     * and pricingSummary.total fields. PayPal sellers, be aware the sales tax that the
     * buyer pays for the order will initially be included when the order funds are
     * distributed to their PayPal account, but PayPal will pull out the sales tax
     * amount shortly after the payment clears and will distribute the sales tax to the
     * appropriate taxing authority. Previous to this change, PayPal would strip out
     * the 'Collect and Remit' tax before distributing order funds to the seller's
     * account.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $amount = null;

    /**
     * This container field describes the line-item level VAT tax details. Note: On
     * January 31, 2022, the
     * orders.fulfillmentStartInstructions.shippingStep.shipTo.contactAddress.addressLine2
     * will stop being used to return VAT information, so developers should make sure
     * they integrate with the new fields before that time.
     *
     * @var \Ebay\Sell\Fulfillment\Model\EbayTaxReference
     */
    public $ebayReference = null;

    /**
     * The type of tax and fees that eBay will collect and remit to the taxing or fee
     * authority. See the TaxTypeEnum type definition for more information about each
     * tax or fee type. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:TaxTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $taxType = null;

    /**
     * This field indicates the collection method used to collect the 'Collect and
     * Remit' tax for the order. This field is always returned for orders subject to
     * 'Collect and Remit' tax, and its value is always NET. Note: Although the
     * collectionMethod field is returned for all orders subject to 'Collect and Remit'
     * tax, the collectionMethod field and the CollectionMethodEnum type are not
     * currently of any practical use, although this field may have use in the future.
     * If and when the logic of this field is changed, this note will be updated and a
     * note will also be added to the Release Notes. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CollectionMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $collectionMethod = null;
}
