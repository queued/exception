<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Not Acceptable
 *
 * Response code 406
 *
 * Returned by the API when an invalid format is specified in the request.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class NotAcceptable extends Exception {

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 406;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Not Acceptable';

    /**
     * Error message
     *
     * @var string
     */
    protected $description = 'Returned by the API when an invalid format is specified in the request.';
}