<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

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
class PayWithAmazonEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PayWithAmazonEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_order_id' => 'string',
        'transaction_posted_date' => '\DateTime',
        'business_object_type' => 'string',
        'sales_channel' => 'string',
        'charge' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent',
        'fee_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'payment_amount_type' => 'string',
        'amount_description' => 'string',
        'fulfillment_channel' => 'string',
        'store_name' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'seller_order_id' => null,
        'transaction_posted_date' => 'date-time',
        'business_object_type' => null,
        'sales_channel' => null,
        'charge' => null,
        'fee_list' => null,
        'payment_amount_type' => null,
        'amount_description' => null,
        'fulfillment_channel' => null,
        'store_name' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'seller_order_id' => 'SellerOrderId',
        'transaction_posted_date' => 'TransactionPostedDate',
        'business_object_type' => 'BusinessObjectType',
        'sales_channel' => 'SalesChannel',
        'charge' => 'Charge',
        'fee_list' => 'FeeList',
        'payment_amount_type' => 'PaymentAmountType',
        'amount_description' => 'AmountDescription',
        'fulfillment_channel' => 'FulfillmentChannel',
        'store_name' => 'StoreName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_order_id' => 'setSellerOrderId',
        'transaction_posted_date' => 'setTransactionPostedDate',
        'business_object_type' => 'setBusinessObjectType',
        'sales_channel' => 'setSalesChannel',
        'charge' => 'setCharge',
        'fee_list' => 'setFeeList',
        'payment_amount_type' => 'setPaymentAmountType',
        'amount_description' => 'setAmountDescription',
        'fulfillment_channel' => 'setFulfillmentChannel',
        'store_name' => 'setStoreName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_order_id' => 'getSellerOrderId',
        'transaction_posted_date' => 'getTransactionPostedDate',
        'business_object_type' => 'getBusinessObjectType',
        'sales_channel' => 'getSalesChannel',
        'charge' => 'getCharge',
        'fee_list' => 'getFeeList',
        'payment_amount_type' => 'getPaymentAmountType',
        'amount_description' => 'getAmountDescription',
        'fulfillment_channel' => 'getFulfillmentChannel',
        'store_name' => 'getStoreName',
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
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['transaction_posted_date'] = $data['transaction_posted_date'] ?? null;
        $this->container['business_object_type'] = $data['business_object_type'] ?? null;
        $this->container['sales_channel'] = $data['sales_channel'] ?? null;
        $this->container['charge'] = $data['charge'] ?? null;
        $this->container['fee_list'] = $data['fee_list'] ?? null;
        $this->container['payment_amount_type'] = $data['payment_amount_type'] ?? null;
        $this->container['amount_description'] = $data['amount_description'] ?? null;
        $this->container['fulfillment_channel'] = $data['fulfillment_channel'] ?? null;
        $this->container['store_name'] = $data['store_name'] ?? null;
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
        if ($this->container['charge'] !== null) {
            $this->container['charge']->validate();
        }
    }

    /**
     * Gets seller_order_id.
     */
    public function getSellerOrderId() : ?string
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param null|string $seller_order_id an order identifier that is specified by the seller
     */
    public function setSellerOrderId(?string $seller_order_id) : self
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets transaction_posted_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getTransactionPostedDate() : ?\DateTimeInterface
    {
        return $this->container['transaction_posted_date'];
    }

    /**
     * Sets transaction_posted_date.
     *
     * @param \DateTime|\DateTimeImmutable $transaction_posted_date transaction_posted_date
     */
    public function setTransactionPostedDate(\DateTimeInterface $transaction_posted_date) : self
    {
        $this->container['transaction_posted_date'] = $transaction_posted_date;

        return $this;
    }

    /**
     * Gets business_object_type.
     */
    public function getBusinessObjectType() : ?string
    {
        return $this->container['business_object_type'];
    }

    /**
     * Sets business_object_type.
     *
     * @param null|string $business_object_type the type of business object
     */
    public function setBusinessObjectType(?string $business_object_type) : self
    {
        $this->container['business_object_type'] = $business_object_type;

        return $this;
    }

    /**
     * Gets sales_channel.
     */
    public function getSalesChannel() : ?string
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel.
     *
     * @param null|string $sales_channel the sales channel for the transaction
     */
    public function setSalesChannel(?string $sales_channel) : self
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets charge.
     */
    public function getCharge() : ?ChargeComponent
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent $charge charge
     */
    public function setCharge(?ChargeComponent $charge) : self
    {
        $this->container['charge'] = $charge;

        return $this;
    }

    /**
     * Gets fee_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getFeeList() : ?array
    {
        return $this->container['fee_list'];
    }

    /**
     * Sets fee_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $fee_list a list of fee component information
     */
    public function setFeeList(?array $fee_list) : self
    {
        $this->container['fee_list'] = $fee_list;

        return $this;
    }

    /**
     * Gets payment_amount_type.
     */
    public function getPaymentAmountType() : ?string
    {
        return $this->container['payment_amount_type'];
    }

    /**
     * Sets payment_amount_type.
     *
     * @param null|string $payment_amount_type The type of payment.  Possible values:  * Sales
     */
    public function setPaymentAmountType(?string $payment_amount_type) : self
    {
        $this->container['payment_amount_type'] = $payment_amount_type;

        return $this;
    }

    /**
     * Gets amount_description.
     */
    public function getAmountDescription() : ?string
    {
        return $this->container['amount_description'];
    }

    /**
     * Sets amount_description.
     *
     * @param null|string $amount_description a short description of this payment event
     */
    public function setAmountDescription(?string $amount_description) : self
    {
        $this->container['amount_description'] = $amount_description;

        return $this;
    }

    /**
     * Gets fulfillment_channel.
     */
    public function getFulfillmentChannel() : ?string
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel.
     *
     * @param null|string $fulfillment_channel The fulfillment channel.  Possible values:  * AFN - Amazon Fulfillment Network (Fulfillment by Amazon)  * MFN - Merchant Fulfillment Network (self-fulfilled)
     */
    public function setFulfillmentChannel(?string $fulfillment_channel) : self
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets store_name.
     */
    public function getStoreName() : ?string
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name.
     *
     * @param null|string $store_name the store name where the event occurred
     */
    public function setStoreName(?string $store_name) : self
    {
        $this->container['store_name'] = $store_name;

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
