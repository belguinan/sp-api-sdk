<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorInvoices;

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
class InvoiceItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'InvoiceItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'item_sequence_number' => 'int',
        'amazon_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'invoiced_quantity' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\ItemQuantity',
        'net_cost' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\Money',
        'purchase_order_number' => 'string',
        'hsn_code' => 'string',
        'credit_note_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\CreditNoteDetails',
        'tax_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]',
        'charge_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\ChargeDetails[]',
        'allowance_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\AllowanceDetails[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'item_sequence_number' => null,
        'amazon_product_identifier' => null,
        'vendor_product_identifier' => null,
        'invoiced_quantity' => null,
        'net_cost' => null,
        'purchase_order_number' => null,
        'hsn_code' => null,
        'credit_note_details' => null,
        'tax_details' => null,
        'charge_details' => null,
        'allowance_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'item_sequence_number' => 'itemSequenceNumber',
        'amazon_product_identifier' => 'amazonProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'invoiced_quantity' => 'invoicedQuantity',
        'net_cost' => 'netCost',
        'purchase_order_number' => 'purchaseOrderNumber',
        'hsn_code' => 'hsnCode',
        'credit_note_details' => 'creditNoteDetails',
        'tax_details' => 'taxDetails',
        'charge_details' => 'chargeDetails',
        'allowance_details' => 'allowanceDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'amazon_product_identifier' => 'setAmazonProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'invoiced_quantity' => 'setInvoicedQuantity',
        'net_cost' => 'setNetCost',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'hsn_code' => 'setHsnCode',
        'credit_note_details' => 'setCreditNoteDetails',
        'tax_details' => 'setTaxDetails',
        'charge_details' => 'setChargeDetails',
        'allowance_details' => 'setAllowanceDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'amazon_product_identifier' => 'getAmazonProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'invoiced_quantity' => 'getInvoicedQuantity',
        'net_cost' => 'getNetCost',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'hsn_code' => 'getHsnCode',
        'credit_note_details' => 'getCreditNoteDetails',
        'tax_details' => 'getTaxDetails',
        'charge_details' => 'getChargeDetails',
        'allowance_details' => 'getAllowanceDetails',
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
        $this->container['item_sequence_number'] = $data['item_sequence_number'] ?? null;
        $this->container['amazon_product_identifier'] = $data['amazon_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['invoiced_quantity'] = $data['invoiced_quantity'] ?? null;
        $this->container['net_cost'] = $data['net_cost'] ?? null;
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['hsn_code'] = $data['hsn_code'] ?? null;
        $this->container['credit_note_details'] = $data['credit_note_details'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['charge_details'] = $data['charge_details'] ?? null;
        $this->container['allowance_details'] = $data['allowance_details'] ?? null;
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
        if ($this->container['item_sequence_number'] === null) {
            throw new AssertionException("'item_sequence_number' can't be null");
        }

        if ($this->container['invoiced_quantity'] === null) {
            throw new AssertionException("'invoiced_quantity' can't be null");
        }

        $this->container['invoiced_quantity']->validate();

        if ($this->container['net_cost'] === null) {
            throw new AssertionException("'net_cost' can't be null");
        }

        $this->container['net_cost']->validate();

        if ($this->container['credit_note_details'] !== null) {
            $this->container['credit_note_details']->validate();
        }
    }

    /**
     * Gets item_sequence_number.
     */
    public function getItemSequenceNumber() : int
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number.
     *
     * @param int $item_sequence_number unique number related to this line item
     */
    public function setItemSequenceNumber(int $item_sequence_number) : self
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets amazon_product_identifier.
     */
    public function getAmazonProductIdentifier() : ?string
    {
        return $this->container['amazon_product_identifier'];
    }

    /**
     * Sets amazon_product_identifier.
     *
     * @param null|string $amazon_product_identifier amazon Standard Identification Number (ASIN) of an item
     */
    public function setAmazonProductIdentifier(?string $amazon_product_identifier) : self
    {
        $this->container['amazon_product_identifier'] = $amazon_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier.
     */
    public function getVendorProductIdentifier() : ?string
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier.
     *
     * @param null|string $vendor_product_identifier The vendor selected product identifier of the item. Should be the same as was provided in the purchase order.
     */
    public function setVendorProductIdentifier(?string $vendor_product_identifier) : self
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets invoiced_quantity.
     */
    public function getInvoicedQuantity() : ItemQuantity
    {
        return $this->container['invoiced_quantity'];
    }

    /**
     * Sets invoiced_quantity.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\ItemQuantity $invoiced_quantity invoiced_quantity
     */
    public function setInvoicedQuantity(ItemQuantity $invoiced_quantity) : self
    {
        $this->container['invoiced_quantity'] = $invoiced_quantity;

        return $this;
    }

    /**
     * Gets net_cost.
     */
    public function getNetCost() : Money
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\Money $net_cost net_cost
     */
    public function setNetCost(Money $net_cost) : self
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }

    /**
     * Gets purchase_order_number.
     */
    public function getPurchaseOrderNumber() : ?string
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param null|string $purchase_order_number The Amazon purchase order number for this invoiced line item. Formatting Notes: 8-character alpha-numeric code. This value is mandatory only when invoiceType is Invoice, and is not required when invoiceType is CreditNote.
     */
    public function setPurchaseOrderNumber(?string $purchase_order_number) : self
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets hsn_code.
     */
    public function getHsnCode() : ?string
    {
        return $this->container['hsn_code'];
    }

    /**
     * Sets hsn_code.
     *
     * @param null|string $hsn_code HSN Tax code. The HSN number cannot contain alphabets.
     */
    public function setHsnCode(?string $hsn_code) : self
    {
        $this->container['hsn_code'] = $hsn_code;

        return $this;
    }

    /**
     * Gets credit_note_details.
     */
    public function getCreditNoteDetails() : ?CreditNoteDetails
    {
        return $this->container['credit_note_details'];
    }

    /**
     * Sets credit_note_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorInvoices\CreditNoteDetails $credit_note_details credit_note_details
     */
    public function setCreditNoteDetails(?CreditNoteDetails $credit_note_details) : self
    {
        $this->container['credit_note_details'] = $credit_note_details;

        return $this;
    }

    /**
     * Gets tax_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]
     */
    public function getTaxDetails() : ?array
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[] $tax_details individual tax details per line item
     */
    public function setTaxDetails(?array $tax_details) : self
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets charge_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorInvoices\ChargeDetails[]
     */
    public function getChargeDetails() : ?array
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorInvoices\ChargeDetails[] $charge_details individual charge details per line item
     */
    public function setChargeDetails(?array $charge_details) : self
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }

    /**
     * Gets allowance_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorInvoices\AllowanceDetails[]
     */
    public function getAllowanceDetails() : ?array
    {
        return $this->container['allowance_details'];
    }

    /**
     * Sets allowance_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorInvoices\AllowanceDetails[] $allowance_details individual allowance details per line item
     */
    public function setAllowanceDetails(?array $allowance_details) : self
    {
        $this->container['allowance_details'] = $allowance_details;

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
