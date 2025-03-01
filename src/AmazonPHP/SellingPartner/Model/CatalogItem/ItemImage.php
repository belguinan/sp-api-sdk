<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\CatalogItem;

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
class ItemImage implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const VARIANT_MAIN = 'MAIN';

    public const VARIANT_PT01 = 'PT01';

    public const VARIANT_PT02 = 'PT02';

    public const VARIANT_PT03 = 'PT03';

    public const VARIANT_PT04 = 'PT04';

    public const VARIANT_PT05 = 'PT05';

    public const VARIANT_PT06 = 'PT06';

    public const VARIANT_PT07 = 'PT07';

    public const VARIANT_PT08 = 'PT08';

    public const VARIANT_SWCH = 'SWCH';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemImage';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'variant' => 'string',
        'link' => 'string',
        'height' => 'int',
        'width' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'variant' => null,
        'link' => null,
        'height' => null,
        'width' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'variant' => 'variant',
        'link' => 'link',
        'height' => 'height',
        'width' => 'width',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'variant' => 'setVariant',
        'link' => 'setLink',
        'height' => 'setHeight',
        'width' => 'setWidth',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'variant' => 'getVariant',
        'link' => 'getLink',
        'height' => 'getHeight',
        'width' => 'getWidth',
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
        $this->container['variant'] = $data['variant'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
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
    public function getVariantAllowableValues() : array
    {
        return [
            self::VARIANT_MAIN,
            self::VARIANT_PT01,
            self::VARIANT_PT02,
            self::VARIANT_PT03,
            self::VARIANT_PT04,
            self::VARIANT_PT05,
            self::VARIANT_PT06,
            self::VARIANT_PT07,
            self::VARIANT_PT08,
            self::VARIANT_SWCH,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['variant'] === null) {
            throw new AssertionException("'variant' can't be null");
        }

        $allowedValues = $this->getVariantAllowableValues();

        if (null !== $this->container['variant'] && !\in_array($this->container['variant'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'variant', must be one of '%s'",
                    $this->container['variant'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['link'] === null) {
            throw new AssertionException("'link' can't be null");
        }

        if ($this->container['height'] === null) {
            throw new AssertionException("'height' can't be null");
        }

        if ($this->container['width'] === null) {
            throw new AssertionException("'width' can't be null");
        }
    }

    /**
     * Gets variant.
     */
    public function getVariant() : string
    {
        return $this->container['variant'];
    }

    /**
     * Sets variant.
     *
     * @param string $variant variant of the image, such as MAIN or PT01
     */
    public function setVariant(string $variant) : self
    {
        $this->container['variant'] = $variant;

        return $this;
    }

    /**
     * Gets link.
     */
    public function getLink() : string
    {
        return $this->container['link'];
    }

    /**
     * Sets link.
     *
     * @param string $link link, or URL, for the image
     */
    public function setLink(string $link) : self
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets height.
     */
    public function getHeight() : int
    {
        return $this->container['height'];
    }

    /**
     * Sets height.
     *
     * @param int $height height of the image in pixels
     */
    public function setHeight(int $height) : self
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width.
     */
    public function getWidth() : int
    {
        return $this->container['width'];
    }

    /**
     * Sets width.
     *
     * @param int $width width of the image in pixels
     */
    public function setWidth(int $width) : self
    {
        $this->container['width'] = $width;

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
