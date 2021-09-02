<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the evidence array that is returned in the
 * getPaymentDispute response if one or more evidential documents are associated
 * with the payment dispute.
 */
class DisputeEvidence extends AbstractModel
{
    /**
     * Unique identifier of the evidential file set. Potentially, each evidential file
     * set can have more than one file, that is why there is this file set identifier,
     * and then an identifier for each file within this file set.
     *
     * @var string
     */
    public $evidenceId = null;

    /**
     * This enumeration value shows the type of evidential file provided. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $evidenceType = null;

    /**
     * This array shows the name, ID, file type, and upload date for each provided
     * file.
     *
     * @var \Ebay\Sell\Fulfillment\Model\FileInfo[]
     */
    public $files = null;

    /**
     * This array shows one or more order line items associated with the evidential
     * document that has been provided.
     *
     * @var \Ebay\Sell\Fulfillment\Model\OrderLineItems[]
     */
    public $lineItems = null;

    /**
     * The timestamp in this field shows the date/time when the seller provided a
     * requested evidential document to eBay. The timestamps returned here use the
     * ISO-8601 24-hour date and time format, and the time zone used is Universal
     * Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The
     * ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be
     * 2019-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $providedDate = null;

    /**
     * The timestamp in this field shows the date/time when eBay requested the
     * evidential document from the seller in response to a payment dispute. The
     * timestamps returned here use the ISO-8601 24-hour date and time format, and the
     * time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean
     * Time (GMT), or Zulu. The ISO-8601 format looks like this:
     * yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $requestDate = null;

    /**
     * The timestamp in this field shows the date/time when the seller was expected to
     * provide a requested evidential document to eBay. The timestamps returned here
     * use the ISO-8601 24-hour date and time format, and the time zone used is
     * Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or
     * Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example
     * would be 2019-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $respondByDate = null;

    /**
     * This array shows the shipping carrier and shipment tracking number associated
     * with each shipment package of the order. This array is returned if the seller
     * has provided shipment tracking information as evidence to support
     * PROOF_OF_DELIVERY.
     *
     * @var \Ebay\Sell\Fulfillment\Model\TrackingInfo[]
     */
    public $shipmentTracking = null;
}
