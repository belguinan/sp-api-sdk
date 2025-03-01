<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Messaging;

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
class CreateWarrantyRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateWarrantyRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'attachments' => '\AmazonPHP\SellingPartner\Model\Messaging\Attachment[]',
        'coverage_start_date' => '\DateTime',
        'coverage_end_date' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'attachments' => null,
        'coverage_start_date' => 'date-time',
        'coverage_end_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'attachments' => 'attachments',
        'coverage_start_date' => 'coverageStartDate',
        'coverage_end_date' => 'coverageEndDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'attachments' => 'setAttachments',
        'coverage_start_date' => 'setCoverageStartDate',
        'coverage_end_date' => 'setCoverageEndDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'attachments' => 'getAttachments',
        'coverage_start_date' => 'getCoverageStartDate',
        'coverage_end_date' => 'getCoverageEndDate',
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
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['coverage_start_date'] = $data['coverage_start_date'] ?? null;
        $this->container['coverage_end_date'] = $data['coverage_end_date'] ?? null;
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
     * Gets attachments.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Messaging\Attachment[]
     */
    public function getAttachments() : ?array
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Messaging\Attachment[] $attachments Attachments to include in the message to the buyer. If any text is included in the attachment, the text must be written in the buyer's language of preference, which can be retrieved from the GetAttributes operation.
     */
    public function setAttachments(?array $attachments) : self
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets coverage_start_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getCoverageStartDate() : ?\DateTimeInterface
    {
        return $this->container['coverage_start_date'];
    }

    /**
     * Sets coverage_start_date.
     *
     * @param \DateTime|\DateTimeImmutable $coverage_start_date the start date of the warranty coverage to include in the message to the buyer
     */
    public function setCoverageStartDate(\DateTimeInterface $coverage_start_date) : self
    {
        $this->container['coverage_start_date'] = $coverage_start_date;

        return $this;
    }

    /**
     * Gets coverage_end_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getCoverageEndDate() : ?\DateTimeInterface
    {
        return $this->container['coverage_end_date'];
    }

    /**
     * Sets coverage_end_date.
     *
     * @param \DateTime|\DateTimeImmutable $coverage_end_date the end date of the warranty coverage to include in the message to the buyer
     */
    public function setCoverageEndDate(\DateTimeInterface $coverage_end_date) : self
    {
        $this->container['coverage_end_date'] = $coverage_end_date;

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
