<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about any sales tax applied to a line item.
 */
class Tax extends AbstractModel
{
    /**
     * The monetary amount of the tax. The taxes array is always returned for each line
     * item in the order, but this amount will only be returned when the line item is
     * subject to any type of sales tax.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Amount
     */
    public $amount = null;

    /**
     * Tax type. This field is only available when fieldGroups is set to TAX_BREAKDOWN.
     * If the order has fees, a breakdown of the fees is also provided. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:TaxTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $taxType = null;
}
