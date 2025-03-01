<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

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
class OfferDetail implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'OfferDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'my_offer' => 'bool',
        'offer_type' => '\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCustomerType',
        'sub_condition' => 'string',
        'seller_id' => 'string',
        'condition_notes' => 'string',
        'seller_feedback_rating' => '\AmazonPHP\SellingPartner\Model\ProductPricing\SellerFeedbackType',
        'shipping_time' => '\AmazonPHP\SellingPartner\Model\ProductPricing\DetailedShippingTimeType',
        'listing_price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'quantity_discount_prices' => '\AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountPriceType[]',
        'points' => '\AmazonPHP\SellingPartner\Model\ProductPricing\Points',
        'shipping' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'ships_from' => '\AmazonPHP\SellingPartner\Model\ProductPricing\ShipsFromType',
        'is_fulfilled_by_amazon' => 'bool',
        'prime_information' => '\AmazonPHP\SellingPartner\Model\ProductPricing\PrimeInformationType',
        'is_buy_box_winner' => 'bool',
        'is_featured_merchant' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'my_offer' => null,
        'offer_type' => null,
        'sub_condition' => null,
        'seller_id' => null,
        'condition_notes' => null,
        'seller_feedback_rating' => null,
        'shipping_time' => null,
        'listing_price' => null,
        'quantity_discount_prices' => null,
        'points' => null,
        'shipping' => null,
        'ships_from' => null,
        'is_fulfilled_by_amazon' => null,
        'prime_information' => null,
        'is_buy_box_winner' => null,
        'is_featured_merchant' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'my_offer' => 'MyOffer',
        'offer_type' => 'offerType',
        'sub_condition' => 'SubCondition',
        'seller_id' => 'SellerId',
        'condition_notes' => 'ConditionNotes',
        'seller_feedback_rating' => 'SellerFeedbackRating',
        'shipping_time' => 'ShippingTime',
        'listing_price' => 'ListingPrice',
        'quantity_discount_prices' => 'quantityDiscountPrices',
        'points' => 'Points',
        'shipping' => 'Shipping',
        'ships_from' => 'ShipsFrom',
        'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
        'prime_information' => 'PrimeInformation',
        'is_buy_box_winner' => 'IsBuyBoxWinner',
        'is_featured_merchant' => 'IsFeaturedMerchant',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'my_offer' => 'setMyOffer',
        'offer_type' => 'setOfferType',
        'sub_condition' => 'setSubCondition',
        'seller_id' => 'setSellerId',
        'condition_notes' => 'setConditionNotes',
        'seller_feedback_rating' => 'setSellerFeedbackRating',
        'shipping_time' => 'setShippingTime',
        'listing_price' => 'setListingPrice',
        'quantity_discount_prices' => 'setQuantityDiscountPrices',
        'points' => 'setPoints',
        'shipping' => 'setShipping',
        'ships_from' => 'setShipsFrom',
        'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
        'prime_information' => 'setPrimeInformation',
        'is_buy_box_winner' => 'setIsBuyBoxWinner',
        'is_featured_merchant' => 'setIsFeaturedMerchant',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'my_offer' => 'getMyOffer',
        'offer_type' => 'getOfferType',
        'sub_condition' => 'getSubCondition',
        'seller_id' => 'getSellerId',
        'condition_notes' => 'getConditionNotes',
        'seller_feedback_rating' => 'getSellerFeedbackRating',
        'shipping_time' => 'getShippingTime',
        'listing_price' => 'getListingPrice',
        'quantity_discount_prices' => 'getQuantityDiscountPrices',
        'points' => 'getPoints',
        'shipping' => 'getShipping',
        'ships_from' => 'getShipsFrom',
        'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
        'prime_information' => 'getPrimeInformation',
        'is_buy_box_winner' => 'getIsBuyBoxWinner',
        'is_featured_merchant' => 'getIsFeaturedMerchant',
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
        $this->container['my_offer'] = $data['my_offer'] ?? null;
        $this->container['offer_type'] = $data['offer_type'] ?? null;
        $this->container['sub_condition'] = $data['sub_condition'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['condition_notes'] = $data['condition_notes'] ?? null;
        $this->container['seller_feedback_rating'] = $data['seller_feedback_rating'] ?? null;
        $this->container['shipping_time'] = $data['shipping_time'] ?? null;
        $this->container['listing_price'] = $data['listing_price'] ?? null;
        $this->container['quantity_discount_prices'] = $data['quantity_discount_prices'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
        $this->container['shipping'] = $data['shipping'] ?? null;
        $this->container['ships_from'] = $data['ships_from'] ?? null;
        $this->container['is_fulfilled_by_amazon'] = $data['is_fulfilled_by_amazon'] ?? null;
        $this->container['prime_information'] = $data['prime_information'] ?? null;
        $this->container['is_buy_box_winner'] = $data['is_buy_box_winner'] ?? null;
        $this->container['is_featured_merchant'] = $data['is_featured_merchant'] ?? null;
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
        if ($this->container['sub_condition'] === null) {
            throw new AssertionException("'sub_condition' can't be null");
        }

        if ($this->container['seller_feedback_rating'] !== null) {
            $this->container['seller_feedback_rating']->validate();
        }

        if ($this->container['shipping_time'] === null) {
            throw new AssertionException("'shipping_time' can't be null");
        }

        $this->container['shipping_time']->validate();

        if ($this->container['listing_price'] === null) {
            throw new AssertionException("'listing_price' can't be null");
        }

        $this->container['listing_price']->validate();

        if ($this->container['points'] !== null) {
            $this->container['points']->validate();
        }

        if ($this->container['shipping'] === null) {
            throw new AssertionException("'shipping' can't be null");
        }

        $this->container['shipping']->validate();

        if ($this->container['ships_from'] !== null) {
            $this->container['ships_from']->validate();
        }

        if ($this->container['is_fulfilled_by_amazon'] === null) {
            throw new AssertionException("'is_fulfilled_by_amazon' can't be null");
        }

        if ($this->container['prime_information'] !== null) {
            $this->container['prime_information']->validate();
        }
    }

    /**
     * Gets my_offer.
     */
    public function getMyOffer() : ?bool
    {
        return $this->container['my_offer'];
    }

    /**
     * Sets my_offer.
     *
     * @param null|bool $my_offer when true, this is the seller's offer
     */
    public function setMyOffer(?bool $my_offer) : self
    {
        $this->container['my_offer'] = $my_offer;

        return $this;
    }

    /**
     * Gets offer_type.
     */
    public function getOfferType() : ?OfferCustomerType
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCustomerType $offer_type offer_type
     */
    public function setOfferType(?OfferCustomerType $offer_type) : self
    {
        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets sub_condition.
     */
    public function getSubCondition() : string
    {
        return $this->container['sub_condition'];
    }

    /**
     * Sets sub_condition.
     *
     * @param string $sub_condition The subcondition of the item. Subcondition values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     */
    public function setSubCondition(string $sub_condition) : self
    {
        $this->container['sub_condition'] = $sub_condition;

        return $this;
    }

    /**
     * Gets seller_id.
     */
    public function getSellerId() : ?string
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param null|string $seller_id the seller identifier for the offer
     */
    public function setSellerId(?string $seller_id) : self
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets condition_notes.
     */
    public function getConditionNotes() : ?string
    {
        return $this->container['condition_notes'];
    }

    /**
     * Sets condition_notes.
     *
     * @param null|string $condition_notes information about the condition of the item
     */
    public function setConditionNotes(?string $condition_notes) : self
    {
        $this->container['condition_notes'] = $condition_notes;

        return $this;
    }

    /**
     * Gets seller_feedback_rating.
     */
    public function getSellerFeedbackRating() : ?SellerFeedbackType
    {
        return $this->container['seller_feedback_rating'];
    }

    /**
     * Sets seller_feedback_rating.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\SellerFeedbackType $seller_feedback_rating seller_feedback_rating
     */
    public function setSellerFeedbackRating(?SellerFeedbackType $seller_feedback_rating) : self
    {
        $this->container['seller_feedback_rating'] = $seller_feedback_rating;

        return $this;
    }

    /**
     * Gets shipping_time.
     */
    public function getShippingTime() : DetailedShippingTimeType
    {
        return $this->container['shipping_time'];
    }

    /**
     * Sets shipping_time.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\DetailedShippingTimeType $shipping_time shipping_time
     */
    public function setShippingTime(DetailedShippingTimeType $shipping_time) : self
    {
        $this->container['shipping_time'] = $shipping_time;

        return $this;
    }

    /**
     * Gets listing_price.
     */
    public function getListingPrice() : MoneyType
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $listing_price listing_price
     */
    public function setListingPrice(MoneyType $listing_price) : self
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets quantity_discount_prices.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountPriceType[]
     */
    public function getQuantityDiscountPrices() : ?array
    {
        return $this->container['quantity_discount_prices'];
    }

    /**
     * Sets quantity_discount_prices.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountPriceType[] $quantity_discount_prices quantity_discount_prices
     */
    public function setQuantityDiscountPrices(?array $quantity_discount_prices) : self
    {
        $this->container['quantity_discount_prices'] = $quantity_discount_prices;

        return $this;
    }

    /**
     * Gets points.
     */
    public function getPoints() : ?Points
    {
        return $this->container['points'];
    }

    /**
     * Sets points.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\Points $points points
     */
    public function setPoints(?Points $points) : self
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets shipping.
     */
    public function getShipping() : MoneyType
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $shipping shipping
     */
    public function setShipping(MoneyType $shipping) : self
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets ships_from.
     */
    public function getShipsFrom() : ?ShipsFromType
    {
        return $this->container['ships_from'];
    }

    /**
     * Sets ships_from.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\ShipsFromType $ships_from ships_from
     */
    public function setShipsFrom(?ShipsFromType $ships_from) : self
    {
        $this->container['ships_from'] = $ships_from;

        return $this;
    }

    /**
     * Gets is_fulfilled_by_amazon.
     */
    public function getIsFulfilledByAmazon() : bool
    {
        return $this->container['is_fulfilled_by_amazon'];
    }

    /**
     * Sets is_fulfilled_by_amazon.
     *
     * @param bool $is_fulfilled_by_amazon when true, the offer is fulfilled by Amazon
     */
    public function setIsFulfilledByAmazon(bool $is_fulfilled_by_amazon) : self
    {
        $this->container['is_fulfilled_by_amazon'] = $is_fulfilled_by_amazon;

        return $this;
    }

    /**
     * Gets prime_information.
     */
    public function getPrimeInformation() : ?PrimeInformationType
    {
        return $this->container['prime_information'];
    }

    /**
     * Sets prime_information.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\PrimeInformationType $prime_information prime_information
     */
    public function setPrimeInformation(?PrimeInformationType $prime_information) : self
    {
        $this->container['prime_information'] = $prime_information;

        return $this;
    }

    /**
     * Gets is_buy_box_winner.
     */
    public function getIsBuyBoxWinner() : ?bool
    {
        return $this->container['is_buy_box_winner'];
    }

    /**
     * Sets is_buy_box_winner.
     *
     * @param null|bool $is_buy_box_winner When true, the offer is currently in the Buy Box. There can be up to two Buy Box winners at any time per ASIN, one that is eligible for Prime and one that is not eligible for Prime.
     */
    public function setIsBuyBoxWinner(?bool $is_buy_box_winner) : self
    {
        $this->container['is_buy_box_winner'] = $is_buy_box_winner;

        return $this;
    }

    /**
     * Gets is_featured_merchant.
     */
    public function getIsFeaturedMerchant() : ?bool
    {
        return $this->container['is_featured_merchant'];
    }

    /**
     * Sets is_featured_merchant.
     *
     * @param null|bool $is_featured_merchant when true, the seller of the item is eligible to win the Buy Box
     */
    public function setIsFeaturedMerchant(?bool $is_featured_merchant) : self
    {
        $this->container['is_featured_merchant'] = $is_featured_merchant;

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
