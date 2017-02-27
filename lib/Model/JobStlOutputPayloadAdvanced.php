<?php
/**
 * JobStlOutputPayloadAdvanced
 *
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Client
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

namespace Autodesk\Client\Model;

use \ArrayAccess;

/**
 * JobStlOutputPayloadAdvanced Class Doc Comment
 *
 * @category    Class
 * @description Advanced options for &#x60;stl&#x60; type.
 * @package     Autodesk\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobStlOutputPayloadAdvanced implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'jobStlOutputPayload_advanced';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'format'                => 'string',
        'export_color'          => 'bool',
        'export_file_structure' => 'string',
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'format'                => 'format',
        'export_color'          => 'exportColor',
        'export_file_structure' => 'exportFileStructure',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'format'                => 'setFormat',
        'export_color'          => 'setExportColor',
        'export_file_structure' => 'setExportFileStructure',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'format'                => 'getFormat',
        'export_color'          => 'getExportColor',
        'export_file_structure' => 'getExportFileStructure',
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

    const FORMAT_BINARY = 'binary';
    const FORMAT_ASCII = 'ascii';
    const EXPORT_FILE_STRUCTURE_SINGLE = 'single';
    const EXPORT_FILE_STRUCTURE_MULTIPLE = 'multiple';


    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_BINARY,
            self::FORMAT_ASCII,
        ];
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getExportFileStructureAllowableValues()
    {
        return [
            self::EXPORT_FILE_STRUCTURE_SINGLE,
            self::EXPORT_FILE_STRUCTURE_MULTIPLE,
        ];
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : 'binary';
        $this->container['export_color'] = isset($data['export_color']) ? $data['export_color'] : true;
        $this->container['export_file_structure'] = isset($data['export_file_structure']) ? $data['export_file_structure'] : 'single';
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["binary", "ascii"];
        if ( ! in_array($this->container['format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'format', must be one of 'binary', 'ascii'.";
        }

        $allowed_values = ["single", "multiple"];
        if ( ! in_array($this->container['export_file_structure'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'export_file_structure', must be one of 'single', 'multiple'.";
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

        $allowed_values = ["binary", "ascii"];
        if ( ! in_array($this->container['format'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["single", "multiple"];
        if ( ! in_array($this->container['export_file_structure'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format Default format is `binary`. Possible values are `binary` or `ascii`.
     * @return $this
     */
    public function setFormat($format)
    {
        $allowed_values = ['binary', 'ascii'];
        if ( ! is_null($format) && ( ! in_array($format, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'format', must be one of 'binary', 'ascii'");
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets export_color
     * @return bool
     */
    public function getExportColor()
    {
        return $this->container['export_color'];
    }

    /**
     * Sets export_color
     * @param bool $export_color Color is exported by default. If set to `true`, color is exported. If set to `false`, color is not exported.
     * @return $this
     */
    public function setExportColor($export_color)
    {
        $this->container['export_color'] = $export_color;

        return $this;
    }

    /**
     * Gets export_file_structure
     * @return string
     */
    public function getExportFileStructure()
    {
        return $this->container['export_file_structure'];
    }

    /**
     * Sets export_file_structure
     * @param string $export_file_structure `single` (default): creates one STL file for all the input files (assembly file)  `multiple`: creates a separate STL file for each object
     * @return $this
     */
    public function setExportFileStructure($export_file_structure)
    {
        $allowed_values = ['single', 'multiple'];
        if ( ! is_null($export_file_structure) && ( ! in_array($export_file_structure, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'export_file_structure', must be one of 'single', 'multiple'");
        }
        $this->container['export_file_structure'] = $export_file_structure;

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
     * @param  mixed $value Value to be set
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
            return json_encode(\Autodesk\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Autodesk\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


