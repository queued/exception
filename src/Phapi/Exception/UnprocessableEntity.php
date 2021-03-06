<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Unprocessable Entity
 *
 * Response code 422
 *
 * Returned when an uploaded file is unable to be processed.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class UnprocessableEntity extends Exception {

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 422;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Unprocessable Entity';

    /**
     * Error message
     *
     * @var string
     */
    protected $description = 'Returned when an uploaded file is unable to be processed.';
}