<?php
/**
 * ShipmentParameters
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
 * ShipmentParameters Class Doc Comment
 *
 * @category Class
 * @description Contains details of a customer&#39;s order.  Example: &#x60;shipmentParameters: {totalWeight:3.14, startMatrix:\&quot;AA\&quot;, goods: [{quantity:2, weight:3}, {width:1, height:5}]}&#x60;  This element is intended for use by the Paazl Sell widget. Set its values using the widget&#39;s [setShipmentParameters](https://support.paazl.com/hc/en-us/articles/360008748434-Paazl-Sell-widget-methods-#setShipmentParameters) method.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'goods' => '\OpenAPI\Client\Model\ProductParameters[]',
        'number_of_goods' => 'int',
        'start_matrix' => 'string',
        'total_price' => 'double',
        'total_volume' => 'float',
        'total_weight' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'goods' => null,
        'number_of_goods' => 'int32',
        'start_matrix' => null,
        'total_price' => 'double',
        'total_volume' => 'float',
        'total_weight' => 'double'
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
        'goods' => 'goods',
        'number_of_goods' => 'numberOfGoods',
        'start_matrix' => 'startMatrix',
        'total_price' => 'totalPrice',
        'total_volume' => 'totalVolume',
        'total_weight' => 'totalWeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'goods' => 'setGoods',
        'number_of_goods' => 'setNumberOfGoods',
        'start_matrix' => 'setStartMatrix',
        'total_price' => 'setTotalPrice',
        'total_volume' => 'setTotalVolume',
        'total_weight' => 'setTotalWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'goods' => 'getGoods',
        'number_of_goods' => 'getNumberOfGoods',
        'start_matrix' => 'getStartMatrix',
        'total_price' => 'getTotalPrice',
        'total_volume' => 'getTotalVolume',
        'total_weight' => 'getTotalWeight'
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
        $this->container['goods'] = isset($data['goods']) ? $data['goods'] : null;
        $this->container['number_of_goods'] = isset($data['number_of_goods']) ? $data['number_of_goods'] : null;
        $this->container['start_matrix'] = isset($data['start_matrix']) ? $data['start_matrix'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['total_volume'] = isset($data['total_volume']) ? $data['total_volume'] : null;
        $this->container['total_weight'] = isset($data['total_weight']) ? $data['total_weight'] : null;
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
     * Gets goods
     *
     * @return \OpenAPI\Client\Model\ProductParameters[]|null
     */
    public function getGoods()
    {
        return $this->container['goods'];
    }

    /**
     * Sets goods
     *
     * @param \OpenAPI\Client\Model\ProductParameters[]|null $goods An array of variables used to determine the applicable delivery matrix. See [Configuring delivery matrices](https://support.paazl.com/hc/en-us/articles/360009610354-Configuring-delivery-matrices-) for an explanation of how delivery matrices work.  Example: `goods:[{quantity:2, weight:3}, {width:1, height:5}]`  This element is intended for use by the Paazl Sell widget. Set its values using the widget's [setShipmentParameters](https://support.paazl.com/hc/en-us/articles/360008748434-Paazl-Sell-widget-methods-#setShipmentParameters) method.
     *
     * @return $this
     */
    public function setGoods($goods)
    {
        $this->container['goods'] = $goods;

        return $this;
    }

    /**
     * Gets number_of_goods
     *
     * @return int|null
     */
    public function getNumberOfGoods()
    {
        return $this->container['number_of_goods'];
    }

    /**
     * Sets number_of_goods
     *
     * @param int|null $number_of_goods The total number of packages or individual goods in a shipment.  **Note!** If you give `numberOfGoods` a value, the `quantity` attribute of each `goods` array will be ignored.  Example: `numberOfGoods:8`  This element is intended for use by the Paazl Sell widget. Set its values using the widget's [setShipmentParameters](https://support.paazl.com/hc/en-us/articles/360008748434-Paazl-Sell-widget-methods-#setShipmentParameters) method.
     *
     * @return $this
     */
    public function setNumberOfGoods($number_of_goods)
    {
        $this->container['number_of_goods'] = $number_of_goods;

        return $this;
    }

    /**
     * Gets start_matrix
     *
     * @return string|null
     */
    public function getStartMatrix()
    {
        return $this->container['start_matrix'];
    }

    /**
     * Sets start_matrix
     *
     * @param string|null $start_matrix A one- or two-letter code identifying the delivery matrix column to start with when determining the appropriate shipping option and rate for the whole shipment. See [Configuring delivery matrices](https://support.paazl.com/hc/en-us/articles/360009610354-Configuring-delivery-matrices-) for an explanation of how delivery matrices work.  Example: `startMatrix:\"B\"`  This element is intended for use by the Paazl Sell widget. Set its values using the widget's [setShipmentParameters](https://support.paazl.com/hc/en-us/articles/360008748434-Paazl-Sell-widget-methods-#setShipmentParameters) method.
     *
     * @return $this
     */
    public function setStartMatrix($start_matrix)
    {
        $this->container['start_matrix'] = $start_matrix;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return double|null
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param double|null $total_price The total price of the shipment concerned. This is a scalar value. The currency unit is assigned by your webshop's checkout page.  **Note!** If you give `totalPrice` a value, the prices of the individual goods in the shipment will be ignored.  Example: `totalPrice:100`  This element is intended for use by the Paazl Sell widget. Set its values using the widget's [setShipmentParameters](https://support.paazl.com/hc/en-us/articles/360008748434-Paazl-Sell-widget-methods-#setShipmentParameters) method.
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets total_volume
     *
     * @return float|null
     */
    public function getTotalVolume()
    {
        return $this->container['total_volume'];
    }

    /**
     * Sets total_volume
     *
     * @param float|null $total_volume The total volume in cubic meters (m<sup>3</sup>) of the shipment concerned, including packaging.  **Note!** If you give `totalVolume` a value, the volumes of the individual goods in the shipment will be ignored.  Example: `totalVolume:1`  This element is intended for use by the Paazl Sell widget. Set its values using the widget's [setShipmentParameters](https://support.paazl.com/hc/en-us/articles/360008748434-Paazl-Sell-widget-methods-#setShipmentParameters) method.
     *
     * @return $this
     */
    public function setTotalVolume($total_volume)
    {
        $this->container['total_volume'] = $total_volume;

        return $this;
    }

    /**
     * Gets total_weight
     *
     * @return double|null
     */
    public function getTotalWeight()
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param double|null $total_weight The total weight in kilograms (kg)of the shipment concerned, including packaging.  **Note!** If you give `totalWeight` a value, the weights of the individual goods in the shipment will be ignored.  Example: `totalWeight:10`  This element is intended for use by the Paazl Sell widget. Set its values using the widget's [setShipmentParameters](https://support.paazl.com/hc/en-us/articles/360008748434-Paazl-Sell-widget-methods-#setShipmentParameters) method.
     *
     * @return $this
     */
    public function setTotalWeight($total_weight)
    {
        $this->container['total_weight'] = $total_weight;

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


