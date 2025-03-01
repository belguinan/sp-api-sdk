<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Reports;

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
class CreateReportSpecification implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateReportSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'report_options' => 'array<string,string>',
        'report_type' => 'string',
        'data_start_time' => '\DateTime',
        'data_end_time' => '\DateTime',
        'marketplace_ids' => 'string[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'report_options' => null,
        'report_type' => null,
        'data_start_time' => 'date-time',
        'data_end_time' => 'date-time',
        'marketplace_ids' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'report_options' => 'reportOptions',
        'report_type' => 'reportType',
        'data_start_time' => 'dataStartTime',
        'data_end_time' => 'dataEndTime',
        'marketplace_ids' => 'marketplaceIds',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'report_options' => 'setReportOptions',
        'report_type' => 'setReportType',
        'data_start_time' => 'setDataStartTime',
        'data_end_time' => 'setDataEndTime',
        'marketplace_ids' => 'setMarketplaceIds',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'report_options' => 'getReportOptions',
        'report_type' => 'getReportType',
        'data_start_time' => 'getDataStartTime',
        'data_end_time' => 'getDataEndTime',
        'marketplace_ids' => 'getMarketplaceIds',
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
        $this->container['report_options'] = $data['report_options'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['data_start_time'] = $data['data_start_time'] ?? null;
        $this->container['data_end_time'] = $data['data_end_time'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
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
        if ($this->container['report_type'] === null) {
            throw new AssertionException("'report_type' can't be null");
        }

        if ($this->container['marketplace_ids'] === null) {
            throw new AssertionException("'marketplace_ids' can't be null");
        }

        if ((\count($this->container['marketplace_ids']) > 25)) {
            throw new AssertionException("invalid value for 'marketplace_ids', number of items must be less than or equal to 25.");
        }

        if ((\count($this->container['marketplace_ids']) < 1)) {
            throw new AssertionException("invalid value for 'marketplace_ids', number of items must be greater than or equal to 1.");
        }
    }

    /**
     * Gets report_options.
     *
     * @return null|array<string,string>
     */
    public function getReportOptions() : ?array
    {
        return $this->container['report_options'];
    }

    /**
     * Sets report_options.
     *
     * @param null|array<string,string> $report_options Additional information passed to reports. This varies by report type.
     */
    public function setReportOptions(?array $report_options) : self
    {
        $this->container['report_options'] = $report_options;

        return $this;
    }

    /**
     * Gets report_type.
     */
    public function getReportType() : string
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type.
     *
     * @param string $report_type the report type
     */
    public function setReportType(string $report_type) : self
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets data_start_time.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getDataStartTime() : ?\DateTimeInterface
    {
        return $this->container['data_start_time'];
    }

    /**
     * Sets data_start_time.
     *
     * @param \DateTime|\DateTimeImmutable $data_start_time The start of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     */
    public function setDataStartTime(\DateTimeInterface $data_start_time) : self
    {
        $this->container['data_start_time'] = $data_start_time;

        return $this;
    }

    /**
     * Gets data_end_time.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getDataEndTime() : ?\DateTimeInterface
    {
        return $this->container['data_end_time'];
    }

    /**
     * Sets data_end_time.
     *
     * @param \DateTime|\DateTimeImmutable $data_end_time The end of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     */
    public function setDataEndTime(\DateTimeInterface $data_end_time) : self
    {
        $this->container['data_end_time'] = $data_end_time;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return string[]
     */
    public function getMarketplaceIds() : array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param string[] $marketplace_ids A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise.
     */
    public function setMarketplaceIds(array $marketplace_ids) : self
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

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
