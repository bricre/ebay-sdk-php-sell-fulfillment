<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the returnAddress.
 */
class Phone extends AbstractModel
{
    /**
     * The seller's country calling code. This field is needed if the buyer is located
     * in a different country than the seller. It is also OK to provide if the buyer
     * and seller are both located in the same country. For a full list of calling
     * codes for all countries, see the countrycode.org site.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * The seller's primary phone number associated with the return address. When this
     * number is provided in a contestPaymentDispute or contestPaymentDispute method,
     * it is provided as one continuous numeric string, including the area code. So, if
     * the phone number's area code was '408', a number in this field may look
     * something like this: &quot;number&quot; : &quot;4088084356&quot; If the buyer is
     * located in a different country than the seller, the seller's country calling
     * code will need to be specified in the countryCode field.
     *
     * @var string
     */
    public $number = null;
}
