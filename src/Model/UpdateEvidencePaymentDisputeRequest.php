<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the request payload of the updateEvidence method. The
 * updateEvidence method is used to update an existing evidence set against a
 * payment dispute with one or more evidence files.
 */
class UpdateEvidencePaymentDisputeRequest extends AbstractModel
{
    /**
     * The unique identifier of the evidence set that is being updated with new
     * evidence files.
     *
     * @var string
     */
    public $evidenceId = null;

    /**
     * This field is used to indicate the type of evidence being provided through one
     * or more evidence files. All evidence files (if more than one) should be
     * associated with the evidence type passed in this field. See the EvidenceTypeEnum
     * type for the supported evidence types. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $evidenceType = null;

    /**
     * This array is used to specify one or more evidence files that will be added to
     * the evidence set associated with a payment dispute. At least one evidence file
     * must be specified in the files array. The unique identifier of an evidence file
     * is returned in the response payload of the uploadEvidence method.
     *
     * @var \Ebay\Sell\Fulfillment\Model\FileEvidence[]
     */
    public $files = null;

    /**
     * This required array identifies the order line item(s) for which the evidence
     * file(s) will be applicable. Both the itemId and lineItemID fields are needed to
     * identify each order line item, and both of these values are returned under the
     * evidenceRequests.lineItems array in the getPaymentDispute response.
     *
     * @var \Ebay\Sell\Fulfillment\Model\OrderLineItems[]
     */
    public $lineItems = null;
}
