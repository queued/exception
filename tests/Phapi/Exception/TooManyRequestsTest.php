<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\TooManyRequests;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\TooManyRequests
 */
class TooManyRequestsTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 429;
    public $statusMessage = 'Too Many Requests';
    public $link = null;
    public $code = null;
    public $description = 'Returned when a request cannot be served due to the application\'s rate limit having been exhausted for the resource.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new TooManyRequests();
    }

    use exceptionTests;
}