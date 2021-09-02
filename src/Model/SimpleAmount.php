<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the monetary value of the payment dispute, and the currency
 * used.
 */
class SimpleAmount extends AbstractModel
{
    /**
     * A three-letter ISO 4217 code (such as USD for US site) that indicates the
     * currency of the amount in the value field. Both the value and currency fields
     * are always returned with the amount container. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary amount of the payment dispute. Both the value and currency fields
     * are always returned with the amount container.
     *
     * @var string
     */
    public $value = null;
}
