<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about a digital gift card line item that was
 * purchased as a gift, and sent to the recipient by email.
 */
class GiftDetails extends AbstractModel
{
    /**
     * This field contains the gift message from the buyer to the gift recipient. This
     * field is only returned if the buyer of the gift included a message for the gift.
     *
     * @var string
     */
    public $message = null;

    /**
     * The email address of the gift recipient. The seller will send the digital gift
     * card to this email address.
     *
     * @var string
     */
    public $recipientEmail = null;

    /**
     * The name of the buyer, which will appear on the email that is sent to the gift
     * recipient.
     *
     * @var string
     */
    public $senderName = null;
}
