<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping;

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
class ShippingLabel implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const LABEL_FORMAT_PNG = 'PNG';

    public const LABEL_FORMAT_ZPL = 'ZPL';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShippingLabel';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'purchase_order_number' => 'string',
        'selling_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification',
        'ship_from_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification',
        'label_format' => 'string',
        'label_data' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\LabelData[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'purchase_order_number' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'label_format' => null,
        'label_data' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'purchase_order_number' => 'purchaseOrderNumber',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'label_format' => 'labelFormat',
        'label_data' => 'labelData',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'label_format' => 'setLabelFormat',
        'label_data' => 'setLabelData',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'label_format' => 'getLabelFormat',
        'label_data' => 'getLabelData',
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
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
        $this->container['label_data'] = $data['label_data'] ?? null;
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
    public function getLabelFormatAllowableValues() : array
    {
        return [
            self::LABEL_FORMAT_PNG,
            self::LABEL_FORMAT_ZPL,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['purchase_order_number'] === null) {
            throw new AssertionException("'purchase_order_number' can't be null");
        }

        if (!\preg_match('/^[a-zA-Z0-9]+$/', $this->container['purchase_order_number'])) {
            throw new AssertionException("invalid value for 'purchase_order_number', must be conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        if ($this->container['selling_party'] === null) {
            throw new AssertionException("'selling_party' can't be null");
        }

        $this->container['selling_party']->validate();

        if ($this->container['ship_from_party'] === null) {
            throw new AssertionException("'ship_from_party' can't be null");
        }

        $this->container['ship_from_party']->validate();

        if ($this->container['label_format'] === null) {
            throw new AssertionException("'label_format' can't be null");
        }

        $allowedValues = $this->getLabelFormatAllowableValues();

        if (null !== $this->container['label_format'] && !\in_array($this->container['label_format'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'label_format', must be one of '%s'",
                    $this->container['label_format'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['label_data'] === null) {
            throw new AssertionException("'label_data' can't be null");
        }
    }

    /**
     * Gets purchase_order_number.
     */
    public function getPurchaseOrderNumber() : string
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param string $purchase_order_number this field will contain the Purchase Order Number for this order
     */
    public function setPurchaseOrderNumber(string $purchase_order_number) : self
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets selling_party.
     */
    public function getSellingParty() : PartyIdentification
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification $selling_party selling_party
     */
    public function setSellingParty(PartyIdentification $selling_party) : self
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_from_party.
     */
    public function getShipFromParty() : PartyIdentification
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification $ship_from_party ship_from_party
     */
    public function setShipFromParty(PartyIdentification $ship_from_party) : self
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets label_format.
     */
    public function getLabelFormat() : string
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format.
     *
     * @param string $label_format format of the label
     */
    public function setLabelFormat(string $label_format) : self
    {
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets label_data.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\LabelData[]
     */
    public function getLabelData() : array
    {
        return $this->container['label_data'];
    }

    /**
     * Sets label_data.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\LabelData[] $label_data provides the details of the packages in this shipment
     */
    public function setLabelData(array $label_data) : self
    {
        $this->container['label_data'] = $label_data;

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
