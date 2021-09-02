<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains a string field representing a telephone number.
 */
class PhoneNumber extends AbstractModel
{
    /**
     * The primary telephone number for the shipping recipient.
     *
     * @var string
     */
    public $phoneNumber = null;
}
