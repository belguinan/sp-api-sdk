<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

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
class RegulatedOrderVerificationStatus implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RegulatedOrderVerificationStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'status' => '\AmazonPHP\SellingPartner\Model\Orders\VerificationStatus',
        'requires_merchant_action' => 'bool',
        'valid_rejection_reasons' => '\AmazonPHP\SellingPartner\Model\Orders\RejectionReason[]',
        'rejection_reason' => '\AmazonPHP\SellingPartner\Model\Orders\RejectionReason',
        'review_date' => 'string',
        'external_reviewer_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'status' => null,
        'requires_merchant_action' => null,
        'valid_rejection_reasons' => null,
        'rejection_reason' => null,
        'review_date' => null,
        'external_reviewer_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'status' => 'Status',
        'requires_merchant_action' => 'RequiresMerchantAction',
        'valid_rejection_reasons' => 'ValidRejectionReasons',
        'rejection_reason' => 'RejectionReason',
        'review_date' => 'ReviewDate',
        'external_reviewer_id' => 'ExternalReviewerId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'requires_merchant_action' => 'setRequiresMerchantAction',
        'valid_rejection_reasons' => 'setValidRejectionReasons',
        'rejection_reason' => 'setRejectionReason',
        'review_date' => 'setReviewDate',
        'external_reviewer_id' => 'setExternalReviewerId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'requires_merchant_action' => 'getRequiresMerchantAction',
        'valid_rejection_reasons' => 'getValidRejectionReasons',
        'rejection_reason' => 'getRejectionReason',
        'review_date' => 'getReviewDate',
        'external_reviewer_id' => 'getExternalReviewerId',
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['requires_merchant_action'] = $data['requires_merchant_action'] ?? null;
        $this->container['valid_rejection_reasons'] = $data['valid_rejection_reasons'] ?? null;
        $this->container['rejection_reason'] = $data['rejection_reason'] ?? null;
        $this->container['review_date'] = $data['review_date'] ?? null;
        $this->container['external_reviewer_id'] = $data['external_reviewer_id'] ?? null;
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
        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ($this->container['requires_merchant_action'] === null) {
            throw new AssertionException("'requires_merchant_action' can't be null");
        }

        if ($this->container['valid_rejection_reasons'] === null) {
            throw new AssertionException("'valid_rejection_reasons' can't be null");
        }

        if ($this->container['rejection_reason'] !== null) {
            $this->container['rejection_reason']->validate();
        }
    }

    /**
     * Gets status.
     */
    public function getStatus() : VerificationStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\VerificationStatus $status status
     */
    public function setStatus(VerificationStatus $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets requires_merchant_action.
     */
    public function getRequiresMerchantAction() : bool
    {
        return $this->container['requires_merchant_action'];
    }

    /**
     * Sets requires_merchant_action.
     *
     * @param bool $requires_merchant_action when true, the regulated information provided in the order requires a review by the merchant
     */
    public function setRequiresMerchantAction(bool $requires_merchant_action) : self
    {
        $this->container['requires_merchant_action'] = $requires_merchant_action;

        return $this;
    }

    /**
     * Gets valid_rejection_reasons.
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\RejectionReason[]
     */
    public function getValidRejectionReasons() : array
    {
        return $this->container['valid_rejection_reasons'];
    }

    /**
     * Sets valid_rejection_reasons.
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\RejectionReason[] $valid_rejection_reasons a list of valid rejection reasons that may be used to reject the order's regulated information
     */
    public function setValidRejectionReasons(array $valid_rejection_reasons) : self
    {
        $this->container['valid_rejection_reasons'] = $valid_rejection_reasons;

        return $this;
    }

    /**
     * Gets rejection_reason.
     */
    public function getRejectionReason() : ?RejectionReason
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\RejectionReason $rejection_reason rejection_reason
     */
    public function setRejectionReason(?RejectionReason $rejection_reason) : self
    {
        $this->container['rejection_reason'] = $rejection_reason;

        return $this;
    }

    /**
     * Gets review_date.
     */
    public function getReviewDate() : ?string
    {
        return $this->container['review_date'];
    }

    /**
     * Sets review_date.
     *
     * @param null|string $review_date The date the order was reviewed. In ISO 8601 date time format.
     */
    public function setReviewDate(?string $review_date) : self
    {
        $this->container['review_date'] = $review_date;

        return $this;
    }

    /**
     * Gets external_reviewer_id.
     */
    public function getExternalReviewerId() : ?string
    {
        return $this->container['external_reviewer_id'];
    }

    /**
     * Sets external_reviewer_id.
     *
     * @param null|string $external_reviewer_id the identifier for the order's regulated information reviewer
     */
    public function setExternalReviewerId(?string $external_reviewer_id) : self
    {
        $this->container['external_reviewer_id'] = $external_reviewer_id;

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
