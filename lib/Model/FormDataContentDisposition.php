<?php
/**
 * FormDataContentDisposition
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eBay\Sell\Feed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Feed API
 *
 * <p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>
 *
 * The version of the OpenAPI document: v1.2.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Feed\Model;

use \ArrayAccess;
use \eBay\Sell\Feed\ObjectSerializer;

/**
 * FormDataContentDisposition Class Doc Comment
 *
 * @category Class
 * @description The metadata for the file.
 * @package  eBay\Sell\Feed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FormDataContentDisposition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FormDataContentDisposition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creation_date' => 'string',
        'file_name' => 'string',
        'modification_date' => 'string',
        'name' => 'string',
        'parameters' => 'map[string,string]',
        'read_date' => 'string',
        'size' => 'int',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'creation_date' => null,
        'file_name' => null,
        'modification_date' => null,
        'name' => null,
        'parameters' => null,
        'read_date' => null,
        'size' => 'int32',
        'type' => null
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
        'creation_date' => 'creationDate',
        'file_name' => 'fileName',
        'modification_date' => 'modificationDate',
        'name' => 'name',
        'parameters' => 'parameters',
        'read_date' => 'readDate',
        'size' => 'size',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creation_date' => 'setCreationDate',
        'file_name' => 'setFileName',
        'modification_date' => 'setModificationDate',
        'name' => 'setName',
        'parameters' => 'setParameters',
        'read_date' => 'setReadDate',
        'size' => 'setSize',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creation_date' => 'getCreationDate',
        'file_name' => 'getFileName',
        'modification_date' => 'getModificationDate',
        'name' => 'getName',
        'parameters' => 'getParameters',
        'read_date' => 'getReadDate',
        'size' => 'getSize',
        'type' => 'getType'
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
        $this->container['creation_date'] = $data['creation_date'] ?? null;
        $this->container['file_name'] = $data['file_name'] ?? null;
        $this->container['modification_date'] = $data['modification_date'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['read_date'] = $data['read_date'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date The file creation date. Format: UTC yyyy-MM-ddThh:mm:ss.SSSZ For example: Created on September 8, 2019 2019-09-08T00:00:00.000Z
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name The name of the file including its extension (for example, xml or csv) to be uploaded.
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets modification_date
     *
     * @return string|null
     */
    public function getModificationDate()
    {
        return $this->container['modification_date'];
    }

    /**
     * Sets modification_date
     *
     * @param string|null $modification_date The file modified date. Format: UTC yyyy-MM-ddThh:mm:ss.SSSZ For example: Created on September 9, 2019 2019-09-09T00:00:00.000Z
     *
     * @return self
     */
    public function setModificationDate($modification_date)
    {
        $this->container['modification_date'] = $modification_date;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name A content identifier. The only presently supported name is file.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return map[string,string]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param map[string,string]|null $parameters The parameters you want associated with the file.
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets read_date
     *
     * @return string|null
     */
    public function getReadDate()
    {
        return $this->container['read_date'];
    }

    /**
     * Sets read_date
     *
     * @param string|null $read_date The date you read the file. Format: UTC yyyy-MM-ddThh:mm:ss.SSSZ For example: Created on September 10, 2019 2019-09-10T00:00:00.000Z
     *
     * @return self
     */
    public function setReadDate($read_date)
    {
        $this->container['read_date'] = $read_date;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size The size of the file.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The file type. The only presently supported type is form-data.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


