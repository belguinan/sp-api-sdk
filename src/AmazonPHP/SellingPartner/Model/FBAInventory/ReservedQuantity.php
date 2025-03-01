<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FBAInventory;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReservedQuantity implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ReservedQuantity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'total_reserved_quantity' => 'int',
        'pending_customer_order_quantity' => 'int',
        'pending_transshipment_quantity' => 'int',
        'fc_processing_quantity' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'total_reserved_quantity' => null,
        'pending_customer_order_quantity' => null,
        'pending_transshipment_quantity' => null,
        'fc_processing_quantity' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'total_reserved_quantity' => 'totalReservedQuantity',
        'pending_customer_order_quantity' => 'pendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'pendingTransshipmentQuantity',
        'fc_processing_quantity' => 'fcProcessingQuantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'total_reserved_quantity' => 'setTotalReservedQuantity',
        'pending_customer_order_quantity' => 'setPendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'setPendingTransshipmentQuantity',
        'fc_processing_quantity' => 'setFcProcessingQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'total_reserved_quantity' => 'getTotalReservedQuantity',
        'pending_customer_order_quantity' => 'getPendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'getPendingTransshipmentQuantity',
        'fc_processing_quantity' => 'getFcProcessingQuantity',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['total_reserved_quantity'] = $data['total_reserved_quantity'] ?? null;
        $this->container['pending_customer_order_quantity'] = $data['pending_customer_order_quantity'] ?? null;
        $this->container['pending_transshipment_quantity'] = $data['pending_transshipment_quantity'] ?? null;
        $this->container['fc_processing_quantity'] = $data['fc_processing_quantity'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
    }

    /**
     * Gets total_reserved_quantity.
     */
    public function getTotalReservedQuantity() : ?int
    {
        return $this->container['total_reserved_quantity'];
    }

    /**
     * Sets total_reserved_quantity.
     *
     * @param null|int $total_reserved_quantity the total number of units in Amazon's fulfillment network that are currently being picked, packed, and shipped; or are sidelined for measurement, sampling, or other internal processes
     */
    public function setTotalReservedQuantity(?int $total_reserved_quantity) : self
    {
        $this->container['total_reserved_quantity'] = $total_reserved_quantity;

        return $this;
    }

    /**
     * Gets pending_customer_order_quantity.
     */
    public function getPendingCustomerOrderQuantity() : ?int
    {
        return $this->container['pending_customer_order_quantity'];
    }

    /**
     * Sets pending_customer_order_quantity.
     *
     * @param null|int $pending_customer_order_quantity the number of units reserved for customer orders
     */
    public function setPendingCustomerOrderQuantity(?int $pending_customer_order_quantity) : self
    {
        $this->container['pending_customer_order_quantity'] = $pending_customer_order_quantity;

        return $this;
    }

    /**
     * Gets pending_transshipment_quantity.
     */
    public function getPendingTransshipmentQuantity() : ?int
    {
        return $this->container['pending_transshipment_quantity'];
    }

    /**
     * Sets pending_transshipment_quantity.
     *
     * @param null|int $pending_transshipment_quantity the number of units being transferred from one fulfillment center to another
     */
    public function setPendingTransshipmentQuantity(?int $pending_transshipment_quantity) : self
    {
        $this->container['pending_transshipment_quantity'] = $pending_transshipment_quantity;

        return $this;
    }

    /**
     * Gets fc_processing_quantity.
     */
    public function getFcProcessingQuantity() : ?int
    {
        return $this->container['fc_processing_quantity'];
    }

    /**
     * Sets fc_processing_quantity.
     *
     * @param null|int $fc_processing_quantity the number of units that have been sidelined at the fulfillment center for additional processing
     */
    public function setFcProcessingQuantity(?int $fc_processing_quantity) : self
    {
        $this->container['fc_processing_quantity'] = $fc_processing_quantity;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
