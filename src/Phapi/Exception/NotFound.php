<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Not Found
 *
 * Response code 404
 *
 * The URI requested is invalid or the resource requested, such as a user, does not exists.
 * Also returned when the requested format is not supported by the requested method.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class NotFound extends Exception {

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 404;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Not Found';

    /**
     * Error message
     *
     * @var string
     */
    protected $description =
        'The URI requested is invalid or the resource requested, such as a user, does not exists. Also returned when the requested format is not supported by the requested method.';
}