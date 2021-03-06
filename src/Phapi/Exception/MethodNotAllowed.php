<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Method Not Allowed
 *
 * Response code 405
 *
 * The requested method is not allowed.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class MethodNotAllowed extends Exception {

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 405;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Method Not Allowed';

    /**
     * Error message
     *
     * @var string
     */
    protected $description = 'The requested method is not allowed.';
}