<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains the name and value of an input parameter that contributed to
 * a specific error or warning condition.
 */
class ErrorParameter extends AbstractModel
{
    /**
     * This is the name of input field that caused an issue with the call request.
     *
     * @var string
     */
    public $name = null;

    /**
     * This is the actual value that was passed in for the element specified in the
     * name field.
     *
     * @var string
     */
    public $value = null;
}
