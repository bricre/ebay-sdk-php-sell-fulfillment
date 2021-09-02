<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the monetary value of an amount. It can provide the amount in
 * both the currency used on the eBay site where an item is being offered and the
 * conversion of that value into another currency, if applicable.
 */
class Amount extends AbstractModel
{
    /**
     * A three-letter ISO 4217 code that indicates the currency of the amount in the
     * convertedFromValue field. This value is required or returned only if currency
     * conversion/localization is required, and represents the pre-conversion currency.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $convertedFromCurrency = null;

    /**
     * The monetary amount before any conversion is performed, in the currency
     * specified by the convertedFromCurrency field. This value is required or returned
     * only if currency conversion/localization is required. The value field contains
     * the converted amount of this value, in the currency specified by the currency
     * field.
     *
     * @var string
     */
    public $convertedFromValue = null;

    /**
     * A three-letter ISO 4217 code that indicates the currency of the amount in the
     * value field. If currency conversion/localization is required, this is the
     * post-conversion currency of the amount in the value field. Default: The default
     * currency of the eBay marketplace that hosts the listing. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary amount, in the currency specified by the currency field. If
     * currency conversion/localization is required, this value is the converted
     * amount, and the convertedFromValue field contains the amount in the original
     * currency. Required in the amount type.
     *
     * @var string
     */
    public $value = null;
}
