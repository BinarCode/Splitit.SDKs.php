<?php
/**
 * ConsumerData
 *
 * PHP version 5
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * splitit-web-api-public-sdk
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SplititSdkClient\Model;

use \ArrayAccess;
use \SplititSdkClient\ObjectSerializer;

/**
 * ConsumerData Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConsumerData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConsumerData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'unique_id' => 'string',
        'user_name' => 'string',
        'full_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'culture_name' => 'string',
        'role_name' => 'string',
        'is_locked' => 'bool',
        'is_data_restricted' => 'bool',
        'is_data_private_restricted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'unique_id' => null,
        'user_name' => null,
        'full_name' => null,
        'email' => null,
        'phone_number' => null,
        'culture_name' => null,
        'role_name' => null,
        'is_locked' => null,
        'is_data_restricted' => null,
        'is_data_private_restricted' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'Id',
        'unique_id' => 'UniqueId',
        'user_name' => 'UserName',
        'full_name' => 'FullName',
        'email' => 'Email',
        'phone_number' => 'PhoneNumber',
        'culture_name' => 'CultureName',
        'role_name' => 'RoleName',
        'is_locked' => 'IsLocked',
        'is_data_restricted' => 'IsDataRestricted',
        'is_data_private_restricted' => 'IsDataPrivateRestricted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'unique_id' => 'setUniqueId',
        'user_name' => 'setUserName',
        'full_name' => 'setFullName',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber',
        'culture_name' => 'setCultureName',
        'role_name' => 'setRoleName',
        'is_locked' => 'setIsLocked',
        'is_data_restricted' => 'setIsDataRestricted',
        'is_data_private_restricted' => 'setIsDataPrivateRestricted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'unique_id' => 'getUniqueId',
        'user_name' => 'getUserName',
        'full_name' => 'getFullName',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber',
        'culture_name' => 'getCultureName',
        'role_name' => 'getRoleName',
        'is_locked' => 'getIsLocked',
        'is_data_restricted' => 'getIsDataRestricted',
        'is_data_private_restricted' => 'getIsDataPrivateRestricted'
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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['unique_id'] = isset($data['unique_id']) ? $data['unique_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['culture_name'] = isset($data['culture_name']) ? $data['culture_name'] : null;
        $this->container['role_name'] = isset($data['role_name']) ? $data['role_name'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['is_data_restricted'] = isset($data['is_data_restricted']) ? $data['is_data_restricted'] : null;
        $this->container['is_data_private_restricted'] = isset($data['is_data_private_restricted']) ? $data['is_data_private_restricted'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_locked'] === null) {
            $invalidProperties[] = "'is_locked' can't be null";
        }
        if ($this->container['is_data_restricted'] === null) {
            $invalidProperties[] = "'is_data_restricted' can't be null";
        }
        if ($this->container['is_data_private_restricted'] === null) {
            $invalidProperties[] = "'is_data_private_restricted' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets unique_id
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string $unique_id unique_id
     *
     * @return $this
     */
    public function setUniqueId($unique_id)
    {
        $this->container['unique_id'] = $unique_id;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name user_name
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name full_name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets culture_name
     *
     * @return string
     */
    public function getCultureName()
    {
        return $this->container['culture_name'];
    }

    /**
     * Sets culture_name
     *
     * @param string $culture_name culture_name
     *
     * @return $this
     */
    public function setCultureName($culture_name)
    {
        $this->container['culture_name'] = $culture_name;

        return $this;
    }

    /**
     * Gets role_name
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     *
     * @param string $role_name role_name
     *
     * @return $this
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool $is_locked is_locked
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets is_data_restricted
     *
     * @return bool
     */
    public function getIsDataRestricted()
    {
        return $this->container['is_data_restricted'];
    }

    /**
     * Sets is_data_restricted
     *
     * @param bool $is_data_restricted is_data_restricted
     *
     * @return $this
     */
    public function setIsDataRestricted($is_data_restricted)
    {
        $this->container['is_data_restricted'] = $is_data_restricted;

        return $this;
    }

    /**
     * Gets is_data_private_restricted
     *
     * @return bool
     */
    public function getIsDataPrivateRestricted()
    {
        return $this->container['is_data_private_restricted'];
    }

    /**
     * Sets is_data_private_restricted
     *
     * @param bool $is_data_private_restricted is_data_private_restricted
     *
     * @return $this
     */
    public function setIsDataPrivateRestricted($is_data_private_restricted)
    {
        $this->container['is_data_private_restricted'] = $is_data_private_restricted;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


