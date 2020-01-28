<?php
/**
 * InstallmentPlan
 *
 * PHP version 5
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * splitit-web-api-public-sdk
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SplititSdkClient\Model;

use \ArrayAccess;
use \SplititSdkClient\ObjectSerializer;

/**
 * InstallmentPlan Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstallmentPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstallmentPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'installment_plan_number' => 'string',
        'installment_plan_status' => '\SplititSdkClient\Model\ReferenceEntityBase',
        'amount' => '\SplititSdkClient\Model\Money',
        'outstanding_amount' => '\SplititSdkClient\Model\Money',
        'number_of_installments' => 'int',
        'number_of_processed_installments' => 'int',
        'original_amount' => '\SplititSdkClient\Model\Money',
        'refund_amount' => '\SplititSdkClient\Model\Money',
        'consumer' => '\SplititSdkClient\Model\ConsumerData',
        'active_card' => '\SplititSdkClient\Model\CardData',
        'fraud_check' => '\SplititSdkClient\Model\FraudCheck',
        'merchant' => '\SplititSdkClient\Model\MerchantRef',
        'ref_order_number' => 'string',
        'purchase_method' => '\SplititSdkClient\Model\ReferenceEntityBase',
        'strategy' => '\SplititSdkClient\Model\ReferenceEntityBase',
        'delay_resolution' => '\SplititSdkClient\Model\ReferenceEntityBase',
        'extended_params' => 'map[string,string]',
        'is_full_captured' => 'bool',
        'is_charged_back' => 'bool',
        'are_payments_on_hold' => 'bool',
        'scp_funding_percent' => 'float',
        'test_mode' => '\SplititSdkClient\Model\TestModes',
        'creation_date_time' => '\DateTime',
        'installments' => '\SplititSdkClient\Model\Installment[]',
        'secure_authorizations' => '\SplititSdkClient\Model\ReAuthorization[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'installment_plan_number' => null,
        'installment_plan_status' => null,
        'amount' => null,
        'outstanding_amount' => null,
        'number_of_installments' => 'int32',
        'number_of_processed_installments' => 'int32',
        'original_amount' => null,
        'refund_amount' => null,
        'consumer' => null,
        'active_card' => null,
        'fraud_check' => null,
        'merchant' => null,
        'ref_order_number' => null,
        'purchase_method' => null,
        'strategy' => null,
        'delay_resolution' => null,
        'extended_params' => null,
        'is_full_captured' => null,
        'is_charged_back' => null,
        'are_payments_on_hold' => null,
        'scp_funding_percent' => 'decimal',
        'test_mode' => null,
        'creation_date_time' => 'date-time',
        'installments' => null,
        'secure_authorizations' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'installment_plan_number' => 'InstallmentPlanNumber',
        'installment_plan_status' => 'InstallmentPlanStatus',
        'amount' => 'Amount',
        'outstanding_amount' => 'OutstandingAmount',
        'number_of_installments' => 'NumberOfInstallments',
        'number_of_processed_installments' => 'NumberOfProcessedInstallments',
        'original_amount' => 'OriginalAmount',
        'refund_amount' => 'RefundAmount',
        'consumer' => 'Consumer',
        'active_card' => 'ActiveCard',
        'fraud_check' => 'FraudCheck',
        'merchant' => 'Merchant',
        'ref_order_number' => 'RefOrderNumber',
        'purchase_method' => 'PurchaseMethod',
        'strategy' => 'Strategy',
        'delay_resolution' => 'DelayResolution',
        'extended_params' => 'ExtendedParams',
        'is_full_captured' => 'IsFullCaptured',
        'is_charged_back' => 'IsChargedBack',
        'are_payments_on_hold' => 'ArePaymentsOnHold',
        'scp_funding_percent' => 'ScpFundingPercent',
        'test_mode' => 'TestMode',
        'creation_date_time' => 'CreationDateTime',
        'installments' => 'Installments',
        'secure_authorizations' => 'SecureAuthorizations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'installment_plan_number' => 'setInstallmentPlanNumber',
        'installment_plan_status' => 'setInstallmentPlanStatus',
        'amount' => 'setAmount',
        'outstanding_amount' => 'setOutstandingAmount',
        'number_of_installments' => 'setNumberOfInstallments',
        'number_of_processed_installments' => 'setNumberOfProcessedInstallments',
        'original_amount' => 'setOriginalAmount',
        'refund_amount' => 'setRefundAmount',
        'consumer' => 'setConsumer',
        'active_card' => 'setActiveCard',
        'fraud_check' => 'setFraudCheck',
        'merchant' => 'setMerchant',
        'ref_order_number' => 'setRefOrderNumber',
        'purchase_method' => 'setPurchaseMethod',
        'strategy' => 'setStrategy',
        'delay_resolution' => 'setDelayResolution',
        'extended_params' => 'setExtendedParams',
        'is_full_captured' => 'setIsFullCaptured',
        'is_charged_back' => 'setIsChargedBack',
        'are_payments_on_hold' => 'setArePaymentsOnHold',
        'scp_funding_percent' => 'setScpFundingPercent',
        'test_mode' => 'setTestMode',
        'creation_date_time' => 'setCreationDateTime',
        'installments' => 'setInstallments',
        'secure_authorizations' => 'setSecureAuthorizations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'installment_plan_number' => 'getInstallmentPlanNumber',
        'installment_plan_status' => 'getInstallmentPlanStatus',
        'amount' => 'getAmount',
        'outstanding_amount' => 'getOutstandingAmount',
        'number_of_installments' => 'getNumberOfInstallments',
        'number_of_processed_installments' => 'getNumberOfProcessedInstallments',
        'original_amount' => 'getOriginalAmount',
        'refund_amount' => 'getRefundAmount',
        'consumer' => 'getConsumer',
        'active_card' => 'getActiveCard',
        'fraud_check' => 'getFraudCheck',
        'merchant' => 'getMerchant',
        'ref_order_number' => 'getRefOrderNumber',
        'purchase_method' => 'getPurchaseMethod',
        'strategy' => 'getStrategy',
        'delay_resolution' => 'getDelayResolution',
        'extended_params' => 'getExtendedParams',
        'is_full_captured' => 'getIsFullCaptured',
        'is_charged_back' => 'getIsChargedBack',
        'are_payments_on_hold' => 'getArePaymentsOnHold',
        'scp_funding_percent' => 'getScpFundingPercent',
        'test_mode' => 'getTestMode',
        'creation_date_time' => 'getCreationDateTime',
        'installments' => 'getInstallments',
        'secure_authorizations' => 'getSecureAuthorizations'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['installment_plan_number'] = isset($data['installment_plan_number']) ? $data['installment_plan_number'] : null;
        $this->container['installment_plan_status'] = isset($data['installment_plan_status']) ? $data['installment_plan_status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['outstanding_amount'] = isset($data['outstanding_amount']) ? $data['outstanding_amount'] : null;
        $this->container['number_of_installments'] = isset($data['number_of_installments']) ? $data['number_of_installments'] : null;
        $this->container['number_of_processed_installments'] = isset($data['number_of_processed_installments']) ? $data['number_of_processed_installments'] : null;
        $this->container['original_amount'] = isset($data['original_amount']) ? $data['original_amount'] : null;
        $this->container['refund_amount'] = isset($data['refund_amount']) ? $data['refund_amount'] : null;
        $this->container['consumer'] = isset($data['consumer']) ? $data['consumer'] : null;
        $this->container['active_card'] = isset($data['active_card']) ? $data['active_card'] : null;
        $this->container['fraud_check'] = isset($data['fraud_check']) ? $data['fraud_check'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['ref_order_number'] = isset($data['ref_order_number']) ? $data['ref_order_number'] : null;
        $this->container['purchase_method'] = isset($data['purchase_method']) ? $data['purchase_method'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['delay_resolution'] = isset($data['delay_resolution']) ? $data['delay_resolution'] : null;
        $this->container['extended_params'] = isset($data['extended_params']) ? $data['extended_params'] : null;
        $this->container['is_full_captured'] = isset($data['is_full_captured']) ? $data['is_full_captured'] : null;
        $this->container['is_charged_back'] = isset($data['is_charged_back']) ? $data['is_charged_back'] : null;
        $this->container['are_payments_on_hold'] = isset($data['are_payments_on_hold']) ? $data['are_payments_on_hold'] : null;
        $this->container['scp_funding_percent'] = isset($data['scp_funding_percent']) ? $data['scp_funding_percent'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
        $this->container['creation_date_time'] = isset($data['creation_date_time']) ? $data['creation_date_time'] : null;
        $this->container['installments'] = isset($data['installments']) ? $data['installments'] : null;
        $this->container['secure_authorizations'] = isset($data['secure_authorizations']) ? $data['secure_authorizations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number_of_installments'] === null) {
            $invalidProperties[] = "'number_of_installments' can't be null";
        }
        if ($this->container['number_of_processed_installments'] === null) {
            $invalidProperties[] = "'number_of_processed_installments' can't be null";
        }
        if ($this->container['is_full_captured'] === null) {
            $invalidProperties[] = "'is_full_captured' can't be null";
        }
        if ($this->container['is_charged_back'] === null) {
            $invalidProperties[] = "'is_charged_back' can't be null";
        }
        if ($this->container['are_payments_on_hold'] === null) {
            $invalidProperties[] = "'are_payments_on_hold' can't be null";
        }
        if ($this->container['scp_funding_percent'] === null) {
            $invalidProperties[] = "'scp_funding_percent' can't be null";
        }
        if ($this->container['test_mode'] === null) {
            $invalidProperties[] = "'test_mode' can't be null";
        }
        if ($this->container['creation_date_time'] === null) {
            $invalidProperties[] = "'creation_date_time' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets installment_plan_number
     *
     * @return string
     */
    public function getInstallmentPlanNumber()
    {
        return $this->container['installment_plan_number'];
    }

    /**
     * Sets installment_plan_number
     *
     * @param string $installment_plan_number installment_plan_number
     *
     * @return $this
     */
    public function setInstallmentPlanNumber($installment_plan_number)
    {
        $this->container['installment_plan_number'] = $installment_plan_number;

        return $this;
    }

    /**
     * Gets installment_plan_status
     *
     * @return \SplititSdkClient\Model\ReferenceEntityBase
     */
    public function getInstallmentPlanStatus()
    {
        return $this->container['installment_plan_status'];
    }

    /**
     * Sets installment_plan_status
     *
     * @param \SplititSdkClient\Model\ReferenceEntityBase $installment_plan_status installment_plan_status
     *
     * @return $this
     */
    public function setInstallmentPlanStatus($installment_plan_status)
    {
        $this->container['installment_plan_status'] = $installment_plan_status;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \SplititSdkClient\Model\Money
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \SplititSdkClient\Model\Money $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets outstanding_amount
     *
     * @return \SplititSdkClient\Model\Money
     */
    public function getOutstandingAmount()
    {
        return $this->container['outstanding_amount'];
    }

    /**
     * Sets outstanding_amount
     *
     * @param \SplititSdkClient\Model\Money $outstanding_amount outstanding_amount
     *
     * @return $this
     */
    public function setOutstandingAmount($outstanding_amount)
    {
        $this->container['outstanding_amount'] = $outstanding_amount;

        return $this;
    }

    /**
     * Gets number_of_installments
     *
     * @return int
     */
    public function getNumberOfInstallments()
    {
        return $this->container['number_of_installments'];
    }

    /**
     * Sets number_of_installments
     *
     * @param int $number_of_installments number_of_installments
     *
     * @return $this
     */
    public function setNumberOfInstallments($number_of_installments)
    {
        $this->container['number_of_installments'] = $number_of_installments;

        return $this;
    }

    /**
     * Gets number_of_processed_installments
     *
     * @return int
     */
    public function getNumberOfProcessedInstallments()
    {
        return $this->container['number_of_processed_installments'];
    }

    /**
     * Sets number_of_processed_installments
     *
     * @param int $number_of_processed_installments number_of_processed_installments
     *
     * @return $this
     */
    public function setNumberOfProcessedInstallments($number_of_processed_installments)
    {
        $this->container['number_of_processed_installments'] = $number_of_processed_installments;

        return $this;
    }

    /**
     * Gets original_amount
     *
     * @return \SplititSdkClient\Model\Money
     */
    public function getOriginalAmount()
    {
        return $this->container['original_amount'];
    }

    /**
     * Sets original_amount
     *
     * @param \SplititSdkClient\Model\Money $original_amount original_amount
     *
     * @return $this
     */
    public function setOriginalAmount($original_amount)
    {
        $this->container['original_amount'] = $original_amount;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return \SplititSdkClient\Model\Money
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param \SplititSdkClient\Model\Money $refund_amount refund_amount
     *
     * @return $this
     */
    public function setRefundAmount($refund_amount)
    {
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets consumer
     *
     * @return \SplititSdkClient\Model\ConsumerData
     */
    public function getConsumer()
    {
        return $this->container['consumer'];
    }

    /**
     * Sets consumer
     *
     * @param \SplititSdkClient\Model\ConsumerData $consumer consumer
     *
     * @return $this
     */
    public function setConsumer($consumer)
    {
        $this->container['consumer'] = $consumer;

        return $this;
    }

    /**
     * Gets active_card
     *
     * @return \SplititSdkClient\Model\CardData
     */
    public function getActiveCard()
    {
        return $this->container['active_card'];
    }

    /**
     * Sets active_card
     *
     * @param \SplititSdkClient\Model\CardData $active_card active_card
     *
     * @return $this
     */
    public function setActiveCard($active_card)
    {
        $this->container['active_card'] = $active_card;

        return $this;
    }

    /**
     * Gets fraud_check
     *
     * @return \SplititSdkClient\Model\FraudCheck
     */
    public function getFraudCheck()
    {
        return $this->container['fraud_check'];
    }

    /**
     * Sets fraud_check
     *
     * @param \SplititSdkClient\Model\FraudCheck $fraud_check fraud_check
     *
     * @return $this
     */
    public function setFraudCheck($fraud_check)
    {
        $this->container['fraud_check'] = $fraud_check;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \SplititSdkClient\Model\MerchantRef
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \SplititSdkClient\Model\MerchantRef $merchant merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets ref_order_number
     *
     * @return string
     */
    public function getRefOrderNumber()
    {
        return $this->container['ref_order_number'];
    }

    /**
     * Sets ref_order_number
     *
     * @param string $ref_order_number ref_order_number
     *
     * @return $this
     */
    public function setRefOrderNumber($ref_order_number)
    {
        $this->container['ref_order_number'] = $ref_order_number;

        return $this;
    }

    /**
     * Gets purchase_method
     *
     * @return \SplititSdkClient\Model\ReferenceEntityBase
     */
    public function getPurchaseMethod()
    {
        return $this->container['purchase_method'];
    }

    /**
     * Sets purchase_method
     *
     * @param \SplititSdkClient\Model\ReferenceEntityBase $purchase_method purchase_method
     *
     * @return $this
     */
    public function setPurchaseMethod($purchase_method)
    {
        $this->container['purchase_method'] = $purchase_method;

        return $this;
    }

    /**
     * Gets strategy
     *
     * @return \SplititSdkClient\Model\ReferenceEntityBase
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     *
     * @param \SplititSdkClient\Model\ReferenceEntityBase $strategy strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;

        return $this;
    }

    /**
     * Gets delay_resolution
     *
     * @return \SplititSdkClient\Model\ReferenceEntityBase
     */
    public function getDelayResolution()
    {
        return $this->container['delay_resolution'];
    }

    /**
     * Sets delay_resolution
     *
     * @param \SplititSdkClient\Model\ReferenceEntityBase $delay_resolution delay_resolution
     *
     * @return $this
     */
    public function setDelayResolution($delay_resolution)
    {
        $this->container['delay_resolution'] = $delay_resolution;

        return $this;
    }

    /**
     * Gets extended_params
     *
     * @return map[string,string]
     */
    public function getExtendedParams()
    {
        return $this->container['extended_params'];
    }

    /**
     * Sets extended_params
     *
     * @param map[string,string] $extended_params extended_params
     *
     * @return $this
     */
    public function setExtendedParams($extended_params)
    {
        $this->container['extended_params'] = $extended_params;

        return $this;
    }

    /**
     * Gets is_full_captured
     *
     * @return bool
     */
    public function getIsFullCaptured()
    {
        return $this->container['is_full_captured'];
    }

    /**
     * Sets is_full_captured
     *
     * @param bool $is_full_captured is_full_captured
     *
     * @return $this
     */
    public function setIsFullCaptured($is_full_captured)
    {
        $this->container['is_full_captured'] = $is_full_captured;

        return $this;
    }

    /**
     * Gets is_charged_back
     *
     * @return bool
     */
    public function getIsChargedBack()
    {
        return $this->container['is_charged_back'];
    }

    /**
     * Sets is_charged_back
     *
     * @param bool $is_charged_back is_charged_back
     *
     * @return $this
     */
    public function setIsChargedBack($is_charged_back)
    {
        $this->container['is_charged_back'] = $is_charged_back;

        return $this;
    }

    /**
     * Gets are_payments_on_hold
     *
     * @return bool
     */
    public function getArePaymentsOnHold()
    {
        return $this->container['are_payments_on_hold'];
    }

    /**
     * Sets are_payments_on_hold
     *
     * @param bool $are_payments_on_hold are_payments_on_hold
     *
     * @return $this
     */
    public function setArePaymentsOnHold($are_payments_on_hold)
    {
        $this->container['are_payments_on_hold'] = $are_payments_on_hold;

        return $this;
    }

    /**
     * Gets scp_funding_percent
     *
     * @return float
     */
    public function getScpFundingPercent()
    {
        return $this->container['scp_funding_percent'];
    }

    /**
     * Sets scp_funding_percent
     *
     * @param float $scp_funding_percent scp_funding_percent
     *
     * @return $this
     */
    public function setScpFundingPercent($scp_funding_percent)
    {
        $this->container['scp_funding_percent'] = $scp_funding_percent;

        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return \SplititSdkClient\Model\TestModes
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param \SplititSdkClient\Model\TestModes $test_mode test_mode
     *
     * @return $this
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets creation_date_time
     *
     * @return \DateTime
     */
    public function getCreationDateTime()
    {
        return $this->container['creation_date_time'];
    }

    /**
     * Sets creation_date_time
     *
     * @param \DateTime $creation_date_time creation_date_time
     *
     * @return $this
     */
    public function setCreationDateTime($creation_date_time)
    {
        $this->container['creation_date_time'] = $creation_date_time;

        return $this;
    }

    /**
     * Gets installments
     *
     * @return \SplititSdkClient\Model\Installment[]
     */
    public function getInstallments()
    {
        return $this->container['installments'];
    }

    /**
     * Sets installments
     *
     * @param \SplititSdkClient\Model\Installment[] $installments installments
     *
     * @return $this
     */
    public function setInstallments($installments)
    {
        $this->container['installments'] = $installments;

        return $this;
    }

    /**
     * Gets secure_authorizations
     *
     * @return \SplititSdkClient\Model\ReAuthorization[]
     */
    public function getSecureAuthorizations()
    {
        return $this->container['secure_authorizations'];
    }

    /**
     * Sets secure_authorizations
     *
     * @param \SplititSdkClient\Model\ReAuthorization[] $secure_authorizations secure_authorizations
     *
     * @return $this
     */
    public function setSecureAuthorizations($secure_authorizations)
    {
        $this->container['secure_authorizations'] = $secure_authorizations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


