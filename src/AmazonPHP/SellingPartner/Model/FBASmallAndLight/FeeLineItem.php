<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FBASmallAndLight;

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
class FeeLineItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const FEE_TYPE_FBA_WEIGHT_BASED_FEE = 'FBAWeightBasedFee';

    public const FEE_TYPE_FBA_PER_ORDER_FULFILLMENT_FEE = 'FBAPerOrderFulfillmentFee';

    public const FEE_TYPE_FBA_PER_UNIT_FULFILLMENT_FEE = 'FBAPerUnitFulfillmentFee';

    public const FEE_TYPE_COMMISSION = 'Commission';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FeeLineItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'fee_type' => 'string',
        'fee_charge' => '\AmazonPHP\SellingPartner\Model\FBASmallAndLight\MoneyType',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'fee_type' => null,
        'fee_charge' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fee_type' => 'feeType',
        'fee_charge' => 'feeCharge',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'fee_type' => 'setFeeType',
        'fee_charge' => 'setFeeCharge',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'fee_type' => 'getFeeType',
        'fee_charge' => 'getFeeCharge',
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
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['fee_charge'] = $data['fee_charge'] ?? null;
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
    public function getFeeTypeAllowableValues() : array
    {
        return [
            self::FEE_TYPE_FBA_WEIGHT_BASED_FEE,
            self::FEE_TYPE_FBA_PER_ORDER_FULFILLMENT_FEE,
            self::FEE_TYPE_FBA_PER_UNIT_FULFILLMENT_FEE,
            self::FEE_TYPE_COMMISSION,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['fee_type'] === null) {
            throw new AssertionException("'fee_type' can't be null");
        }

        $allowedValues = $this->getFeeTypeAllowableValues();

        if (null !== $this->container['fee_type'] && !\in_array($this->container['fee_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'fee_type', must be one of '%s'",
                    $this->container['fee_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['fee_charge'] === null) {
            throw new AssertionException("'fee_charge' can't be null");
        }

        $this->container['fee_charge']->validate();
    }

    /**
     * Gets fee_type.
     */
    public function getFeeType() : string
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type.
     *
     * @param string $fee_type the type of fee charged to the seller
     */
    public function setFeeType(string $fee_type) : self
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_charge.
     */
    public function getFeeCharge() : MoneyType
    {
        return $this->container['fee_charge'];
    }

    /**
     * Sets fee_charge.
     *
     * @param \AmazonPHP\SellingPartner\Model\FBASmallAndLight\MoneyType $fee_charge fee_charge
     */
    public function setFeeCharge(MoneyType $fee_charge) : self
    {
        $this->container['fee_charge'] = $fee_charge;

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
