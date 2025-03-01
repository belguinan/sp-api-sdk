<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorOrders;

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
class OrderItemStatusReceivingStatus implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const RECEIVE_STATUS_NOT_RECEIVED = 'NOT_RECEIVED';

    public const RECEIVE_STATUS_PARTIALLY_RECEIVED = 'PARTIALLY_RECEIVED';

    public const RECEIVE_STATUS_RECEIVED = 'RECEIVED';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'OrderItemStatus_receivingStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'receive_status' => 'string',
        'received_quantity' => '\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity',
        'last_receive_date' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'receive_status' => null,
        'received_quantity' => null,
        'last_receive_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'receive_status' => 'receiveStatus',
        'received_quantity' => 'receivedQuantity',
        'last_receive_date' => 'lastReceiveDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'receive_status' => 'setReceiveStatus',
        'received_quantity' => 'setReceivedQuantity',
        'last_receive_date' => 'setLastReceiveDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'receive_status' => 'getReceiveStatus',
        'received_quantity' => 'getReceivedQuantity',
        'last_receive_date' => 'getLastReceiveDate',
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
        $this->container['receive_status'] = $data['receive_status'] ?? null;
        $this->container['received_quantity'] = $data['received_quantity'] ?? null;
        $this->container['last_receive_date'] = $data['last_receive_date'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getReceiveStatusAllowableValues() : array
    {
        return [
            self::RECEIVE_STATUS_NOT_RECEIVED,
            self::RECEIVE_STATUS_PARTIALLY_RECEIVED,
            self::RECEIVE_STATUS_RECEIVED,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getReceiveStatusAllowableValues();

        if (null !== $this->container['receive_status'] && !\in_array($this->container['receive_status'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'receive_status', must be one of '%s'",
                    $this->container['receive_status'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['received_quantity'] !== null) {
            $this->container['received_quantity']->validate();
        }
    }

    /**
     * Gets receive_status.
     */
    public function getReceiveStatus() : ?string
    {
        return $this->container['receive_status'];
    }

    /**
     * Sets receive_status.
     *
     * @param null|string $receive_status receive status of the line item
     */
    public function setReceiveStatus(?string $receive_status) : self
    {
        $this->container['receive_status'] = $receive_status;

        return $this;
    }

    /**
     * Gets received_quantity.
     */
    public function getReceivedQuantity() : ?ItemQuantity
    {
        return $this->container['received_quantity'];
    }

    /**
     * Sets received_quantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity $received_quantity received_quantity
     */
    public function setReceivedQuantity(?ItemQuantity $received_quantity) : self
    {
        $this->container['received_quantity'] = $received_quantity;

        return $this;
    }

    /**
     * Gets last_receive_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getLastReceiveDate() : ?\DateTimeInterface
    {
        return $this->container['last_receive_date'];
    }

    /**
     * Sets last_receive_date.
     *
     * @param \DateTime|\DateTimeImmutable $last_receive_date The date when the most recent item was received at the buyer's warehouse. Must be in ISO-8601 date/time format.
     */
    public function setLastReceiveDate(\DateTimeInterface $last_receive_date) : self
    {
        $this->container['last_receive_date'] = $last_receive_date;

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
