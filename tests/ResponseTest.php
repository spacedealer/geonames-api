<?php
/**
 * ResponseTest.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\tests\geonames\api;

use spacedealer\geonames\api\Response;

/**
 * Class ResponseTest
 */
class ResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test for correct status response handling
     */
    public function testNotOk()
    {
        $response = new Response([
            'status' => [
                'value' => 0,
                'message' => 'unkown',
            ]
        ]);

        $this->assertFalse($response->isOk());
    }

    /**
     * Test for single root recognition
     */
    public function testSingleRootProperties()
    {
        $response = new Response([
            'status' => [
                'code' => 0,
            ]
        ]);

        $array = $response->toArray();
        $this->assertEquals(['code' => 0], $array);
    }

    /**
     * Test for single root recognition
     */
    public function testMultipleRootProperties()
    {
        $response = new Response([
            'lat' => 0,
            'lng' => 0,
        ]);

        $array = $response->toArray();
        $this->assertEquals([
            'lat' => 0,
            'lng' => 0,
        ], $array);
    }
}
