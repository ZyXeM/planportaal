<?php
/**
 * PickupLocationResponse
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
 * PickupLocationResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PickupLocationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PickupLocationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'full_delivery_date_selection' => 'bool',
        'pickup_locations' => '\OpenAPI\Client\Model\PickupLocation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'full_delivery_date_selection' => null,
        'pickup_locations' => null
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
        'full_delivery_date_selection' => 'fullDeliveryDateSelection',
        'pickup_locations' => 'pickupLocations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'full_delivery_date_selection' => 'setFullDeliveryDateSelection',
        'pickup_locations' => 'setPickupLocations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'full_delivery_date_selection' => 'getFullDeliveryDateSelection',
        'pickup_locations' => 'getPickupLocations'
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
        $this->container['full_delivery_date_selection'] = isset($data['full_delivery_date_selection']) ? $data['full_delivery_date_selection'] : null;
        $this->container['pickup_locations'] = isset($data['pickup_locations']) ? $data['pickup_locations'] : null;
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
     * Gets full_delivery_date_selection
     *
     * @return bool|null
     */
    public function getFullDeliveryDateSelection()
    {
        return $this->container['full_delivery_date_selection'];
    }

    /**
     * Sets full_delivery_date_selection
     *
     * @param bool|null $full_delivery_date_selection If `true`, customers can select the delivery date they want. If `false`, they are given the first available delivery date.
     *
     * @return $this
     */
    public function setFullDeliveryDateSelection($full_delivery_date_selection)
    {
        $this->container['full_delivery_date_selection'] = $full_delivery_date_selection;

        return $this;
    }

    /**
     * Gets pickup_locations
     *
     * @return \OpenAPI\Client\Model\PickupLocation[]|null
     */
    public function getPickupLocations()
    {
        return $this->container['pickup_locations'];
    }

    /**
     * Sets pickup_locations
     *
     * @param \OpenAPI\Client\Model\PickupLocation[]|null $pickup_locations Pickup location objects.
     *
     * @return $this
     */
    public function setPickupLocations($pickup_locations)
    {
        $this->container['pickup_locations'] = $pickup_locations;

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


