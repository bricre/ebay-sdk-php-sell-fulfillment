<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This container consists of address information that can be used by sellers for
 * tax purpose.
 */
class TaxAddress extends AbstractModel
{
    /**
     * The city name that can be used by sellers for tax purpose.
     *
     * @var string
     */
    public $city = null;

    /**
     * The country code that can be used by sellers for tax purpose, represented as a
     * two-letter ISO 3166-1 alpha-2 country code. For example, US represents the
     * United States, and DE represents Germany. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * The postal code that can be used by sellers for tax purpose. Usually referred to
     * as Zip codes in the US.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The state name that can be used by sellers for tax purpose.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
