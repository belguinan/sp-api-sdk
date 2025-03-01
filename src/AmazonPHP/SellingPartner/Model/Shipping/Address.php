<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Shipping;

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
class Address implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Address';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'state_or_region' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'postal_code' => 'string',
        'email' => 'string',
        'copy_emails' => 'string[]',
        'phone_number' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'state_or_region' => null,
        'city' => null,
        'country_code' => null,
        'postal_code' => null,
        'email' => null,
        'copy_emails' => null,
        'phone_number' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'address_line3' => 'addressLine3',
        'state_or_region' => 'stateOrRegion',
        'city' => 'city',
        'country_code' => 'countryCode',
        'postal_code' => 'postalCode',
        'email' => 'email',
        'copy_emails' => 'copyEmails',
        'phone_number' => 'phoneNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'state_or_region' => 'setStateOrRegion',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode',
        'email' => 'setEmail',
        'copy_emails' => 'setCopyEmails',
        'phone_number' => 'setPhoneNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'state_or_region' => 'getStateOrRegion',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode',
        'email' => 'getEmail',
        'copy_emails' => 'getCopyEmails',
        'phone_number' => 'getPhoneNumber',
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['address_line3'] = $data['address_line3'] ?? null;
        $this->container['state_or_region'] = $data['state_or_region'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['copy_emails'] = $data['copy_emails'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
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
        if ($this->container['name'] === null) {
            throw new AssertionException("'name' can't be null");
        }

        if ((\mb_strlen($this->container['name']) > 50)) {
            throw new AssertionException("invalid value for 'name', the character length must be smaller than or equal to 50.");
        }

        if ((\mb_strlen($this->container['name']) < 1)) {
            throw new AssertionException("invalid value for 'name', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['address_line1'] === null) {
            throw new AssertionException("'address_line1' can't be null");
        }

        if ((\mb_strlen($this->container['address_line1']) > 60)) {
            throw new AssertionException("invalid value for 'address_line1', the character length must be smaller than or equal to 60.");
        }

        if ((\mb_strlen($this->container['address_line1']) < 1)) {
            throw new AssertionException("invalid value for 'address_line1', the character length must be bigger than or equal to 1.");
        }

        if (null !== $this->container['address_line2'] && (\mb_strlen($this->container['address_line2']) > 60)) {
            throw new AssertionException("invalid value for 'address_line2', the character length must be smaller than or equal to 60.");
        }

        if (null !== $this->container['address_line2'] && (\mb_strlen($this->container['address_line2']) < 1)) {
            throw new AssertionException("invalid value for 'address_line2', the character length must be bigger than or equal to 1.");
        }

        if (null !== $this->container['address_line3'] && (\mb_strlen($this->container['address_line3']) > 60)) {
            throw new AssertionException("invalid value for 'address_line3', the character length must be smaller than or equal to 60.");
        }

        if (null !== $this->container['address_line3'] && (\mb_strlen($this->container['address_line3']) < 1)) {
            throw new AssertionException("invalid value for 'address_line3', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['state_or_region'] === null) {
            throw new AssertionException("'state_or_region' can't be null");
        }

        if ($this->container['city'] === null) {
            throw new AssertionException("'city' can't be null");
        }

        if ((\mb_strlen($this->container['city']) > 50)) {
            throw new AssertionException("invalid value for 'city', the character length must be smaller than or equal to 50.");
        }

        if ((\mb_strlen($this->container['city']) < 1)) {
            throw new AssertionException("invalid value for 'city', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['country_code'] === null) {
            throw new AssertionException("'country_code' can't be null");
        }

        if ((\mb_strlen($this->container['country_code']) > 2)) {
            throw new AssertionException("invalid value for 'country_code', the character length must be smaller than or equal to 2.");
        }

        if ((\mb_strlen($this->container['country_code']) < 2)) {
            throw new AssertionException("invalid value for 'country_code', the character length must be bigger than or equal to 2.");
        }

        if ($this->container['postal_code'] === null) {
            throw new AssertionException("'postal_code' can't be null");
        }

        if ((\mb_strlen($this->container['postal_code']) > 20)) {
            throw new AssertionException("invalid value for 'postal_code', the character length must be smaller than or equal to 20.");
        }

        if ((\mb_strlen($this->container['postal_code']) < 1)) {
            throw new AssertionException("invalid value for 'postal_code', the character length must be bigger than or equal to 1.");
        }

        if (null !== $this->container['email'] && (\mb_strlen($this->container['email']) > 64)) {
            throw new AssertionException("invalid value for 'email', the character length must be smaller than or equal to 64.");
        }

        if (null !== $this->container['copy_emails'] && (\count($this->container['copy_emails']) > 2)) {
            throw new AssertionException("invalid value for 'copy_emails', number of items must be less than or equal to 2.");
        }

        if (null !== $this->container['phone_number'] && (\mb_strlen($this->container['phone_number']) > 20)) {
            throw new AssertionException("invalid value for 'phone_number', the character length must be smaller than or equal to 20.");
        }

        if (null !== $this->container['phone_number'] && (\mb_strlen($this->container['phone_number']) < 1)) {
            throw new AssertionException("invalid value for 'phone_number', the character length must be bigger than or equal to 1.");
        }
    }

    /**
     * Gets name.
     */
    public function getName() : string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name the name of the person, business or institution at that address
     */
    public function setName(string $name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1.
     */
    public function getAddressLine1() : string
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1.
     *
     * @param string $address_line1 first line of that address
     */
    public function setAddressLine1(string $address_line1) : self
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2.
     */
    public function getAddressLine2() : ?string
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2.
     *
     * @param null|string $address_line2 additional address information, if required
     */
    public function setAddressLine2(?string $address_line2) : self
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3.
     */
    public function getAddressLine3() : ?string
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3.
     *
     * @param null|string $address_line3 additional address information, if required
     */
    public function setAddressLine3(?string $address_line3) : self
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets state_or_region.
     */
    public function getStateOrRegion() : string
    {
        return $this->container['state_or_region'];
    }

    /**
     * Sets state_or_region.
     *
     * @param string $state_or_region the state or region where the person, business or institution is located
     */
    public function setStateOrRegion(string $state_or_region) : self
    {
        $this->container['state_or_region'] = $state_or_region;

        return $this;
    }

    /**
     * Gets city.
     */
    public function getCity() : string
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param string $city the city where the person, business or institution is located
     */
    public function setCity(string $city) : self
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code.
     */
    public function getCountryCode() : string
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param string $country_code The two digit country code. In ISO 3166-1 alpha-2 format.
     */
    public function setCountryCode(string $country_code) : self
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_code.
     */
    public function getPostalCode() : string
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param string $postal_code The postal code of that address. It contains a series of letters or digits or both, sometimes including spaces or punctuation.
     */
    public function setPostalCode(string $postal_code) : self
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets email.
     */
    public function getEmail() : ?string
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param null|string $email the email address of the contact associated with the address
     */
    public function setEmail(?string $email) : self
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets copy_emails.
     *
     * @return null|string[]
     */
    public function getCopyEmails() : ?array
    {
        return $this->container['copy_emails'];
    }

    /**
     * Sets copy_emails.
     *
     * @param null|string[] $copy_emails the email cc addresses of the contact associated with the address
     */
    public function setCopyEmails(?array $copy_emails) : self
    {
        $this->container['copy_emails'] = $copy_emails;

        return $this;
    }

    /**
     * Gets phone_number.
     */
    public function getPhoneNumber() : ?string
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number.
     *
     * @param null|string $phone_number the phone number of the person, business or institution located at that address
     */
    public function setPhoneNumber(?string $phone_number) : self
    {
        $this->container['phone_number'] = $phone_number;

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
