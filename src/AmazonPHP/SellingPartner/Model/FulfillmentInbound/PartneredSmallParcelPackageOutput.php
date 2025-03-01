<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class PartneredSmallParcelPackageOutput implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PartneredSmallParcelPackageOutput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'dimensions' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions',
        'weight' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight',
        'carrier_name' => 'string',
        'tracking_id' => 'string',
        'package_status' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PackageStatus',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'dimensions' => null,
        'weight' => null,
        'carrier_name' => null,
        'tracking_id' => null,
        'package_status' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'dimensions' => 'Dimensions',
        'weight' => 'Weight',
        'carrier_name' => 'CarrierName',
        'tracking_id' => 'TrackingId',
        'package_status' => 'PackageStatus',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'carrier_name' => 'setCarrierName',
        'tracking_id' => 'setTrackingId',
        'package_status' => 'setPackageStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'carrier_name' => 'getCarrierName',
        'tracking_id' => 'getTrackingId',
        'package_status' => 'getPackageStatus',
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
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
        $this->container['package_status'] = $data['package_status'] ?? null;
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
        if ($this->container['dimensions'] === null) {
            throw new AssertionException("'dimensions' can't be null");
        }

        $this->container['dimensions']->validate();

        if ($this->container['weight'] === null) {
            throw new AssertionException("'weight' can't be null");
        }

        $this->container['weight']->validate();

        if ($this->container['carrier_name'] === null) {
            throw new AssertionException("'carrier_name' can't be null");
        }

        if ($this->container['tracking_id'] === null) {
            throw new AssertionException("'tracking_id' can't be null");
        }

        if ($this->container['package_status'] === null) {
            throw new AssertionException("'package_status' can't be null");
        }
    }

    /**
     * Gets dimensions.
     */
    public function getDimensions() : Dimensions
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions $dimensions dimensions
     */
    public function setDimensions(Dimensions $dimensions) : self
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight.
     */
    public function getWeight() : Weight
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight $weight weight
     */
    public function setWeight(Weight $weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets carrier_name.
     */
    public function getCarrierName() : string
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name.
     *
     * @param string $carrier_name the carrier specified with a previous call to putTransportDetails
     */
    public function setCarrierName(string $carrier_name) : self
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets tracking_id.
     */
    public function getTrackingId() : string
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id.
     *
     * @param string $tracking_id the tracking number of the package, provided by the carrier
     */
    public function setTrackingId(string $tracking_id) : self
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets package_status.
     */
    public function getPackageStatus() : PackageStatus
    {
        return $this->container['package_status'];
    }

    /**
     * Sets package_status.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\PackageStatus $package_status package_status
     */
    public function setPackageStatus(PackageStatus $package_status) : self
    {
        $this->container['package_status'] = $package_status;

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
