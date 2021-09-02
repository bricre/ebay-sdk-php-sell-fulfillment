<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains the details of a geographical address.
 */
class Address extends AbstractModel
{
    /**
     * The first line of the street address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address. This field can be used for additional
     * address information, such as a suite or apartment number. This field will be
     * returned if defined for the shipping address.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city of the shipping destination.
     *
     * @var string
     */
    public $city = null;

    /**
     * The country of the shipping destination, represented as a two-letter ISO 3166-1
     * alpha-2 country code. For example, US represents the United States, and DE
     * represents Germany. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The county of the shipping destination. Counties typically, but not always,
     * contain multiple cities or towns. This field is returned if known/available.
     *
     * @var string
     */
    public $county = null;

    /**
     * The postal code of the shipping destination. Usually referred to as Zip codes in
     * the US. Most countries have postal codes, but not all. The postal code will be
     * returned if applicable.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The state or province of the shipping destination. Most countries have states or
     * provinces, but not all. The state or province will be returned if applicable.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
