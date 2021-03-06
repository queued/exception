<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Request Entity Too Large
 *
 * Response code 413
 *
 * The requested entity is too large.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class RequestEntityTooLarge extends Exception {

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 413;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Request Entity Too Large';

    /**
     * Error message
     *
     * @var string
     */
    protected $description = 'The requested entity is too large.';
}