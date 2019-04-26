<?php
/**
 * ShopOrder
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
 * ShopOrder Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShopOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShopOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_instruction' => 'string',
        'consignee' => '\OpenAPI\Client\Model\Consignee',
        'customs_value' => '\OpenAPI\Client\Model\CustomsValue',
        'cod_value' => '\OpenAPI\Client\Model\CodValue',
        'description' => 'string',
        'requested_delivery_date' => '\DateTime',
        'products' => '\OpenAPI\Client\Model\Product[]',
        'reference' => 'string',
        'return' => '\OpenAPI\Client\Model\ShopOrderReturn',
        'sender' => '\OpenAPI\Client\Model\ShopOrderSender',
        'shipping' => '\OpenAPI\Client\Model\ShopOrderShipping',
        'weight' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'additional_instruction' => null,
        'consignee' => null,
        'customs_value' => null,
        'cod_value' => null,
        'description' => null,
        'requested_delivery_date' => 'date',
        'products' => null,
        'reference' => null,
        'return' => null,
        'sender' => null,
        'shipping' => null,
        'weight' => 'double'
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
        'additional_instruction' => 'additionalInstruction',
        'consignee' => 'consignee',
        'customs_value' => 'customsValue',
        'cod_value' => 'codValue',
        'description' => 'description',
        'requested_delivery_date' => 'requestedDeliveryDate',
        'products' => 'products',
        'reference' => 'reference',
        'return' => 'return',
        'sender' => 'sender',
        'shipping' => 'shipping',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_instruction' => 'setAdditionalInstruction',
        'consignee' => 'setConsignee',
        'customs_value' => 'setCustomsValue',
        'cod_value' => 'setCodValue',
        'description' => 'setDescription',
        'requested_delivery_date' => 'setRequestedDeliveryDate',
        'products' => 'setProducts',
        'reference' => 'setReference',
        'return' => 'setReturn',
        'sender' => 'setSender',
        'shipping' => 'setShipping',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_instruction' => 'getAdditionalInstruction',
        'consignee' => 'getConsignee',
        'customs_value' => 'getCustomsValue',
        'cod_value' => 'getCodValue',
        'description' => 'getDescription',
        'requested_delivery_date' => 'getRequestedDeliveryDate',
        'products' => 'getProducts',
        'reference' => 'getReference',
        'return' => 'getReturn',
        'sender' => 'getSender',
        'shipping' => 'getShipping',
        'weight' => 'getWeight'
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
        $this->container['additional_instruction'] = isset($data['additional_instruction']) ? $data['additional_instruction'] : null;
        $this->container['consignee'] = isset($data['consignee']) ? $data['consignee'] : null;
        $this->container['customs_value'] = isset($data['customs_value']) ? $data['customs_value'] : null;
        $this->container['cod_value'] = isset($data['cod_value']) ? $data['cod_value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['requested_delivery_date'] = isset($data['requested_delivery_date']) ? $data['requested_delivery_date'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['return'] = isset($data['return']) ? $data['return'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['consignee'] === null) {
            $invalidProperties[] = "'consignee' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
        }
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
     * Gets additional_instruction
     *
     * @return string|null
     */
    public function getAdditionalInstruction()
    {
        return $this->container['additional_instruction'];
    }

    /**
     * Sets additional_instruction
     *
     * @param string|null $additional_instruction Additional instructions concerning the delivery of an order.  Example: `additionalInstruction:\"Call before delivery\"`
     *
     * @return $this
     */
    public function setAdditionalInstruction($additional_instruction)
    {
        $this->container['additional_instruction'] = $additional_instruction;

        return $this;
    }

    /**
     * Gets consignee
     *
     * @return \OpenAPI\Client\Model\Consignee
     */
    public function getConsignee()
    {
        return $this->container['consignee'];
    }

    /**
     * Sets consignee
     *
     * @param \OpenAPI\Client\Model\Consignee $consignee consignee
     *
     * @return $this
     */
    public function setConsignee($consignee)
    {
        $this->container['consignee'] = $consignee;

        return $this;
    }

    /**
     * Gets customs_value
     *
     * @return \OpenAPI\Client\Model\CustomsValue|null
     */
    public function getCustomsValue()
    {
        return $this->container['customs_value'];
    }

    /**
     * Sets customs_value
     *
     * @param \OpenAPI\Client\Model\CustomsValue|null $customs_value customs_value
     *
     * @return $this
     */
    public function setCustomsValue($customs_value)
    {
        $this->container['customs_value'] = $customs_value;

        return $this;
    }

    /**
     * Gets cod_value
     *
     * @return \OpenAPI\Client\Model\CodValue|null
     */
    public function getCodValue()
    {
        return $this->container['cod_value'];
    }

    /**
     * Sets cod_value
     *
     * @param \OpenAPI\Client\Model\CodValue|null $cod_value cod_value
     *
     * @return $this
     */
    public function setCodValue($cod_value)
    {
        $this->container['cod_value'] = $cod_value;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A general description of the contents of a whole order.  Example: `description:\"Socks\"`
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets requested_delivery_date
     *
     * @return \DateTime|null
     */
    public function getRequestedDeliveryDate()
    {
        return $this->container['requested_delivery_date'];
    }

    /**
     * Sets requested_delivery_date
     *
     * @param \DateTime|null $requested_delivery_date The date on which a customer has requested that an order be delivered.  Format: \"YYYY-MM-DD\"  Example: `requestedDeliveryDate:2019-18-02`
     *
     * @return $this
     */
    public function setRequestedDeliveryDate($requested_delivery_date)
    {
        $this->container['requested_delivery_date'] = $requested_delivery_date;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \OpenAPI\Client\Model\Product[]|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \OpenAPI\Client\Model\Product[]|null $products Contains objects representing the products making up a order.
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Your own order reference for a purchase transaction.  **Note!** The order reference must be unique within the webshop concerned.  Example: `reference:\"myOrderReference00123\"`
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets return
     *
     * @return \OpenAPI\Client\Model\ShopOrderReturn|null
     */
    public function getReturn()
    {
        return $this->container['return'];
    }

    /**
     * Sets return
     *
     * @param \OpenAPI\Client\Model\ShopOrderReturn|null $return return
     *
     * @return $this
     */
    public function setReturn($return)
    {
        $this->container['return'] = $return;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \OpenAPI\Client\Model\ShopOrderSender|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \OpenAPI\Client\Model\ShopOrderSender|null $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \OpenAPI\Client\Model\ShopOrderShipping
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \OpenAPI\Client\Model\ShopOrderShipping $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double|null $weight The total weight in kilograms (kg) of an order, including packaging for shipping.  Example: `weight:10.12`
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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


