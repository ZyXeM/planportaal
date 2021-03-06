<?php
/**
 * ShopOrderShippingAddress
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
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ShopOrderShippingAddress Class Doc Comment
 *
 * @category Class
 * @description Contains details of the address to ship an order to.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShopOrderShippingAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShopOrderShippingAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => 'string',
        'country' => 'string',
        'postal_code' => 'string',
        'province' => 'string',
        'street' => 'string',
        'street_lines' => 'string[]',
        'house_number' => 'int',
        'house_number_extension' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'city' => null,
        'country' => null,
        'postal_code' => null,
        'province' => null,
        'street' => null,
        'street_lines' => null,
        'house_number' => 'int32',
        'house_number_extension' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'city' => 'city',
        'country' => 'country',
        'postal_code' => 'postalCode',
        'province' => 'province',
        'street' => 'street',
        'street_lines' => 'streetLines',
        'house_number' => 'houseNumber',
        'house_number_extension' => 'houseNumberExtension'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country' => 'setCountry',
        'postal_code' => 'setPostalCode',
        'province' => 'setProvince',
        'street' => 'setStreet',
        'street_lines' => 'setStreetLines',
        'house_number' => 'setHouseNumber',
        'house_number_extension' => 'setHouseNumberExtension'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country' => 'getCountry',
        'postal_code' => 'getPostalCode',
        'province' => 'getProvince',
        'street' => 'getStreet',
        'street_lines' => 'getStreetLines',
        'house_number' => 'getHouseNumber',
        'house_number_extension' => 'getHouseNumberExtension'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['street_lines'] = isset($data['street_lines']) ? $data['street_lines'] : null;
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['house_number_extension'] = isset($data['house_number_extension']) ? $data['house_number_extension'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city of the address to ship an order to.  Example: `city:\"Bonn\"`
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2) code for the country of the address to ship an order to.  The default value is \"NL\".  Example: `country:\"DE\"`
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code The postal code of the address to ship an order to.  Example: `postalCode:\"53111\"`
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string|null
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string|null $province The province or state of the address to ship an order to.  Example: `province:\"Nordrhein-Westfalen\"`
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street The street name of the address to ship an order to.  Example: `street:\"Am Hauptbahnhof\"`
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets street_lines
     *
     * @return string[]|null
     */
    public function getStreetLines()
    {
        return $this->container['street_lines'];
    }

    /**
     * Sets street_lines
     *
     * @param string[]|null $street_lines The street address to ship an order to, specified as a series of strings.  See the note in the general method description.  **Note!** Paazl does not parse the string to perform validation with any values that may be provided for the other parameters of a consignee address.  Example: `streetLines:\"Jacob Bontiusplaats 9\", \"Unit 580\"`
     *
     * @return $this
     */
    public function setStreetLines($street_lines)
    {
        $this->container['street_lines'] = $street_lines;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return int|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param int|null $house_number The house number of the address to ship an order to.  See the note in the general method description.  Example: `houseNumber:9`
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets house_number_extension
     *
     * @return string|null
     */
    public function getHouseNumberExtension()
    {
        return $this->container['house_number_extension'];
    }

    /**
     * Sets house_number_extension
     *
     * @param string|null $house_number_extension The house number extension (such as the \"-A\" in \"12-A\") of the address to ship an order to.  Example: `houseNumberExtension:\"-A\"`
     *
     * @return $this
     */
    public function setHouseNumberExtension($house_number_extension)
    {
        $this->container['house_number_extension'] = $house_number_extension;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


