<?php
/**
 * GeonamesTest.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\tests\geonames\api;

use spacedealer\geonames\api\Geonames;

/**
 * Class GeonamesTest
 */
class GeonamesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string you may use your own registered username for testing - demo user is often over the daily usage limit :-0
     */
    public $username = 'demo';

    /**
     * @dataProvider dataProvider
     */
    public function testCommands($command, $params)
    {
        $client = new Geonames($this->username);

        /** @var \spacedealer\geonames\api\Response $response */
        $response = $client->$command($params);

        // skip test if user is over limit
        if (!$response->isOk() && $response['value'] == 18) {
            $this->markTestSkipped($response['message']);
        }
        $this->assertTrue($response->isOk());
    }

    /**
     * @return array
     */
    public function dataProvider()
    {
        return [
            [
                'postalCodeSearch',
                [
                    'postalcode' => '10997',
                    'country' => 'de',
                ]
            ]
        ];
    }
}
