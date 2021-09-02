<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base response of the getActivities method, and includes
 * a log of all activities of a payment dispute, from creation to resolution.
 */
class PaymentDisputeActivityHistory extends AbstractModel
{
    /**
     * This array holds all activities of a payment dispute, from creation to
     * resolution. For each activity, the activity type, the actor, and a timestamp is
     * shown. The getActivities response is dynamic, and grows with each recorded
     * activity.
     *
     * @var \Ebay\Sell\Fulfillment\Model\PaymentDisputeActivity[]
     */
    public $activity = null;
}
