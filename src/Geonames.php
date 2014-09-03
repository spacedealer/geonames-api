<?php
/**
 * Geonames.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */


namespace spacedealer\geonames;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Message\Response;

/**
 * Class Geonames
 *
 *
 * @method array astergdem()                    astergdem(array $params)
 * @method array children()                    children(array $params)
 * @method array cities()                        cities(array $params)
 * @method array countryCode()                    countryCode(array $params)
 * @method array countryInfo()                    countryInfo(array $params)
 * @method array countrySubdivision()            countrySubdivision(array $params)
 * @method array earthquakes()                    earthquakes(array $params)
 * @method array extendedFindNearby()            extendedFindNearby(array $params)
 * @method array findNearby()                    findNearby(array $params)
 * @method array findNearbyPlaceName()            findNearbyPlaceName(array $params)
 * @method array findNearbyPostalCodes()        findNearbyPostalCodes(array $params)
 * @method array findNearbyStreets()            findNearbyStreets(array $params)
 * @method array findNearbyStreetsOSM()        findNearbyStreetsOSM(array $params)
 * @method array findNearByWeather()            findNearByWeather(array $params)
 * @method array findNearbyWikipedia()            findNearbyWikipedia(array $params)
 * @method array findNearestAddress()            findNearestAddress(array $params)
 * @method array findNearestIntersection()        findNearestIntersection(array $params)
 * @method array findNearestIntersectionOSM()    findNearestIntersectionOSM(array $params)
 * @method array get()                            get(array $params)
 * @method array gtopo30()                        gtopo30(array $params)
 * @method array hierarchy()                    hierarchy(array $params)
 * @method array neighbourhoud()                neighbourhoud(array $params)
 * @method array neighbours()                    neighbours(array $params)
 * @method array postalCodeCountryInfo()        postalCodeCountryInfo(array $params)
 * @method array postalCodeLookup()            postalCodeLookup(array $params)
 * @method \GuzzleHttp\Command\Model postalCodeSearch()            postalCodeSearch(array $params)
 * @method array search()                        search(array $params)
 * @method array siblings()                    siblings(array $params)
 * @method array srtm3()                        srtm3(array $params)
 * @method array timezone()                    timezone(array $params)
 * @method array weather()                        weather(array $params)
 * @method array weatherIcao()                    weatherIcao(array $params)
 * @method array wikipediaBoundingBox()        wikipediaBoundingBox(array $params)
 * @method array wikipediaSearch()                wikipediaSearch(array $params)
 *
 * @package spacedealer\geonames
 */
class Geonames extends GuzzleClient
{
   // public $username;
    public $client;
    public $description;

    public function __construct($username, $lang = 'en')
    {
      //  $this->username = $username;
        $this->client = $client = new Client();

        // load description config file
        $descriptionConfig = require(__DIR__ . '/resources/config.php');
        $this->description = $description = new Description($descriptionConfig);

        parent::__construct($client, $description, [
            'defaults' => [
                'username' => $username,
                'lang' => $lang,
            ]
        ]);
    }
} 