<?php
/**
 * VisaTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>オープンAPI仕様書（PDF版）は下記リンクをご参照ください</p> <div>   <div style='display:inline-block;'><a style='text-decoration:none; font-weight:bold; color:#00b8d4;' href='https://gmo-aozora.com/business/service/api-specification.html' target='_blank'>オープンAPI仕様書</a></div><div style='display:inline-block; margin-left:2px; left:2px; width:10px; height:10px; border-top:2px solid #00b8d4; border-right:2px solid #00b8d4; transparent;-webkit-transform:rotate(45deg); transform: rotate(45deg);'></div> </div> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>共通仕様</h4> <div style='width:100%; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>＜HTTPリクエストヘッダ＞</p>   <div style='display:table; margin-left:10px; background-color:#29659b;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff;'>項目</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; color:#fff;'>仕様</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>プロトコル</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>HTTP1.1/HTTPS</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>charset</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>UTF-8</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>content-type</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>application/json</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>domain_name</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       本番環境：api.gmo-aozora.com</br>       開発環境：stg-api.gmo-aozora.com     </div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>メインURL</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       https://{domain_name}/ganb/api/corporation/{version}</br>       <span style='border-bottom:solid 1px;'>Version:1.x.x</span> の場合</br>       　https://api.gmo-aozora.com/ganb/api/corporation/<span style='border-bottom:solid 1px;'>v1</span>     </div>   </div> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜リクエスト共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <p style='padding-left:40px;'>パラメータの値が空の場合、またはパラメータ自体が設定されていない場合、どちらもNULLとして扱います</p> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜レスポンス共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <ul>     <li>レスポンスデータ</li>       <ul>         <li style='list-style-type:none;'>レスポンスデータの値が空の場合または、レスポンスデータ自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>     <li>配列</li>       <ul>         <li style='list-style-type:none;'>配列の要素の値が空の場合は「空のリスト」と記載</li>         <li style='list-style-type:none;'>配列自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>   </ul> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜更新系APIに関する注意事項＞</p>   <ul>     <li style='list-style-type:none;'>更新系処理がタイムアウトとなった場合、処理自体は実行されている可能性がありますので、</li>     <li style='list-style-type:none;'>再実行を行う必要がある場合は必ず照会系の処理で実行状況を確認してから再実行を行ってください</li>   </ul> </div>
 *
 * OpenAPI spec version: 1.1.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */
 
 namespace Ganb\Corporate\Client\Model;
 
 use \ArrayAccess;
 use \Ganb\Corporate\Client\ObjectSerializer;
 
 /**
 * VisaTransaction Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisaTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VisaTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'use_date' => 'string',
        'use_content' => 'string',
        'amount' => 'string',
        'local_currency_amount' => 'string',
        'conversion_rate' => 'string',
        'approval_number' => 'string',
        'visa_status' => 'string',
        'currency_code' => 'string',
        'atm_commission' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'use_date' => null,
        'use_content' => null,
        'amount' => null,
        'local_currency_amount' => null,
        'conversion_rate' => null,
        'approval_number' => null,
        'visa_status' => null,
        'currency_code' => null,
        'atm_commission' => null
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
        'use_date' => 'useDate',
        'use_content' => 'useContent',
        'amount' => 'amount',
        'local_currency_amount' => 'localCurrencyAmount',
        'conversion_rate' => 'conversionRate',
        'approval_number' => 'approvalNumber',
        'visa_status' => 'visaStatus',
        'currency_code' => 'currencyCode',
        'atm_commission' => 'atmCommission'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'use_date' => 'setUseDate',
        'use_content' => 'setUseContent',
        'amount' => 'setAmount',
        'local_currency_amount' => 'setLocalCurrencyAmount',
        'conversion_rate' => 'setConversionRate',
        'approval_number' => 'setApprovalNumber',
        'visa_status' => 'setVisaStatus',
        'currency_code' => 'setCurrencyCode',
        'atm_commission' => 'setAtmCommission'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'use_date' => 'getUseDate',
        'use_content' => 'getUseContent',
        'amount' => 'getAmount',
        'local_currency_amount' => 'getLocalCurrencyAmount',
        'conversion_rate' => 'getConversionRate',
        'approval_number' => 'getApprovalNumber',
        'visa_status' => 'getVisaStatus',
        'currency_code' => 'getCurrencyCode',
        'atm_commission' => 'getAtmCommission'
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
        $this->container['use_date'] = isset($data['use_date']) ? $data['use_date'] : null;
        $this->container['use_content'] = isset($data['use_content']) ? $data['use_content'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['local_currency_amount'] = isset($data['local_currency_amount']) ? $data['local_currency_amount'] : null;
        $this->container['conversion_rate'] = isset($data['conversion_rate']) ? $data['conversion_rate'] : null;
        $this->container['approval_number'] = isset($data['approval_number']) ? $data['approval_number'] : null;
        $this->container['visa_status'] = isset($data['visa_status']) ? $data['visa_status'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['atm_commission'] = isset($data['atm_commission']) ? $data['atm_commission'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['use_date']) && (mb_strlen($this->container['use_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'use_date', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['use_date']) && (mb_strlen($this->container['use_date']) < 10)) {
            $invalidProperties[] = "invalid value for 'use_date', the character length must be bigger than or equal to 10.";
        }
        
        if(!is_null($this->container['use_content']) && (mb_strlen($this->container['use_content']) > 120)){
        	$invalidProperties[] = "invalid value for 'use_content', the character length must be smaller than or equal to 120.";
        }
        
        if (!is_null($this->container['use_content']) && (mb_strlen($this->container['use_content']) < 1)) {
            $invalidProperties[] = "invalid value for 'use_content', the character length must be bigger than or equal to 1.";
        }
        
        if(!is_null($this->container['amount']) && (mb_strlen($this->container['amount']) > 20)){
        	$invalidProperties[] = "invalid value for 'amount', the character length must be smaller than or equal to 20.";
        }
        
        if(!is_null($this->container['amount']) && (mb_strlen($this->container['amount']) < 1)){
        	$invalidProperties[] = "invalid value for 'amount', the character length must be bigger than or equal to 1.";
        }
        
        if(!is_null($this->container['local_currency_amount']) && (mb_strlen($this->container['local_currency_amount']) > 20)){
        	$invalidProperties[] = "invalid value for 'local_currency_amount', the character length must be smaller than or equal to 20.";
        }
        
        if(!is_null($this->container['local_currency_amount']) && (mb_strlen($this->container['local_currency_amount']) < 3)){
        	$invalidProperties[] = "invalid value for 'local_currency_amount', the character length must be bigger than or equal to 3.";
        }
        
        if(!is_null($this->container['conversion_rate']) && (mb_strlen($this->container['conversion_rate']) > 14)){
        	$invalidProperties[] = "invalid value for 'conversion_rate', the character length must be smaller than or equal to 14.";
        }
        
        if(!is_null($this->container['conversion_rate']) && (mb_strlen($this->container['conversion_rate']) < 3)){
        	$invalidProperties[] = "invalid value for 'conversion_rate', the character length must be bigger than or equal to 3.";
        }
        
        if(!is_null($this->container['approval_number']) && (mb_strlen($this->container['approval_number'])) > 6){
        	$invalidProperties[] = "invalid value for 'approval_number', the character length must be smaller than or equal to 6.";
        }
        
        if(!is_null($this->container['approval_number']) && (mb_strlen($this->container['approval_number'])) < 6){
        	$invalidProperties[] = "invalid value for 'approval_number', the character length must be bigger than or equal to 6.";
        }
        
        if (!is_null($this->container['visa_status']) && (mb_strlen($this->container['visa_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'visa_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['visa_status']) && (mb_strlen($this->container['visa_status']) < 1)) {
            $invalidProperties[] = "invalid value for 'visa_status', the character length must be bigger than or equal to 1.";
        }
        
        if(!is_null($this->container['currency_code']) && (mb_strlen($this->container['currency_code']) > 3)){
        	$invalidProperties[] = "invalid value for 'currency_code', the character length must be smaller than or equal to 3.";
        }
        
        if(!is_null($this->container['currency_code']) && (mb_strlen($this->container['currency_code']) < 3)){
        	$invalidProperties[] = "invalid value for 'currency_code', the character length must be bigger than or equal to 3.";
        }
        if(!is_null($this->container['atm_commission']) && (mb_strlen($this->container['atm_commission']) > 20)){
        	$invalidProperties[] = "invalid value for 'atm_commission', the character length must be smaller than or equal to 20.";
        }
        
        if(!is_null($this->container['atm_commission']) && (mb_strlen($this->container['atm_commission']) < 3)){
        	$invalidProperties[] = "invalid value for 'atm_commission', the character length must be bigger than or equal to 3.";
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
     * Gets use_date
     *
     * @return string
     */
     public function getUseDate()
     {
     	return $this->container['use_date'];
     }
     
     /**
     * Sets use_date
     *
     * @param string $use_date 利用日 半角文字 YYYY-MM-DD形式
     *
     * @return $this
     */
     public function setUseDate($use_date)
     {
     	if(!is_null($this->container['use_date']) && (mb_strlen($use_date)> 10)){
     		throw new \InvalidArgumentException('invalid length for $use_date when calling VisaTransaction., must be smaller than or equal to 10.');
     	}
     	if(!is_null($this->container['use_date']) && (mb_strlen($use_date) < 10)){
     		throw new \InvalidArgumentException('invalid length for $use_date when calling VisaTransaction., must be bigger than or equal to 10.');
     	}
     	
     	$this->container['use_date'] = $use_date;
     	
     	return $this;
     }
     
     /**
     * Gets use_content
     *
     * @return string
     */
     public function getUseContent()
     {
     	return $this->container['use_content'];
     }
     
     /**
     * Sets use_content
     *
     * @param string $use_content　利用内容 全半角文字
     *
     * @return $this
     */
     public function setUseContent($use_content)
     {
     	if(!is_null($this->container['use_content']) && (mb_strlen($use_content) > 120)){
     		throw new \InvalidArgumentException('invalid length for $use_content when calling VisaTransaction., must be smaller than or equal to 120.');
     	}
     	if(!is_null($this->container['use_content']) && (mb_strlen($use_content) < 1)){
     		throw new \InvalidArgumentException('invalid length for $use_content when calling VisaTransaction., must be bigger than or equal to 1.');
     	}
     	
     	$this->container['use_content'] = $use_content;
     	
     	return $this;
     }
     
     /**
     * Gets amount
     *
     * @return string
     */
     public function getAmount()
     {
     	return $this->container['amount'];
     }
     
     /**
     * Sets amount
     *
     * @param string $amount 利用金額 半角数字　マイナス含む 円貨金額
     *
     * @return $this
     */
     public function setAmount($amount)
     {
     	if(!is_null($this->container['amount']) && (mb_strlen($amount) > 20)){
     		throw new\InvalidArgumentException('invalid length for $amount when calling VisaTransaction., must be smaller than or equal to 20.');
     	}
     	if(!is_null($this->container['amount']) && (mb_strlen($amount) < 1)){
     		throw new\InvalidArgumentException('invalid length for $amount when calling VisaTransaction., must be bigger than or equal to 1');
     	}
     	
     	$this->container['amount'] = $amount;
     	
     	return $this;
     }
     
     /**
     * Gets local_currency_amount
     *
     * @return string
     */
     public function getLocalCurrencyAmount()
     {
     	return $this->container['local_currency_amount'];
     }
     
     /**
     * Sets local_currency_amount
     *
     * @param string $local_currency_amount 現地通貨金額 半角数字 小数部最大6桁 マイナス含む 国内利用の場合は項目自体を設定しません
     *
     * @return $this
     */
     public function setLocalCurrencyAmount($local_currency_amount)
     {
     	if(!is_null($local_currency_amount) && (mb_strlen($local_currency_amount) > 20)){
     		throw new \InvalidArgumentException('invalid length for $local_currency_amount when calling VisaTransaction., must be smaller than or equal to 20.');
     	}
     	if(!is_null($local_currency_amount) && (mb_strlen($local_currency_amount) < 3)){
     		throw new \InvalidArgumentException('invalid length for $local_currency_amount when calling VisaTransaction., must be bigger than or equal to 3.');
     	}
     	
     	$this->container['local_currency_amount'] = $local_currency_amount;
     	
     	return $this;
     }
     
     /**
     * Gets conversion_rate
     *
     * @return string
     */
     public function getConversionRate()
     {
     	return $this->container['conversion_rate'];
     }
     
     /**
     * Sets conversion_rate
     *
     * @param string $conversion_rate 円換算レート 半角数字 小数部最大6桁 マイナス含む 国内利用の場合は項目自体を設定しません
     *
     * @return $this
     */
     public function setConversionRate($conversion_rate)
     {
     	if(!is_null($conversion_rate) && (mb_strlen($conversion_rate) > 14)){
     		throw new \InvalidArgumentException('invalid length for $conversion_rate when calling VisaTransaction., must be smaller than or equal to 14.');
     	}
     	if(!is_null($conversion_rate) && (mb_strlen($conversion_rate) < 3)){
     		throw new \InvalidArgumentException('invalid length for $conversion_rate when calling VisaTransaction., must be bigger than or equal to 3.');
     	}
     	
     	$this->container['conversion_rate'] = $conversion_rate;
     	
     	return $this;
     }
     
     /**
     * Gets approval_number
     *
     * @return string
     */
     public function getApprovalNumber()
     {
     	return $this->container['approval_number'];
     }
     
     /**
     * Sets approval_number
     *
     * @param string $approval_number 承認番号 半角数字 
     *
     * @return $this
     */
     public function setApprovalNumber($approval_number)
     {
     	if(!is_null($this->container['approval_number']) && (mb_strlen($approval_number) > 1)){
     		throw new \InvalidArgumentException('invalid length for $approval_number when calling VisaTransaction., must be smaller than or equal to 1.');
     	}
     	if(!is_null($this->container['approval_number']) && (mb_strlen($approval_number) < 1)){
     		throw new \InvalidArgumentException('invalid length for $approval_number when calling VisaTransaction., must be bigger than or equal to 1.');
        }
        
        $this->container['approval_number'] = $approval_number;
        
        return $this;
     }
     
     /**
     * Gets visa_status
     *
     * @return string
     */
     public function getVisaStatus()
     {
     	return $this->container['visa_status'];
     }
     
     /**
     * Sets visa_status
     *
     * @param string $visa_status ステータス 半角数字 1:確定・・・決済として完了している状態 2:未確定・・・加盟店からの情報によりお客様の口座から資金を引き落としていますが、決済としては完了していない状態 3:取消済・・・取消を行った状態
     *
     * @return $this
     */
     public function setVisaStatus($visa_status)
     {
     	if(!is_null($this->container['visa_status']) && (mb_strlen($visa_status) > 1)){
     		throw new \InvalidArgumentException('invalid length for $visa_status when calling VisaTransaction., must be smaller than or equal to 1.');
     	}
     	if(!is_null($this->container['visa_status']) && (mb_strlen($visa_status) < 1)){
     		throw new \InvalidArgumentException('invalid length for $visa_status when calling VisaTransaction., must be bigger than or equal to 1.');
     	}
     	
     	$this->container['visa_status'] = $visa_status;
     	
     	return $this;
     }
     
       /**
     * Gets currency_code
     *
     * @return string
     */
     public function getCurrencyCode()
     {
     	return $this->container['currency_code'];
     }
     
     /**
     * Sets currency_code
     *
     * @param string $currency_code 通貨コード 半角文字 ISO4217準拠した通貨コード 国内利用の場合は項目自体を設定しません
     *
     * @return $this
     */
     public function setCurrencyCode($currency_code)
     {
     	if(!is_null($currency_code) && (mb_strlen($currency_code) > 3)){
     		throw new \InvalidArgumentException('invalid length for $currency_code when calling VisaTransaction., must be smaller than or equal to 3.');
     	}
     	if(!is_null($currency_code) && (mb_strlen($currency_code) < 3)){
     		throw new \InvalidArgumentException('invalid length for $currency_code when calling VisaTransaction., must be bigger than or equal to 3.');
        }
        
        $this->container['currency_code'] = $currency_code;
        
        return $this;
     }
     
          /**
     * Gets atm_commission
     *
     * @return string
     */
     public function getAtmCommission()
     {
     	return $this->container['atm_commission'];
     }
     
     /**
     * Sets atm_commission
     *
     * @param string $atm_commission ATM手数料 半角数字 小数点および小数部最大6桁、マイナス含む 現地通貨金額でのATM手数料 国内利用の場合または、ATM手数料が発生していない場合は項目自体を設定しません
     *
     * @return $this
     */
     public function setAtmCommission($atm_commission)
     {
     	if(!is_null($atm_commission) && (mb_strlen($atm_commission) > 20)){
     		throw new \InvalidArgumentException('invalid length for $atm_commission when calling VisaTransaction., must be smaller than or equal to 20.');
     	}
     	if(!is_null($atm_commission) && (mb_strlen($atm_commission) < 3)){
     		throw new \InvalidArgumentException('invalid length for $atm_commission when calling VisaTransaction., must be bigger than or equal to 3.');
        }
        
        $this->container['atm_commission'] = $atm_commission;
        
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
     	if(is_null($offset)){
     		$this->container[] = $value;
     	}else{
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
     	if(defined('JSON_PRETTY_PRINT')) { //use JSON pretty print
			return json_encode(
				ObjectSerializer::sanitizeForSerialization($this),
				JSON_PRETTY_PRINT
			);
     	}
     	
     	return json_encode(ObjectSerializer::sanitizeForSerialization($this));
     }
 }