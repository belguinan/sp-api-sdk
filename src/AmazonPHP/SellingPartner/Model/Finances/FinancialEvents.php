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
class FinancialEvents implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FinancialEvents';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipment_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]',
        'refund_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]',
        'guarantee_claim_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]',
        'chargeback_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]',
        'pay_with_amazon_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\PayWithAmazonEvent[]',
        'service_provider_credit_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\SolutionProviderCreditEvent[]',
        'retrocharge_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\RetrochargeEvent[]',
        'rental_transaction_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\RentalTransactionEvent[]',
        'product_ads_payment_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\ProductAdsPaymentEvent[]',
        'service_fee_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\ServiceFeeEvent[]',
        'seller_deal_payment_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\SellerDealPaymentEvent[]',
        'debt_recovery_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\DebtRecoveryEvent[]',
        'loan_servicing_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\LoanServicingEvent[]',
        'adjustment_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\AdjustmentEvent[]',
        'safet_reimbursement_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\SAFETReimbursementEvent[]',
        'seller_review_enrollment_payment_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\SellerReviewEnrollmentPaymentEvent[]',
        'fba_liquidation_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\FBALiquidationEvent[]',
        'coupon_payment_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\CouponPaymentEvent[]',
        'imaging_services_fee_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\ImagingServicesFeeEvent[]',
        'network_commingling_transaction_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\NetworkComminglingTransactionEvent[]',
        'affordability_expense_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\AffordabilityExpenseEvent[]',
        'affordability_expense_reversal_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\AffordabilityExpenseEvent[]',
        'trial_shipment_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\TrialShipmentEvent[]',
        'shipment_settle_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]',
        'tax_withholding_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\TaxWithholdingEvent[]',
        'removal_shipment_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentEvent[]',
        'removal_shipment_adjustment_event_list' => '\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentAdjustmentEvent[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipment_event_list' => null,
        'refund_event_list' => null,
        'guarantee_claim_event_list' => null,
        'chargeback_event_list' => null,
        'pay_with_amazon_event_list' => null,
        'service_provider_credit_event_list' => null,
        'retrocharge_event_list' => null,
        'rental_transaction_event_list' => null,
        'product_ads_payment_event_list' => null,
        'service_fee_event_list' => null,
        'seller_deal_payment_event_list' => null,
        'debt_recovery_event_list' => null,
        'loan_servicing_event_list' => null,
        'adjustment_event_list' => null,
        'safet_reimbursement_event_list' => null,
        'seller_review_enrollment_payment_event_list' => null,
        'fba_liquidation_event_list' => null,
        'coupon_payment_event_list' => null,
        'imaging_services_fee_event_list' => null,
        'network_commingling_transaction_event_list' => null,
        'affordability_expense_event_list' => null,
        'affordability_expense_reversal_event_list' => null,
        'trial_shipment_event_list' => null,
        'shipment_settle_event_list' => null,
        'tax_withholding_event_list' => null,
        'removal_shipment_event_list' => null,
        'removal_shipment_adjustment_event_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipment_event_list' => 'ShipmentEventList',
        'refund_event_list' => 'RefundEventList',
        'guarantee_claim_event_list' => 'GuaranteeClaimEventList',
        'chargeback_event_list' => 'ChargebackEventList',
        'pay_with_amazon_event_list' => 'PayWithAmazonEventList',
        'service_provider_credit_event_list' => 'ServiceProviderCreditEventList',
        'retrocharge_event_list' => 'RetrochargeEventList',
        'rental_transaction_event_list' => 'RentalTransactionEventList',
        'product_ads_payment_event_list' => 'ProductAdsPaymentEventList',
        'service_fee_event_list' => 'ServiceFeeEventList',
        'seller_deal_payment_event_list' => 'SellerDealPaymentEventList',
        'debt_recovery_event_list' => 'DebtRecoveryEventList',
        'loan_servicing_event_list' => 'LoanServicingEventList',
        'adjustment_event_list' => 'AdjustmentEventList',
        'safet_reimbursement_event_list' => 'SAFETReimbursementEventList',
        'seller_review_enrollment_payment_event_list' => 'SellerReviewEnrollmentPaymentEventList',
        'fba_liquidation_event_list' => 'FBALiquidationEventList',
        'coupon_payment_event_list' => 'CouponPaymentEventList',
        'imaging_services_fee_event_list' => 'ImagingServicesFeeEventList',
        'network_commingling_transaction_event_list' => 'NetworkComminglingTransactionEventList',
        'affordability_expense_event_list' => 'AffordabilityExpenseEventList',
        'affordability_expense_reversal_event_list' => 'AffordabilityExpenseReversalEventList',
        'trial_shipment_event_list' => 'TrialShipmentEventList',
        'shipment_settle_event_list' => 'ShipmentSettleEventList',
        'tax_withholding_event_list' => 'TaxWithholdingEventList',
        'removal_shipment_event_list' => 'RemovalShipmentEventList',
        'removal_shipment_adjustment_event_list' => 'RemovalShipmentAdjustmentEventList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_event_list' => 'setShipmentEventList',
        'refund_event_list' => 'setRefundEventList',
        'guarantee_claim_event_list' => 'setGuaranteeClaimEventList',
        'chargeback_event_list' => 'setChargebackEventList',
        'pay_with_amazon_event_list' => 'setPayWithAmazonEventList',
        'service_provider_credit_event_list' => 'setServiceProviderCreditEventList',
        'retrocharge_event_list' => 'setRetrochargeEventList',
        'rental_transaction_event_list' => 'setRentalTransactionEventList',
        'product_ads_payment_event_list' => 'setProductAdsPaymentEventList',
        'service_fee_event_list' => 'setServiceFeeEventList',
        'seller_deal_payment_event_list' => 'setSellerDealPaymentEventList',
        'debt_recovery_event_list' => 'setDebtRecoveryEventList',
        'loan_servicing_event_list' => 'setLoanServicingEventList',
        'adjustment_event_list' => 'setAdjustmentEventList',
        'safet_reimbursement_event_list' => 'setSafetReimbursementEventList',
        'seller_review_enrollment_payment_event_list' => 'setSellerReviewEnrollmentPaymentEventList',
        'fba_liquidation_event_list' => 'setFbaLiquidationEventList',
        'coupon_payment_event_list' => 'setCouponPaymentEventList',
        'imaging_services_fee_event_list' => 'setImagingServicesFeeEventList',
        'network_commingling_transaction_event_list' => 'setNetworkComminglingTransactionEventList',
        'affordability_expense_event_list' => 'setAffordabilityExpenseEventList',
        'affordability_expense_reversal_event_list' => 'setAffordabilityExpenseReversalEventList',
        'trial_shipment_event_list' => 'setTrialShipmentEventList',
        'shipment_settle_event_list' => 'setShipmentSettleEventList',
        'tax_withholding_event_list' => 'setTaxWithholdingEventList',
        'removal_shipment_event_list' => 'setRemovalShipmentEventList',
        'removal_shipment_adjustment_event_list' => 'setRemovalShipmentAdjustmentEventList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_event_list' => 'getShipmentEventList',
        'refund_event_list' => 'getRefundEventList',
        'guarantee_claim_event_list' => 'getGuaranteeClaimEventList',
        'chargeback_event_list' => 'getChargebackEventList',
        'pay_with_amazon_event_list' => 'getPayWithAmazonEventList',
        'service_provider_credit_event_list' => 'getServiceProviderCreditEventList',
        'retrocharge_event_list' => 'getRetrochargeEventList',
        'rental_transaction_event_list' => 'getRentalTransactionEventList',
        'product_ads_payment_event_list' => 'getProductAdsPaymentEventList',
        'service_fee_event_list' => 'getServiceFeeEventList',
        'seller_deal_payment_event_list' => 'getSellerDealPaymentEventList',
        'debt_recovery_event_list' => 'getDebtRecoveryEventList',
        'loan_servicing_event_list' => 'getLoanServicingEventList',
        'adjustment_event_list' => 'getAdjustmentEventList',
        'safet_reimbursement_event_list' => 'getSafetReimbursementEventList',
        'seller_review_enrollment_payment_event_list' => 'getSellerReviewEnrollmentPaymentEventList',
        'fba_liquidation_event_list' => 'getFbaLiquidationEventList',
        'coupon_payment_event_list' => 'getCouponPaymentEventList',
        'imaging_services_fee_event_list' => 'getImagingServicesFeeEventList',
        'network_commingling_transaction_event_list' => 'getNetworkComminglingTransactionEventList',
        'affordability_expense_event_list' => 'getAffordabilityExpenseEventList',
        'affordability_expense_reversal_event_list' => 'getAffordabilityExpenseReversalEventList',
        'trial_shipment_event_list' => 'getTrialShipmentEventList',
        'shipment_settle_event_list' => 'getShipmentSettleEventList',
        'tax_withholding_event_list' => 'getTaxWithholdingEventList',
        'removal_shipment_event_list' => 'getRemovalShipmentEventList',
        'removal_shipment_adjustment_event_list' => 'getRemovalShipmentAdjustmentEventList',
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
        $this->container['shipment_event_list'] = $data['shipment_event_list'] ?? null;
        $this->container['refund_event_list'] = $data['refund_event_list'] ?? null;
        $this->container['guarantee_claim_event_list'] = $data['guarantee_claim_event_list'] ?? null;
        $this->container['chargeback_event_list'] = $data['chargeback_event_list'] ?? null;
        $this->container['pay_with_amazon_event_list'] = $data['pay_with_amazon_event_list'] ?? null;
        $this->container['service_provider_credit_event_list'] = $data['service_provider_credit_event_list'] ?? null;
        $this->container['retrocharge_event_list'] = $data['retrocharge_event_list'] ?? null;
        $this->container['rental_transaction_event_list'] = $data['rental_transaction_event_list'] ?? null;
        $this->container['product_ads_payment_event_list'] = $data['product_ads_payment_event_list'] ?? null;
        $this->container['service_fee_event_list'] = $data['service_fee_event_list'] ?? null;
        $this->container['seller_deal_payment_event_list'] = $data['seller_deal_payment_event_list'] ?? null;
        $this->container['debt_recovery_event_list'] = $data['debt_recovery_event_list'] ?? null;
        $this->container['loan_servicing_event_list'] = $data['loan_servicing_event_list'] ?? null;
        $this->container['adjustment_event_list'] = $data['adjustment_event_list'] ?? null;
        $this->container['safet_reimbursement_event_list'] = $data['safet_reimbursement_event_list'] ?? null;
        $this->container['seller_review_enrollment_payment_event_list'] = $data['seller_review_enrollment_payment_event_list'] ?? null;
        $this->container['fba_liquidation_event_list'] = $data['fba_liquidation_event_list'] ?? null;
        $this->container['coupon_payment_event_list'] = $data['coupon_payment_event_list'] ?? null;
        $this->container['imaging_services_fee_event_list'] = $data['imaging_services_fee_event_list'] ?? null;
        $this->container['network_commingling_transaction_event_list'] = $data['network_commingling_transaction_event_list'] ?? null;
        $this->container['affordability_expense_event_list'] = $data['affordability_expense_event_list'] ?? null;
        $this->container['affordability_expense_reversal_event_list'] = $data['affordability_expense_reversal_event_list'] ?? null;
        $this->container['trial_shipment_event_list'] = $data['trial_shipment_event_list'] ?? null;
        $this->container['shipment_settle_event_list'] = $data['shipment_settle_event_list'] ?? null;
        $this->container['tax_withholding_event_list'] = $data['tax_withholding_event_list'] ?? null;
        $this->container['removal_shipment_event_list'] = $data['removal_shipment_event_list'] ?? null;
        $this->container['removal_shipment_adjustment_event_list'] = $data['removal_shipment_adjustment_event_list'] ?? null;
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
     * Gets shipment_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]
     */
    public function getShipmentEventList() : ?array
    {
        return $this->container['shipment_event_list'];
    }

    /**
     * Sets shipment_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[] $shipment_event_list a list of shipment event information
     */
    public function setShipmentEventList(?array $shipment_event_list) : self
    {
        $this->container['shipment_event_list'] = $shipment_event_list;

        return $this;
    }

    /**
     * Gets refund_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]
     */
    public function getRefundEventList() : ?array
    {
        return $this->container['refund_event_list'];
    }

    /**
     * Sets refund_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[] $refund_event_list a list of shipment event information
     */
    public function setRefundEventList(?array $refund_event_list) : self
    {
        $this->container['refund_event_list'] = $refund_event_list;

        return $this;
    }

    /**
     * Gets guarantee_claim_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]
     */
    public function getGuaranteeClaimEventList() : ?array
    {
        return $this->container['guarantee_claim_event_list'];
    }

    /**
     * Sets guarantee_claim_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[] $guarantee_claim_event_list a list of shipment event information
     */
    public function setGuaranteeClaimEventList(?array $guarantee_claim_event_list) : self
    {
        $this->container['guarantee_claim_event_list'] = $guarantee_claim_event_list;

        return $this;
    }

    /**
     * Gets chargeback_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]
     */
    public function getChargebackEventList() : ?array
    {
        return $this->container['chargeback_event_list'];
    }

    /**
     * Sets chargeback_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[] $chargeback_event_list a list of shipment event information
     */
    public function setChargebackEventList(?array $chargeback_event_list) : self
    {
        $this->container['chargeback_event_list'] = $chargeback_event_list;

        return $this;
    }

    /**
     * Gets pay_with_amazon_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\PayWithAmazonEvent[]
     */
    public function getPayWithAmazonEventList() : ?array
    {
        return $this->container['pay_with_amazon_event_list'];
    }

    /**
     * Sets pay_with_amazon_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\PayWithAmazonEvent[] $pay_with_amazon_event_list a list of events related to the seller's Pay with Amazon account
     */
    public function setPayWithAmazonEventList(?array $pay_with_amazon_event_list) : self
    {
        $this->container['pay_with_amazon_event_list'] = $pay_with_amazon_event_list;

        return $this;
    }

    /**
     * Gets service_provider_credit_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\SolutionProviderCreditEvent[]
     */
    public function getServiceProviderCreditEventList() : ?array
    {
        return $this->container['service_provider_credit_event_list'];
    }

    /**
     * Sets service_provider_credit_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\SolutionProviderCreditEvent[] $service_provider_credit_event_list a list of information about solution provider credits
     */
    public function setServiceProviderCreditEventList(?array $service_provider_credit_event_list) : self
    {
        $this->container['service_provider_credit_event_list'] = $service_provider_credit_event_list;

        return $this;
    }

    /**
     * Gets retrocharge_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\RetrochargeEvent[]
     */
    public function getRetrochargeEventList() : ?array
    {
        return $this->container['retrocharge_event_list'];
    }

    /**
     * Sets retrocharge_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\RetrochargeEvent[] $retrocharge_event_list a list of information about Retrocharge or RetrochargeReversal events
     */
    public function setRetrochargeEventList(?array $retrocharge_event_list) : self
    {
        $this->container['retrocharge_event_list'] = $retrocharge_event_list;

        return $this;
    }

    /**
     * Gets rental_transaction_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\RentalTransactionEvent[]
     */
    public function getRentalTransactionEventList() : ?array
    {
        return $this->container['rental_transaction_event_list'];
    }

    /**
     * Sets rental_transaction_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\RentalTransactionEvent[] $rental_transaction_event_list a list of rental transaction event information
     */
    public function setRentalTransactionEventList(?array $rental_transaction_event_list) : self
    {
        $this->container['rental_transaction_event_list'] = $rental_transaction_event_list;

        return $this;
    }

    /**
     * Gets product_ads_payment_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ProductAdsPaymentEvent[]
     */
    public function getProductAdsPaymentEventList() : ?array
    {
        return $this->container['product_ads_payment_event_list'];
    }

    /**
     * Sets product_ads_payment_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ProductAdsPaymentEvent[] $product_ads_payment_event_list a list of sponsored products payment events
     */
    public function setProductAdsPaymentEventList(?array $product_ads_payment_event_list) : self
    {
        $this->container['product_ads_payment_event_list'] = $product_ads_payment_event_list;

        return $this;
    }

    /**
     * Gets service_fee_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ServiceFeeEvent[]
     */
    public function getServiceFeeEventList() : ?array
    {
        return $this->container['service_fee_event_list'];
    }

    /**
     * Sets service_fee_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ServiceFeeEvent[] $service_fee_event_list a list of information about service fee events
     */
    public function setServiceFeeEventList(?array $service_fee_event_list) : self
    {
        $this->container['service_fee_event_list'] = $service_fee_event_list;

        return $this;
    }

    /**
     * Gets seller_deal_payment_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\SellerDealPaymentEvent[]
     */
    public function getSellerDealPaymentEventList() : ?array
    {
        return $this->container['seller_deal_payment_event_list'];
    }

    /**
     * Sets seller_deal_payment_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\SellerDealPaymentEvent[] $seller_deal_payment_event_list a list of payment events for deal-related fees
     */
    public function setSellerDealPaymentEventList(?array $seller_deal_payment_event_list) : self
    {
        $this->container['seller_deal_payment_event_list'] = $seller_deal_payment_event_list;

        return $this;
    }

    /**
     * Gets debt_recovery_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\DebtRecoveryEvent[]
     */
    public function getDebtRecoveryEventList() : ?array
    {
        return $this->container['debt_recovery_event_list'];
    }

    /**
     * Sets debt_recovery_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\DebtRecoveryEvent[] $debt_recovery_event_list a list of debt recovery event information
     */
    public function setDebtRecoveryEventList(?array $debt_recovery_event_list) : self
    {
        $this->container['debt_recovery_event_list'] = $debt_recovery_event_list;

        return $this;
    }

    /**
     * Gets loan_servicing_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\LoanServicingEvent[]
     */
    public function getLoanServicingEventList() : ?array
    {
        return $this->container['loan_servicing_event_list'];
    }

    /**
     * Sets loan_servicing_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\LoanServicingEvent[] $loan_servicing_event_list a list of loan servicing events
     */
    public function setLoanServicingEventList(?array $loan_servicing_event_list) : self
    {
        $this->container['loan_servicing_event_list'] = $loan_servicing_event_list;

        return $this;
    }

    /**
     * Gets adjustment_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\AdjustmentEvent[]
     */
    public function getAdjustmentEventList() : ?array
    {
        return $this->container['adjustment_event_list'];
    }

    /**
     * Sets adjustment_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\AdjustmentEvent[] $adjustment_event_list a list of adjustment event information for the seller's account
     */
    public function setAdjustmentEventList(?array $adjustment_event_list) : self
    {
        $this->container['adjustment_event_list'] = $adjustment_event_list;

        return $this;
    }

    /**
     * Gets safet_reimbursement_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\SAFETReimbursementEvent[]
     */
    public function getSafetReimbursementEventList() : ?array
    {
        return $this->container['safet_reimbursement_event_list'];
    }

    /**
     * Sets safet_reimbursement_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\SAFETReimbursementEvent[] $safet_reimbursement_event_list a list of SAFETReimbursementEvents
     */
    public function setSafetReimbursementEventList(?array $safet_reimbursement_event_list) : self
    {
        $this->container['safet_reimbursement_event_list'] = $safet_reimbursement_event_list;

        return $this;
    }

    /**
     * Gets seller_review_enrollment_payment_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\SellerReviewEnrollmentPaymentEvent[]
     */
    public function getSellerReviewEnrollmentPaymentEventList() : ?array
    {
        return $this->container['seller_review_enrollment_payment_event_list'];
    }

    /**
     * Sets seller_review_enrollment_payment_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\SellerReviewEnrollmentPaymentEvent[] $seller_review_enrollment_payment_event_list a list of information about fee events for the Early Reviewer Program
     */
    public function setSellerReviewEnrollmentPaymentEventList(?array $seller_review_enrollment_payment_event_list) : self
    {
        $this->container['seller_review_enrollment_payment_event_list'] = $seller_review_enrollment_payment_event_list;

        return $this;
    }

    /**
     * Gets fba_liquidation_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FBALiquidationEvent[]
     */
    public function getFbaLiquidationEventList() : ?array
    {
        return $this->container['fba_liquidation_event_list'];
    }

    /**
     * Sets fba_liquidation_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FBALiquidationEvent[] $fba_liquidation_event_list a list of FBA inventory liquidation payment events
     */
    public function setFbaLiquidationEventList(?array $fba_liquidation_event_list) : self
    {
        $this->container['fba_liquidation_event_list'] = $fba_liquidation_event_list;

        return $this;
    }

    /**
     * Gets coupon_payment_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\CouponPaymentEvent[]
     */
    public function getCouponPaymentEventList() : ?array
    {
        return $this->container['coupon_payment_event_list'];
    }

    /**
     * Sets coupon_payment_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\CouponPaymentEvent[] $coupon_payment_event_list a list of coupon payment event information
     */
    public function setCouponPaymentEventList(?array $coupon_payment_event_list) : self
    {
        $this->container['coupon_payment_event_list'] = $coupon_payment_event_list;

        return $this;
    }

    /**
     * Gets imaging_services_fee_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ImagingServicesFeeEvent[]
     */
    public function getImagingServicesFeeEventList() : ?array
    {
        return $this->container['imaging_services_fee_event_list'];
    }

    /**
     * Sets imaging_services_fee_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ImagingServicesFeeEvent[] $imaging_services_fee_event_list a list of fee events related to Amazon Imaging services
     */
    public function setImagingServicesFeeEventList(?array $imaging_services_fee_event_list) : self
    {
        $this->container['imaging_services_fee_event_list'] = $imaging_services_fee_event_list;

        return $this;
    }

    /**
     * Gets network_commingling_transaction_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\NetworkComminglingTransactionEvent[]
     */
    public function getNetworkComminglingTransactionEventList() : ?array
    {
        return $this->container['network_commingling_transaction_event_list'];
    }

    /**
     * Sets network_commingling_transaction_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\NetworkComminglingTransactionEvent[] $network_commingling_transaction_event_list a list of network commingling transaction events
     */
    public function setNetworkComminglingTransactionEventList(?array $network_commingling_transaction_event_list) : self
    {
        $this->container['network_commingling_transaction_event_list'] = $network_commingling_transaction_event_list;

        return $this;
    }

    /**
     * Gets affordability_expense_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\AffordabilityExpenseEvent[]
     */
    public function getAffordabilityExpenseEventList() : ?array
    {
        return $this->container['affordability_expense_event_list'];
    }

    /**
     * Sets affordability_expense_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\AffordabilityExpenseEvent[] $affordability_expense_event_list a list of expense information related to an affordability promotion
     */
    public function setAffordabilityExpenseEventList(?array $affordability_expense_event_list) : self
    {
        $this->container['affordability_expense_event_list'] = $affordability_expense_event_list;

        return $this;
    }

    /**
     * Gets affordability_expense_reversal_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\AffordabilityExpenseEvent[]
     */
    public function getAffordabilityExpenseReversalEventList() : ?array
    {
        return $this->container['affordability_expense_reversal_event_list'];
    }

    /**
     * Sets affordability_expense_reversal_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\AffordabilityExpenseEvent[] $affordability_expense_reversal_event_list a list of expense information related to an affordability promotion
     */
    public function setAffordabilityExpenseReversalEventList(?array $affordability_expense_reversal_event_list) : self
    {
        $this->container['affordability_expense_reversal_event_list'] = $affordability_expense_reversal_event_list;

        return $this;
    }

    /**
     * Gets trial_shipment_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\TrialShipmentEvent[]
     */
    public function getTrialShipmentEventList() : ?array
    {
        return $this->container['trial_shipment_event_list'];
    }

    /**
     * Sets trial_shipment_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\TrialShipmentEvent[] $trial_shipment_event_list a list of information about trial shipment financial events
     */
    public function setTrialShipmentEventList(?array $trial_shipment_event_list) : self
    {
        $this->container['trial_shipment_event_list'] = $trial_shipment_event_list;

        return $this;
    }

    /**
     * Gets shipment_settle_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[]
     */
    public function getShipmentSettleEventList() : ?array
    {
        return $this->container['shipment_settle_event_list'];
    }

    /**
     * Sets shipment_settle_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentEvent[] $shipment_settle_event_list a list of information about shipment settle financial events
     */
    public function setShipmentSettleEventList(?array $shipment_settle_event_list) : self
    {
        $this->container['shipment_settle_event_list'] = $shipment_settle_event_list;

        return $this;
    }

    /**
     * Gets tax_withholding_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithholdingEvent[]
     */
    public function getTaxWithholdingEventList() : ?array
    {
        return $this->container['tax_withholding_event_list'];
    }

    /**
     * Sets tax_withholding_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithholdingEvent[] $tax_withholding_event_list list of TaxWithholding events
     */
    public function setTaxWithholdingEventList(?array $tax_withholding_event_list) : self
    {
        $this->container['tax_withholding_event_list'] = $tax_withholding_event_list;

        return $this;
    }

    /**
     * Gets removal_shipment_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentEvent[]
     */
    public function getRemovalShipmentEventList() : ?array
    {
        return $this->container['removal_shipment_event_list'];
    }

    /**
     * Sets removal_shipment_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentEvent[] $removal_shipment_event_list a list of removal shipment event information
     */
    public function setRemovalShipmentEventList(?array $removal_shipment_event_list) : self
    {
        $this->container['removal_shipment_event_list'] = $removal_shipment_event_list;

        return $this;
    }

    /**
     * Gets removal_shipment_adjustment_event_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentAdjustmentEvent[]
     */
    public function getRemovalShipmentAdjustmentEventList() : ?array
    {
        return $this->container['removal_shipment_adjustment_event_list'];
    }

    /**
     * Sets removal_shipment_adjustment_event_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentAdjustmentEvent[] $removal_shipment_adjustment_event_list a comma-delimited list of Removal shipmentAdjustment details for FBA inventory
     */
    public function setRemovalShipmentAdjustmentEventList(?array $removal_shipment_adjustment_event_list) : self
    {
        $this->container['removal_shipment_adjustment_event_list'] = $removal_shipment_adjustment_event_list;

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
