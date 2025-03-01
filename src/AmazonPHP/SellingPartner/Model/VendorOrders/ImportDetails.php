<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorOrders;

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
class ImportDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const METHOD_OF_PAYMENT_PAID_BY_BUYER = 'PaidByBuyer';

    public const METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY = 'CollectOnDelivery';

    public const METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER = 'DefinedByBuyerAndSeller';

    public const METHOD_OF_PAYMENT_FOB_PORT_OF_CALL = 'FOBPortOfCall';

    public const METHOD_OF_PAYMENT_PREPAID_BY_SELLER = 'PrepaidBySeller';

    public const METHOD_OF_PAYMENT_PAID_BY_SELLER = 'PaidBySeller';

    public const INTERNATIONAL_COMMERCIAL_TERMS_EX_WORKS = 'ExWorks';

    public const INTERNATIONAL_COMMERCIAL_TERMS_FREE_CARRIER = 'FreeCarrier';

    public const INTERNATIONAL_COMMERCIAL_TERMS_FREE_ON_BOARD = 'FreeOnBoard';

    public const INTERNATIONAL_COMMERCIAL_TERMS_FREE_ALONG_SIDE_SHIP = 'FreeAlongSideShip';

    public const INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_PAID_TO = 'CarriagePaidTo';

    public const INTERNATIONAL_COMMERCIAL_TERMS_COST_AND_FREIGHT = 'CostAndFreight';

    public const INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_AND_INSURANCE_PAID_TO = 'CarriageAndInsurancePaidTo';

    public const INTERNATIONAL_COMMERCIAL_TERMS_COST_INSURANCE_AND_FREIGHT = 'CostInsuranceAndFreight';

    public const INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_TERMINAL = 'DeliveredAtTerminal';

    public const INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_PLACE = 'DeliveredAtPlace';

    public const INTERNATIONAL_COMMERCIAL_TERMS_DELIVER_DUTY_PAID = 'DeliverDutyPaid';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ImportDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'method_of_payment' => 'string',
        'international_commercial_terms' => 'string',
        'port_of_delivery' => 'string',
        'import_containers' => 'string',
        'shipping_instructions' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'method_of_payment' => null,
        'international_commercial_terms' => null,
        'port_of_delivery' => null,
        'import_containers' => null,
        'shipping_instructions' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'method_of_payment' => 'methodOfPayment',
        'international_commercial_terms' => 'internationalCommercialTerms',
        'port_of_delivery' => 'portOfDelivery',
        'import_containers' => 'importContainers',
        'shipping_instructions' => 'shippingInstructions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'method_of_payment' => 'setMethodOfPayment',
        'international_commercial_terms' => 'setInternationalCommercialTerms',
        'port_of_delivery' => 'setPortOfDelivery',
        'import_containers' => 'setImportContainers',
        'shipping_instructions' => 'setShippingInstructions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'method_of_payment' => 'getMethodOfPayment',
        'international_commercial_terms' => 'getInternationalCommercialTerms',
        'port_of_delivery' => 'getPortOfDelivery',
        'import_containers' => 'getImportContainers',
        'shipping_instructions' => 'getShippingInstructions',
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
        $this->container['method_of_payment'] = $data['method_of_payment'] ?? null;
        $this->container['international_commercial_terms'] = $data['international_commercial_terms'] ?? null;
        $this->container['port_of_delivery'] = $data['port_of_delivery'] ?? null;
        $this->container['import_containers'] = $data['import_containers'] ?? null;
        $this->container['shipping_instructions'] = $data['shipping_instructions'] ?? null;
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
    public function getMethodOfPaymentAllowableValues() : array
    {
        return [
            self::METHOD_OF_PAYMENT_PAID_BY_BUYER,
            self::METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY,
            self::METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER,
            self::METHOD_OF_PAYMENT_FOB_PORT_OF_CALL,
            self::METHOD_OF_PAYMENT_PREPAID_BY_SELLER,
            self::METHOD_OF_PAYMENT_PAID_BY_SELLER,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getInternationalCommercialTermsAllowableValues() : array
    {
        return [
            self::INTERNATIONAL_COMMERCIAL_TERMS_EX_WORKS,
            self::INTERNATIONAL_COMMERCIAL_TERMS_FREE_CARRIER,
            self::INTERNATIONAL_COMMERCIAL_TERMS_FREE_ON_BOARD,
            self::INTERNATIONAL_COMMERCIAL_TERMS_FREE_ALONG_SIDE_SHIP,
            self::INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_PAID_TO,
            self::INTERNATIONAL_COMMERCIAL_TERMS_COST_AND_FREIGHT,
            self::INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_AND_INSURANCE_PAID_TO,
            self::INTERNATIONAL_COMMERCIAL_TERMS_COST_INSURANCE_AND_FREIGHT,
            self::INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_TERMINAL,
            self::INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_PLACE,
            self::INTERNATIONAL_COMMERCIAL_TERMS_DELIVER_DUTY_PAID,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getMethodOfPaymentAllowableValues();

        if (null !== $this->container['method_of_payment'] && !\in_array($this->container['method_of_payment'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'method_of_payment', must be one of '%s'",
                    $this->container['method_of_payment'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        $allowedValues = $this->getInternationalCommercialTermsAllowableValues();

        if (null !== $this->container['international_commercial_terms'] && !\in_array($this->container['international_commercial_terms'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'international_commercial_terms', must be one of '%s'",
                    $this->container['international_commercial_terms'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if (null !== $this->container['port_of_delivery'] && (\mb_strlen($this->container['port_of_delivery']) > 64)) {
            throw new AssertionException("invalid value for 'port_of_delivery', the character length must be smaller than or equal to 64.");
        }

        if (null !== $this->container['import_containers'] && (\mb_strlen($this->container['import_containers']) > 64)) {
            throw new AssertionException("invalid value for 'import_containers', the character length must be smaller than or equal to 64.");
        }
    }

    /**
     * Gets method_of_payment.
     */
    public function getMethodOfPayment() : ?string
    {
        return $this->container['method_of_payment'];
    }

    /**
     * Sets method_of_payment.
     *
     * @param null|string $method_of_payment If the recipient requests, contains the shipment method of payment. This is for import PO's only.
     */
    public function setMethodOfPayment(?string $method_of_payment) : self
    {
        $this->container['method_of_payment'] = $method_of_payment;

        return $this;
    }

    /**
     * Gets international_commercial_terms.
     */
    public function getInternationalCommercialTerms() : ?string
    {
        return $this->container['international_commercial_terms'];
    }

    /**
     * Sets international_commercial_terms.
     *
     * @param null|string $international_commercial_terms Incoterms (International Commercial Terms) are used to divide transaction costs and responsibilities between buyer and seller and reflect state-of-the-art transportation practices. This is for import purchase orders only.
     */
    public function setInternationalCommercialTerms(?string $international_commercial_terms) : self
    {
        $this->container['international_commercial_terms'] = $international_commercial_terms;

        return $this;
    }

    /**
     * Gets port_of_delivery.
     */
    public function getPortOfDelivery() : ?string
    {
        return $this->container['port_of_delivery'];
    }

    /**
     * Sets port_of_delivery.
     *
     * @param null|string $port_of_delivery The port where goods on an import purchase order must be delivered by the vendor. This should only be specified when the internationalCommercialTerms is FOB.
     */
    public function setPortOfDelivery(?string $port_of_delivery) : self
    {
        $this->container['port_of_delivery'] = $port_of_delivery;

        return $this;
    }

    /**
     * Gets import_containers.
     */
    public function getImportContainers() : ?string
    {
        return $this->container['import_containers'];
    }

    /**
     * Sets import_containers.
     *
     * @param null|string $import_containers Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if the shipment has multiple containers. HC signifies a high-capacity container. Free-text field, limited to 64 characters. The format will be a comma-delimited list containing values of the type: $NUMBER_OF_CONTAINERS_OF_THIS_TYPE-$CONTAINER_TYPE. The list of values for the container type is: 40'(40-foot container), 40'HC (40-foot high-capacity container), 45', 45'HC, 30', 30'HC, 20', 20'HC.
     */
    public function setImportContainers(?string $import_containers) : self
    {
        $this->container['import_containers'] = $import_containers;

        return $this;
    }

    /**
     * Gets shipping_instructions.
     */
    public function getShippingInstructions() : ?string
    {
        return $this->container['shipping_instructions'];
    }

    /**
     * Sets shipping_instructions.
     *
     * @param null|string $shipping_instructions Special instructions regarding the shipment. This field is for import purchase orders.
     */
    public function setShippingInstructions(?string $shipping_instructions) : self
    {
        $this->container['shipping_instructions'] = $shipping_instructions;

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
