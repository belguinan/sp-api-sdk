<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders;

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
class TaxDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const TYPE_CONSUMPTION = 'CONSUMPTION';

    public const TYPE_GST = 'GST';

    public const TYPE_MW_ST = 'MwSt.';

    public const TYPE_PST = 'PST';

    public const TYPE_TOTAL = 'TOTAL';

    public const TYPE_TVA = 'TVA';

    public const TYPE_VAT = 'VAT';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'TaxDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'tax_rate' => 'string',
        'tax_amount' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Money',
        'taxable_amount' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Money',
        'type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'tax_rate' => null,
        'tax_amount' => null,
        'taxable_amount' => null,
        'type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'tax_rate' => 'taxRate',
        'tax_amount' => 'taxAmount',
        'taxable_amount' => 'taxableAmount',
        'type' => 'type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'taxable_amount' => 'setTaxableAmount',
        'type' => 'setType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'taxable_amount' => 'getTaxableAmount',
        'type' => 'getType',
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
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['taxable_amount'] = $data['taxable_amount'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
    public function getTypeAllowableValues() : array
    {
        return [
            self::TYPE_CONSUMPTION,
            self::TYPE_GST,
            self::TYPE_MW_ST,
            self::TYPE_PST,
            self::TYPE_TOTAL,
            self::TYPE_TVA,
            self::TYPE_VAT,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['tax_amount'] === null) {
            throw new AssertionException("'tax_amount' can't be null");
        }

        $this->container['tax_amount']->validate();

        if ($this->container['taxable_amount'] !== null) {
            $this->container['taxable_amount']->validate();
        }

        $allowedValues = $this->getTypeAllowableValues();

        if (null !== $this->container['type'] && !\in_array($this->container['type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'type', must be one of '%s'",
                    $this->container['type'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets tax_rate.
     */
    public function getTaxRate() : ?string
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate.
     *
     * @param null|string $tax_rate A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation.
     */
    public function setTaxRate(?string $tax_rate) : self
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_amount.
     */
    public function getTaxAmount() : Money
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Money $tax_amount tax_amount
     */
    public function setTaxAmount(Money $tax_amount) : self
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets taxable_amount.
     */
    public function getTaxableAmount() : ?Money
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Money $taxable_amount taxable_amount
     */
    public function setTaxableAmount(?Money $taxable_amount) : self
    {
        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }

    /**
     * Gets type.
     */
    public function getType() : ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param null|string $type tax type
     */
    public function setType(?string $type) : self
    {
        $this->container['type'] = $type;

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
