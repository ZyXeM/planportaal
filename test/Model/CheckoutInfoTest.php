<?php
/**
 * CheckoutInfoTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * REST API introduction
 *
 * ### URL for API requests  `https://api.paazl.com/`  ### Optional keys  Some of the optional key-value pairs have a default value. Where this is the case, the default values will be indicated.  You can leave out optional keys from requests. If you leave out an optional key, it will not be included in the response concerned.  ### Paazl authentication  Paazl uses a three-legged OAuth 2.0 authentication process in which the API Secret (private key) is only known to the webshop. Webshop customers never have access to that key. However, they do have access the API Key (public key). See the online help article titled \"Authentication & Authorization\" for an explanation of how to generate these keys in the Paazl web app.  In Swagger, you authorize a call using the Authorize button. After clicking this button, you enter a string with either the format \"Bearer api_key\" or the format \"Bearer api_key:api_secret\" depending on the endpoint method concerned.  #### Calls requiring \"Bearer api_key\":  &#8226; POST shippingOptions  &#8226; POST pickupLocations  &#8226; POST checkout  Example:`\"Bearer sI3flYhflh\"`   #### Calls requiring \"Bearer api_key:api_secret\":  &#8226; POST token  &#8226; GET checkout  &#8226; POST order  &#8226; PUT order  &#8226; PATCH order  &#8226; DELETE order  Example:`\"Bearer sI3flYhflh:sdHlHkyunLKsoI94luilIlndD\"`
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client;

/**
 * CheckoutInfoTest Class Doc Comment
 *
 * @category    Class
 * @description CheckoutInfo
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CheckoutInfoTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "CheckoutInfo"
     */
    public function testCheckoutInfo()
    {
    }

    /**
     * Test attribute "consignee_country_code"
     */
    public function testPropertyConsigneeCountryCode()
    {
    }

    /**
     * Test attribute "consignee_postal_code"
     */
    public function testPropertyConsigneePostalCode()
    {
    }

    /**
     * Test attribute "delivery_type"
     */
    public function testPropertyDeliveryType()
    {
    }

    /**
     * Test attribute "notification_email_address"
     */
    public function testPropertyNotificationEmailAddress()
    {
    }

    /**
     * Test attribute "notification_phone_number"
     */
    public function testPropertyNotificationPhoneNumber()
    {
    }

    /**
     * Test attribute "pickup_date"
     */
    public function testPropertyPickupDate()
    {
    }

    /**
     * Test attribute "pickup_location"
     */
    public function testPropertyPickupLocation()
    {
    }

    /**
     * Test attribute "preferred_delivery_date"
     */
    public function testPropertyPreferredDeliveryDate()
    {
    }

    /**
     * Test attribute "reference"
     */
    public function testPropertyReference()
    {
    }

    /**
     * Test attribute "shipping_option"
     */
    public function testPropertyShippingOption()
    {
    }

    /**
     * Test attribute "token"
     */
    public function testPropertyToken()
    {
    }

    /**
     * Test attribute "webshop_id"
     */
    public function testPropertyWebshopId()
    {
    }
}
