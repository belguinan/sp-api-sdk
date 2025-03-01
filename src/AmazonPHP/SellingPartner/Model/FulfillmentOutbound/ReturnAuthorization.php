<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class ReturnAuthorization implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ReturnAuthorization';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'return_authorization_id' => 'string',
        'fulfillment_center_id' => 'string',
        'return_to_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address',
        'amazon_rma_id' => 'string',
        'rma_page_url' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'return_authorization_id' => null,
        'fulfillment_center_id' => null,
        'return_to_address' => null,
        'amazon_rma_id' => null,
        'rma_page_url' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'return_authorization_id' => 'returnAuthorizationId',
        'fulfillment_center_id' => 'fulfillmentCenterId',
        'return_to_address' => 'returnToAddress',
        'amazon_rma_id' => 'amazonRmaId',
        'rma_page_url' => 'rmaPageURL',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'return_authorization_id' => 'setReturnAuthorizationId',
        'fulfillment_center_id' => 'setFulfillmentCenterId',
        'return_to_address' => 'setReturnToAddress',
        'amazon_rma_id' => 'setAmazonRmaId',
        'rma_page_url' => 'setRmaPageUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'return_authorization_id' => 'getReturnAuthorizationId',
        'fulfillment_center_id' => 'getFulfillmentCenterId',
        'return_to_address' => 'getReturnToAddress',
        'amazon_rma_id' => 'getAmazonRmaId',
        'rma_page_url' => 'getRmaPageUrl',
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
        $this->container['return_authorization_id'] = $data['return_authorization_id'] ?? null;
        $this->container['fulfillment_center_id'] = $data['fulfillment_center_id'] ?? null;
        $this->container['return_to_address'] = $data['return_to_address'] ?? null;
        $this->container['amazon_rma_id'] = $data['amazon_rma_id'] ?? null;
        $this->container['rma_page_url'] = $data['rma_page_url'] ?? null;
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
        if ($this->container['return_authorization_id'] === null) {
            throw new AssertionException("'return_authorization_id' can't be null");
        }

        if ($this->container['fulfillment_center_id'] === null) {
            throw new AssertionException("'fulfillment_center_id' can't be null");
        }

        if ($this->container['return_to_address'] === null) {
            throw new AssertionException("'return_to_address' can't be null");
        }

        $this->container['return_to_address']->validate();

        if ($this->container['amazon_rma_id'] === null) {
            throw new AssertionException("'amazon_rma_id' can't be null");
        }

        if ($this->container['rma_page_url'] === null) {
            throw new AssertionException("'rma_page_url' can't be null");
        }
    }

    /**
     * Gets return_authorization_id.
     */
    public function getReturnAuthorizationId() : string
    {
        return $this->container['return_authorization_id'];
    }

    /**
     * Sets return_authorization_id.
     *
     * @param string $return_authorization_id An identifier for the return authorization. This identifier associates return items with the return authorization used to return them.
     */
    public function setReturnAuthorizationId(string $return_authorization_id) : self
    {
        $this->container['return_authorization_id'] = $return_authorization_id;

        return $this;
    }

    /**
     * Gets fulfillment_center_id.
     */
    public function getFulfillmentCenterId() : string
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id.
     *
     * @param string $fulfillment_center_id an identifier for the Amazon fulfillment center that the return items should be sent to
     */
    public function setFulfillmentCenterId(string $fulfillment_center_id) : self
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

        return $this;
    }

    /**
     * Gets return_to_address.
     */
    public function getReturnToAddress() : Address
    {
        return $this->container['return_to_address'];
    }

    /**
     * Sets return_to_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address $return_to_address return_to_address
     */
    public function setReturnToAddress(Address $return_to_address) : self
    {
        $this->container['return_to_address'] = $return_to_address;

        return $this;
    }

    /**
     * Gets amazon_rma_id.
     */
    public function getAmazonRmaId() : string
    {
        return $this->container['amazon_rma_id'];
    }

    /**
     * Sets amazon_rma_id.
     *
     * @param string $amazon_rma_id the return merchandise authorization (RMA) that Amazon needs to process the return
     */
    public function setAmazonRmaId(string $amazon_rma_id) : self
    {
        $this->container['amazon_rma_id'] = $amazon_rma_id;

        return $this;
    }

    /**
     * Gets rma_page_url.
     */
    public function getRmaPageUrl() : string
    {
        return $this->container['rma_page_url'];
    }

    /**
     * Sets rma_page_url.
     *
     * @param string $rma_page_url A URL for a web page that contains the return authorization barcode and the mailing label. This does not include pre-paid shipping.
     */
    public function setRmaPageUrl(string $rma_page_url) : self
    {
        $this->container['rma_page_url'] = $rma_page_url;

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
