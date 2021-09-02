<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains a error or warning related to a call request.
 */
class Error extends AbstractModel
{
    /**
     * The context or source of this error or warning.
     *
     * @var string
     */
    public $category = null;

    /**
     * The name of the domain containing the service or application. For example, sell
     * is a domain.
     *
     * @var string
     */
    public $domain = null;

    /**
     * A positive integer that uniquely identifies the specific error condition that
     * occurred. Your application can use these values as error code identifiers in
     * your customized error-handling algorithms.
     *
     * @var int
     */
    public $errorId = null;

    /**
     * A list of one or more specific request elements (if any) associated with the
     * error or warning. The format of these strings depends on the request payload
     * format. For JSON, use JSONPath notation.
     *
     * @var string[]
     */
    public $inputRefIds = null;

    /**
     * An expanded version of the message field. Maximum length: 200 characters.
     *
     * @var string
     */
    public $longMessage = null;

    /**
     * A message about the error or warning which is device agnostic and readable by
     * end users and application developers. It explains what the error or warning is,
     * and how to fix it (in a general sense). If applicable, the value is localized to
     * the end user's requested locale. Maximum length: 50 characters.
     *
     * @var string
     */
    public $message = null;

    /**
     * A list of one or more specific response elements (if any) associated with the
     * error or warning. The format of these strings depends on the request payload
     * format. For JSON, use JSONPath notation.
     *
     * @var string[]
     */
    public $outputRefIds = null;

    /**
     * Contains a list of name/value pairs that provide additional information
     * concerning this error or warning. Each item in the list is an input parameter
     * that contributed to the error or warning condition.
     *
     * @var \Ebay\Sell\Fulfillment\Model\ErrorParameter[]
     */
    public $parameters = null;

    /**
     * The name of the domain's subsystem or subdivision. For example, fulfillment is a
     * subdomain in the sell domain.
     *
     * @var string
     */
    public $subdomain = null;
}
