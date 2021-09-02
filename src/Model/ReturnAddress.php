<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the payment dispute methods, and is relevant if the buyer
 * will be returning the item to the seller.
 */
class ReturnAddress extends AbstractModel
{
    /**
     * The first line of the street address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address. This line is not always necessarily, but
     * is often used for apartment number or suite number, or other relevant
     * information that can not fit on the first line.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city of the return address.
     *
     * @var string
     */
    public $city = null;

    /**
     * The country's two-digt, ISO 3166-1 country code. See the enumeration type for a
     * country's value. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The county of the return address. Counties are not applicable to all countries.
     *
     * @var string
     */
    public $county = null;

    /**
     * The full name of return address owner.
     *
     * @var string
     */
    public $fullName = null;

    /**
     * The postal code of the return address.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * This container shows the seller's primary phone number associated with the
     * return address.
     *
     * @var \Ebay\Sell\Fulfillment\Model\Phone
     */
    public $primaryPhone = null;

    /**
     * The state or province of the return address.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
