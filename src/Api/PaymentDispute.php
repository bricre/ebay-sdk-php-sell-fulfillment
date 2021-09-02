<?php

namespace Ebay\Sell\Fulfillment\Api;

use Ebay\Sell\Fulfillment\Model\AcceptPaymentDisputeRequest as AcceptPaymentDisputeRequest;
use Ebay\Sell\Fulfillment\Model\AddEvidencePaymentDisputeRequest as AddEvidencePaymentDisputeRequest;
use Ebay\Sell\Fulfillment\Model\AddEvidencePaymentDisputeResponse as AddEvidencePaymentDisputeResponse;
use Ebay\Sell\Fulfillment\Model\ContestPaymentDisputeRequest as ContestPaymentDisputeRequest;
use Ebay\Sell\Fulfillment\Model\DisputeSummaryResponse as DisputeSummaryResponse;
use Ebay\Sell\Fulfillment\Model\FileEvidence as FileEvidence;
use Ebay\Sell\Fulfillment\Model\PaymentDispute as PaymentDisputeModel;
use Ebay\Sell\Fulfillment\Model\PaymentDisputeActivityHistory as PaymentDisputeActivityHistory;
use Ebay\Sell\Fulfillment\Model\UpdateEvidencePaymentDisputeRequest as UpdateEvidencePaymentDisputeRequest;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class PaymentDispute extends AbstractAPI
{
    /**
     * This method retrieves detailed information on a specific payment dispute. The
     * payment dispute identifier is passed in as path parameter at the end of the call
     * URI. Below is a summary of the information that is retrieved: Current status of
     * payment dispute Amount of the payment dispute Reason the payment dispute was
     * opened Order and line items associated with the payment dispute Seller response
     * options if an action is currently required on the payment dispute Details on the
     * results of the payment dispute if it has been closed Details on any evidence
     * that was provided by the seller to fight the payment dispute.
     *
     * @param string $payment_dispute_id This is the unique identifier of the payment
     *                                   dispute. This path parameter must be passed in at the end of the call URI to
     *                                   identify the payment dispute to retrieve. This identifier is automatically
     *                                   created by eBay once the payment dispute comes into the eBay managed payments
     *                                   system. The unique identifier for payment disputes is returned in the
     *                                   paymentDisputeId field in the getPaymentDisputeSummaries response.
     *
     * @return PaymentDisputeModel
     */
    public function get(string $payment_dispute_id): PaymentDisputeModel
    {
        return $this->client->request('getPaymentDispute', 'GET', "payment_dispute/{$payment_dispute_id}",
            [
            ]
        );
    }

    /**
     * This call retrieves a specific evidence file for a payment dispute. The
     * following three identifying parameters are needed in the call URI:
     * payment_dispute_id: the identifier of the payment dispute. The identifier of
     * each payment dispute is returned in the getPaymentDisputeSummaries response.
     * evidence_id: the identifier of the evidential file set. The identifier of an
     * evidential file set for a payment dispute is returned under the evidence array
     * in the getPaymentDispute response. file_id: the identifier of an evidential
     * file. This file must belong to the evidential file set identified through the
     * evidence_id query parameter. The identifier of each evidential file is returned
     * under the evidence.files array in the getPaymentDispute response. An actual
     * binary file is returned if the call is successful. An error will occur if any of
     * three identifiers are invalid.
     *
     * @param string $payment_dispute_id The identifier of the payment dispute. The
     *                                   identifier of each payment dispute is returned in the getPaymentDisputeSummaries
     *                                   response. This identifier is passed in as a path parameter at the end of the
     *                                   call URI.
     * @param array  $queries            options:
     *                                   'evidence_id'	string	The identifier of the evidential file set. The identifier
     *                                   of an evidential file set for a payment dispute is returned under the evidence
     *                                   array in the getPaymentDispute response. Below is an example of the syntax to
     *                                   use for this query parameter: evidence_id=12345678
     *                                   'file_id'	string	The identifier of an evidential file. This file must belong to
     *                                   the evidential file set identified through the evidence_id query parameter. The
     *                                   identifier of each evidential file is returned under the evidence.files array in
     *                                   the getPaymentDispute response. Below is an example of the syntax to use for
     *                                   this query parameter: file_id=12345678
     *
     * @return mixed
     */
    public function fetchEvidenceContent(string $payment_dispute_id, array $queries = [])
    {
        return $this->client->request('fetchEvidenceContent', 'GET', "payment_dispute/{$payment_dispute_id}/fetch_evidence_content",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method retrieve a log of activity for a payment dispute. The identifier of
     * the payment dispute is passed in as a path parameter. The output includes a
     * timestamp for each action of the payment dispute, from creation to resolution,
     * and all steps in between.
     *
     * @param string $payment_dispute_id This is the unique identifier of the payment
     *                                   dispute. This path parameter must be passed in at the end of the call URI to
     *                                   identify the payment dispute for which the user wishes to see all activity. This
     *                                   identifier is automatically created by eBay once the payment dispute comes into
     *                                   the eBay managed payments system. The unique identifier for payment disputes is
     *                                   returned in the paymentDisputeId field in the getPaymentDisputeSummaries
     *                                   response. This path parameter is required, and the actual identifier value is
     *                                   passed in right after the payment_dispute resource. See the Resource URI above.
     *
     * @return PaymentDisputeActivityHistory
     */
    public function getActivities(string $payment_dispute_id): PaymentDisputeActivityHistory
    {
        return $this->client->request('getActivities', 'GET', "payment_dispute/{$payment_dispute_id}/activity",
            [
            ]
        );
    }

    /**
     * This method is used retrieve one or more payment disputes filed against the
     * seller. These payment disputes can be open or recently closed. The following
     * filter types are available in the request payload to control the payment
     * disputes that are returned: Dispute filed against a specific order (order_id
     * parameter is used) Dispute(s) filed by a specific buyer (buyer_username
     * parameter is used) Dispute(s) filed within a specific date range (open_date_from
     * and/or open_date_to parameters are used) Disputes in a specific state
     * (payment_dispute_status parameter is used)More than one of these filter types
     * can be used together. See the request payload request fields for more
     * information about how each filter is used. If none of the filters are used, all
     * open and recently closed payment disputes are returned. Pagination is also
     * available. See the limit and offset fields for more information on how
     * pagination is used for this method.
     *
     * @param array $queries options:
     *                       'order_id'	string	This filter is used if the seller wishes to retrieve one or
     *                       more payment disputes filed against a specific order. It is possible that there
     *                       can be more than one dispute filed against an order if the order has multiple
     *                       line items. If this filter is used, any other filters are ignored. Note: The
     *                       order identifier passed into this field must be an Order ID in the new format.
     *                       The legacy APIs still support the old and new order ID format to identify
     *                       orders, but only the new order ID format is supported in REST-based APIs. eBay
     *                       rolled out a new Order ID format in June 2019.
     *                       'buyer_username'	string	This filter is used if the seller wishes to retrieve one
     *                       or more payment disputes opened by a specific seller. The string that is passed
     *                       in to this query parameter is the eBay user ID of the buyer.
     *                       'open_date_from'	string	The open_date_from and/or open_date_to date filters are
     *                       used if the seller wishes to retrieve payment disputes opened within a specific
     *                       date range. A maximum date range that may be set with the open_date_from and/or
     *                       open_date_to filters is 90 days. These date filters use the ISO-8601 24-hour
     *                       date and time format, and time zone used is Universal Coordinated Time (UTC),
     *                       also known as Greenwich Mean Time (GMT), or Zulu. The open_date_from field sets
     *                       the beginning date of the date range, and can be set as far back as 18 months
     *                       from the present time. If a open_date_from field is used, but a open_date_to
     *                       field is not used, the open_date_to value will default to 90 days after the date
     *                       specified in the open_date_from field, or to the present time if less than 90
     *                       days in the past. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ.
     *                       An example would be 2019-08-04T19:09:02.768Z.
     *                       'open_date_to'	string	The open_date_from and/or open_date_to date filters are
     *                       used if the seller wishes to retrieve payment disputes opened within a specific
     *                       date range. A maximum date range that may be set with the open_date_from and/or
     *                       open_date_to filters is 90 days. These date filters use the ISO-8601 24-hour
     *                       date and time format, and the time zone used is Universal Coordinated Time
     *                       (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The open_date_to field
     *                       sets the ending date of the date range, and can be set up to 90 days from the
     *                       date set in the open_date_from field. The ISO-8601 format looks like this:
     *                       yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *                       'payment_dispute_status'	string	This filter is used if the seller wishes to only
     *                       retrieve payment disputes in a specific state. More than one value can be
     *                       specified. If no payment_dispute_status filter is used, payment disputes in all
     *                       states are returned in the response. See DisputeStateEnum type for supported
     *                       values.
     *                       'limit'	string	The value passed in this query parameter sets the maximum number
     *                       of payment disputes to return per page of data. The value passed in this field
     *                       should be an integer from 1 to 200. If this query parameter is not set, up to
     *                       200 records will be returned on each page of results. Min: 1; Max: 200; Default:
     *                       200
     *                       'offset'	string	This field is used to specify the number of records to skip in
     *                       the result set before returning the first payment dispute in the paginated
     *                       response. A zero-based index is used, so if you set the offset value to 0
     *                       (default value), the first payment dispute in the result set appears at the top
     *                       of the response. Combine offset with the limit parameter to control the payment
     *                       disputes returned in the response. For example, if you supply an offset value of
     *                       0 and a limit value of 10, the response will contain the first 10 payment
     *                       disputes from the result set that matches the input criteria. If you supply an
     *                       offset value of 10 and a limit value of 20, the response will contain payment
     *                       disputes 11-30 from the result set that matches the input criteria. Min: 0; Max:
     *                       total number of payment disputes - 1; Default: 0
     *
     * @return DisputeSummaryResponse
     */
    public function getSummaries(array $queries = []): DisputeSummaryResponse
    {
        return $this->client->request('getPaymentDisputeSummaries', 'GET', 'payment_dispute_summary',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method is used if the seller wishes to contest a payment dispute initiated
     * by the buyer. The unique identifier of the payment dispute is passed in as a
     * path parameter, and unique identifiers for payment disputes can be retrieved
     * with the getPaymentDisputeSummaries method. Note: Before contesting a payment
     * dispute, the seller must upload all evidence files using the addEvidence and
     * updateEvidence methods. Once the seller has officially contested the dispute
     * (using contestPaymentDispute), the addEvidence and updateEvidence methods can no
     * longer be used. In the evidenceRequests array of the getPaymentDispute response,
     * eBay prompts the seller with the type of evidence file(s) that will be needed to
     * contest the payment dispute. If a seller decides to contest a payment dispute,
     * that seller should be prepared to provide evidential documents such as proof of
     * delivery, proof of authentication, or other documents. The type of evidential
     * documents that the seller will provide will depend on why the buyer initiated
     * the payment dispute. The revision field in the request payload is required, and
     * the returnAddress field should be supplied if the seller is expecting the buyer
     * to return the item. See the Request Payload section for more information on
     * theste fields.
     *
     * @param string                       $payment_dispute_id This is the unique identifier of the payment
     *                                                         dispute. This path parameter must be passed into the call URI to identify the
     *                                                         payment dispute for which the user plans to contest. This identifier is
     *                                                         automatically created by eBay once the payment dispute comes into the eBay
     *                                                         managed payments system. The unique identifier for payment disputes is returned
     *                                                         in the paymentDisputeId field in the getPaymentDisputeSummaries response. This
     *                                                         path parameter is required, and the actual identifier value is passed in right
     *                                                         after the payment_dispute resource. See the Resource URI above.
     * @param ContestPaymentDisputeRequest $Model
     *
     * @return mixed
     */
    public function contest(string $payment_dispute_id, ContestPaymentDisputeRequest $Model)
    {
        return $this->client->request('contestPaymentDispute', 'POST', "payment_dispute/{$payment_dispute_id}/contest",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method is used if the seller wishes to accept a payment dispute. The unique
     * identifier of the payment dispute is passed in as a path parameter, and unique
     * identifiers for payment disputes can be retrieved with the
     * getPaymentDisputeSummaries method. The revision field in the request payload is
     * required, and the returnAddress field should be supplied if the seller is
     * expecting the buyer to return the item. See the Request Payload section for more
     * information on theste fields.
     *
     * @param string                      $payment_dispute_id This is the unique identifier of the payment
     *                                                        dispute. This path parameter must be passed into the call URI to identify the
     *                                                        payment dispute for which the user plans to accept. This identifier is
     *                                                        automatically created by eBay once the payment dispute comes into the eBay
     *                                                        managed payments system. The unique identifier for payment disputes is returned
     *                                                        in the paymentDisputeId field in the getPaymentDisputeSummaries response. This
     *                                                        path parameter is required, and the actual identifier value is passed in right
     *                                                        after the payment_dispute resource. See the Resource URI above.
     * @param AcceptPaymentDisputeRequest $Model
     *
     * @return mixed
     */
    public function accept(string $payment_dispute_id, AcceptPaymentDisputeRequest $Model)
    {
        return $this->client->request('acceptPaymentDispute', 'POST', "payment_dispute/{$payment_dispute_id}/accept",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method is used to upload an evidence file for a contested payment dispute.
     * The unique identifier of the payment dispute is passed in as a path parameter,
     * and unique identifiers for payment disputes can be retrieved with the
     * getPaymentDisputeSummaries method. The uploadEvidenceFile only uploads an
     * encrypted, binary image file (using multipart/form-data HTTP request header),
     * and does not have a request payload. The three image formats supported at this
     * time are .JPEG, .JPG, and .PNG. Once the file is successfully uploaded, the
     * seller will need to grab the fileId value in the response payload to add this
     * file to a new evidence set using the addEvidence method, or to add this file to
     * an existing evidence set using the updateEvidence method.
     *
     * @param string $payment_dispute_id This is the unique identifier of the payment
     *                                   dispute. This path parameter must be passed into the call URI to identify the
     *                                   payment dispute for which the user plans to upload an evidence file. This
     *                                   identifier is automatically created by eBay once the payment dispute comes into
     *                                   the eBay managed payments system. The unique identifier for payment disputes is
     *                                   returned in the paymentDisputeId field in the getPaymentDisputeSummaries
     *                                   response. This path parameter is required, and the actual identifier value is
     *                                   passed in right after the payment_dispute resource. See the Resource URI above.
     *
     * @return FileEvidence
     */
    public function uploadEvidenceFile(string $payment_dispute_id): FileEvidence
    {
        return $this->client->request('uploadEvidenceFile', 'POST', "payment_dispute/{$payment_dispute_id}/upload_evidence_file",
            [
            ]
        );
    }

    /**
     * This method is used by the seller to add one or more evidence files to address a
     * payment dispute initiated by the buyer. The unique identifier of the payment
     * dispute is passed in as a path parameter, and unique identifiers for payment
     * disputes can be retrieved with the getPaymentDisputeSummaries method. Note: All
     * evidence files should be uploaded using addEvidence and updateEvidence before
     * the seller decides to contest the payment dispute. Once the seller has
     * officially contested the dispute (using contestPaymentDispute or through My
     * eBay), the addEvidence and updateEvidence methods can no longer be used. In the
     * evidenceRequests array of the getPaymentDispute response, eBay prompts the
     * seller with the type of evidence file(s) that will be needed to contest the
     * payment dispute. The file(s) to add are identified through the files array in
     * the request payload. Adding one or more new evidence files for a payment dispute
     * triggers the creation of an evidence file, and the unique identifier for the new
     * evidence file is automatically generated and returned in the evidenceId field of
     * the addEvidence response payload upon a successful call. The type of evidence
     * being added should be specified in the evidenceType field. All files being added
     * (if more than one) should correspond to this evidence type. Upon a successful
     * call, an evidenceId value is returned in the response. This indicates that a new
     * evidence set has been created for the payment dispute, and this evidence set
     * includes the evidence file(s) that were passed in to the fileId array. The
     * evidenceId value will be needed if the seller wishes to add to the evidence set
     * by using the updateEvidence method, or if they want to retrieve a specific
     * evidence file within the evidence set by using the fetchEvidenceContent method.
     *
     * @param string                           $payment_dispute_id This is the unique identifier of the payment
     *                                                             dispute. This path parameter must be passed into the call URI to identify the
     *                                                             payment dispute for which the user plans to add evidence for a contested payment
     *                                                             dispute. This identifier is automatically created by eBay once the payment
     *                                                             dispute comes into the eBay managed payments system. The unique identifier for
     *                                                             payment disputes is returned in the paymentDisputeId field in the
     *                                                             getPaymentDisputeSummaries response. This path parameter is required, and the
     *                                                             actual identifier value is passed in right after the payment_dispute resource.
     *                                                             See the Resource URI above.
     * @param AddEvidencePaymentDisputeRequest $Model
     *
     * @return AddEvidencePaymentDisputeResponse
     */
    public function addEvidence(string $payment_dispute_id, AddEvidencePaymentDisputeRequest $Model): AddEvidencePaymentDisputeResponse
    {
        return $this->client->request('addEvidence', 'POST', "payment_dispute/{$payment_dispute_id}/add_evidence",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method is used by the seller to update an existing evidence set for a
     * payment dispute with one or more evidence files. The unique identifier of the
     * payment dispute is passed in as a path parameter, and unique identifiers for
     * payment disputes can be retrieved with the getPaymentDisputeSummaries method.
     * Note: All evidence files should be uploaded using addEvidence and updateEvidence
     * before the seller decides to contest the payment dispute. Once the seller has
     * officially contested the dispute (using contestPaymentDispute or through My
     * eBay), the addEvidence and updateEvidence methods can no longer be used. In the
     * evidenceRequests array of the getPaymentDispute response, eBay prompts the
     * seller with the type of evidence file(s) that will be needed to contest the
     * payment dispute. The unique identifier of the evidence set to update is
     * specified through the evidenceId field, and the file(s) to add are identified
     * through the files array in the request payload. The unique identifier for an
     * evidence file is automatically generated and returned in the fileId field of the
     * uploadEvidence response payload upon a successful call. Sellers must make sure
     * to capture the fileId value for each evidence file that is uploaded with the
     * uploadEvidence method. The type of evidence being added should be specified in
     * the evidenceType field. All files being added (if more than one) should
     * correspond to this evidence type. Upon a successful call, an http status code of
     * 204 Success is returned. There is no response payload unless an error occurs. To
     * verify that a new file is a part of the evidence set, the seller can use the
     * fetchEvidenceContent method, passing in the proper evidenceId and fileId values.
     *
     * @param string                              $payment_dispute_id This is the unique identifier of the payment
     *                                                                dispute. This path parameter must be passed into the call URI to identify the
     *                                                                payment dispute for which the user plans to update the evidence set for a
     *                                                                contested payment dispute. This identifier is automatically created by eBay once
     *                                                                the payment dispute comes into the eBay managed payments system. The unique
     *                                                                identifier for payment disputes is returned in the paymentDisputeId field in the
     *                                                                getPaymentDisputeSummaries response. This path parameter is required, and the
     *                                                                actual identifier value is passed in right after the payment_dispute resource.
     *                                                                See the Resource URI above.
     * @param UpdateEvidencePaymentDisputeRequest $Model
     *
     * @return mixed
     */
    public function updateEvidence(string $payment_dispute_id, UpdateEvidencePaymentDisputeRequest $Model)
    {
        return $this->client->request('updateEvidence', 'POST', "payment_dispute/{$payment_dispute_id}/update_evidence",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
