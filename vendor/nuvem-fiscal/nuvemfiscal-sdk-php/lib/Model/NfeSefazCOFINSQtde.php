<?php
/**
 * NfeSefazCOFINSQtde
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Nuvem Fiscal
 *
 * API para automação comercial e documentos fiscais.
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NuvemFiscal\Model;

use \ArrayAccess;
use \NuvemFiscal\ObjectSerializer;

/**
 * NfeSefazCOFINSQtde Class Doc Comment
 *
 * @category Class
 * @description Código de Situação Tributária do COFINS.  * 03 - Operação Tributável - Base de Calculo &#x3D; Quantidade Vendida x Alíquota por Unidade de Produto
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazCOFINSQtde implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazCOFINSQtde';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cst' => 'string',
        'q_bc_prod' => 'float',
        'v_aliq_prod' => 'float',
        'v_cofins' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cst' => null,
        'q_bc_prod' => null,
        'v_aliq_prod' => null,
        'v_cofins' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cst' => true,
        'q_bc_prod' => true,
        'v_aliq_prod' => true,
        'v_cofins' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cst' => 'CST',
        'q_bc_prod' => 'qBCProd',
        'v_aliq_prod' => 'vAliqProd',
        'v_cofins' => 'vCOFINS'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cst' => 'setCst',
        'q_bc_prod' => 'setQBcProd',
        'v_aliq_prod' => 'setVAliqProd',
        'v_cofins' => 'setVCofins'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cst' => 'getCst',
        'q_bc_prod' => 'getQBcProd',
        'v_aliq_prod' => 'getVAliqProd',
        'v_cofins' => 'getVCofins'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('cst', $data ?? [], null);
        $this->setIfExists('q_bc_prod', $data ?? [], null);
        $this->setIfExists('v_aliq_prod', $data ?? [], null);
        $this->setIfExists('v_cofins', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cst'] === null) {
            $invalidProperties[] = "'cst' can't be null";
        }
        if ($this->container['q_bc_prod'] === null) {
            $invalidProperties[] = "'q_bc_prod' can't be null";
        }
        if (($this->container['q_bc_prod'] < 0)) {
            $invalidProperties[] = "invalid value for 'q_bc_prod', must be bigger than or equal to 0.";
        }

        if ($this->container['v_aliq_prod'] === null) {
            $invalidProperties[] = "'v_aliq_prod' can't be null";
        }
        if (($this->container['v_aliq_prod'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_aliq_prod', must be bigger than or equal to 0.";
        }

        if ($this->container['v_cofins'] === null) {
            $invalidProperties[] = "'v_cofins' can't be null";
        }
        if (($this->container['v_cofins'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_cofins', must be bigger than or equal to 0.";
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
     * Gets cst
     *
     * @return string
     */
    public function getCst()
    {
        return $this->container['cst'];
    }

    /**
     * Sets cst
     *
     * @param string $cst Código de Situação Tributária do COFINS.  * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto
     *
     * @return self
     */
    public function setCst($cst)
    {
        if (is_null($cst)) {
            array_push($this->openAPINullablesSetToNull, 'cst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cst'] = $cst;

        return $this;
    }

    /**
     * Gets q_bc_prod
     *
     * @return float
     */
    public function getQBcProd()
    {
        return $this->container['q_bc_prod'];
    }

    /**
     * Sets q_bc_prod
     *
     * @param float $q_bc_prod Quantidade Vendida (NT2011/004).
     *
     * @return self
     */
    public function setQBcProd($q_bc_prod)
    {
        if (is_null($q_bc_prod)) {
            array_push($this->openAPINullablesSetToNull, 'q_bc_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_bc_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($q_bc_prod) && ($q_bc_prod < 0)) {
            throw new \InvalidArgumentException('invalid value for $q_bc_prod when calling NfeSefazCOFINSQtde., must be bigger than or equal to 0.');
        }

        $this->container['q_bc_prod'] = $q_bc_prod;

        return $this;
    }

    /**
     * Gets v_aliq_prod
     *
     * @return float
     */
    public function getVAliqProd()
    {
        return $this->container['v_aliq_prod'];
    }

    /**
     * Sets v_aliq_prod
     *
     * @param float $v_aliq_prod Alíquota do COFINS (em reais) (NT2011/004).
     *
     * @return self
     */
    public function setVAliqProd($v_aliq_prod)
    {
        if (is_null($v_aliq_prod)) {
            array_push($this->openAPINullablesSetToNull, 'v_aliq_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_aliq_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_aliq_prod) && ($v_aliq_prod < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_aliq_prod when calling NfeSefazCOFINSQtde., must be bigger than or equal to 0.');
        }

        $this->container['v_aliq_prod'] = $v_aliq_prod;

        return $this;
    }

    /**
     * Gets v_cofins
     *
     * @return float
     */
    public function getVCofins()
    {
        return $this->container['v_cofins'];
    }

    /**
     * Sets v_cofins
     *
     * @param float $v_cofins Valor do COFINS.
     *
     * @return self
     */
    public function setVCofins($v_cofins)
    {
        if (is_null($v_cofins)) {
            array_push($this->openAPINullablesSetToNull, 'v_cofins');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_cofins', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_cofins) && ($v_cofins < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_cofins when calling NfeSefazCOFINSQtde., must be bigger than or equal to 0.');
        }

        $this->container['v_cofins'] = $v_cofins;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


