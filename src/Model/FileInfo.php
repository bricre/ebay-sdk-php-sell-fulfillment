<?php

namespace Ebay\Sell\Fulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the files array, which shows the name, ID, file type, and
 * upload date for each provided evidential file.
 */
class FileInfo extends AbstractModel
{
    /**
     * The unique identifier of the evidence file.
     *
     * @var string
     */
    public $fileId = null;

    /**
     * The type of file uploaded. Supported file extensions are .JPEG, .JPG, and .PNG.,
     * and maximum file size allowed is 1.5 MB.
     *
     * @var string
     */
    public $fileType = null;

    /**
     * The seller-provided name of the evidence file.
     *
     * @var string
     */
    public $name = null;

    /**
     * The timestamp in this field shows the date/time when the seller uploaded the
     * evidential document to eBay. The timestamps returned here use the ISO-8601
     * 24-hour date and time format, and the time zone used is Universal Coordinated
     * Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601
     * format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be
     * 2019-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $uploadedDate = null;
}
