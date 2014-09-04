<?php

/**
 * GeonamesTest.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
class ResponseTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test for correct status response handling
     */
    public function testNotOk()
    {
        $response = new \spacedealer\geonames\api\Response([
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
        /** @var \spacedealer\geonames\api\Response $response */
        $response = new \spacedealer\geonames\api\Response([
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
        /** @var \spacedealer\geonames\api\Response $response */
        $response = new \spacedealer\geonames\api\Response([
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