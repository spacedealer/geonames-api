<?php

/**
 * GeonamesTest.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
class GeonamesTest extends PHPUnit_Framework_TestCase
{
    public function testPostalCodeSearch()
    {
        // you may use a different username for testing - demo user is often over the daily usage limit :-0
        $username = 'demo';

        $client = new spacedealer\geonames\Geonames($username);
        $response = $client->postalCodeSearch([
            'postalcode' => '10119',
        ]);

        $data = $response->toArray();
        $this->assertArrayHasKey('postalCodes', $data);
    }
}