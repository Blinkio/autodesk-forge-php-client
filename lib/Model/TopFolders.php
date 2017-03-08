<?php
/**
 * TopFolders
 *
 * PHP version 5
 *
 * @category Class
 * @package  AutodeskForge\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AutodeskForge\Client\Model;

use \ArrayAccess;

/**
 * TopFolders Class Doc Comment
 *
 * @category    Class
 * @package     AutodeskForge\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TopFolders implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'top folders';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'jsonapi' => '\AutodeskForge\Client\Model\JsonApiVersion',
        'links' => '\AutodeskForge\Client\Model\JsonApiLinksSelf',
        'data' => '\AutodeskForge\Client\Model\Folder[]',
    ];

    /**
     * @return \string[]
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'jsonapi' => 'jsonapi',
        'links' => 'links',
        'data' => 'data',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'jsonapi' => 'setJsonapi',
        'links' => 'setLinks',
        'data' => 'setData',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'jsonapi' => 'getJsonapi',
        'links' => 'getLinks',
        'data' => 'getData',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['jsonapi'] = isset($data['jsonapi']) ? $data['jsonapi'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['jsonapi'] === null) {
            $invalid_properties[] = "'jsonapi' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalid_properties[] = "'links' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalid_properties[] = "'data' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['jsonapi'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        if ($this->container['data'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets jsonapi
     * @return \AutodeskForge\Client\Model\JsonApiVersion
     */
    public function getJsonapi()
    {
        return $this->container['jsonapi'];
    }

    /**
     * Sets jsonapi
     * @param \AutodeskForge\Client\Model\JsonApiVersion $jsonapi
     * @return $this
     */
    public function setJsonapi($jsonapi)
    {
        $this->container['jsonapi'] = $jsonapi;

        return $this;
    }

    /**
     * Gets links
     * @return \AutodeskForge\Client\Model\JsonApiLinksSelf
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \AutodeskForge\Client\Model\JsonApiLinksSelf $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets data
     * @return \AutodeskForge\Client\Model\Folder[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param \AutodeskForge\Client\Model\Folder[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\AutodeskForge\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\AutodeskForge\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


