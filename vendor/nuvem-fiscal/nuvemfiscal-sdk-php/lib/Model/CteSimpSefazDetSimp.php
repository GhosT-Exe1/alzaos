<?php
/**
 * CteSimpSefazDetSimp
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
 * CteSimpSefazDetSimp Class Doc Comment
 *
 * @category Class
 * @description Detalhamento das entregas / prestações do CTe Simplificado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSimpSefazDetSimp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSimpSefazDetSimp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'n_item' => 'int',
        'c_mun_ini' => 'string',
        'x_mun_ini' => 'string',
        'c_mun_fim' => 'string',
        'x_mun_fim' => 'string',
        'v_prest' => 'float',
        'v_rec' => 'float',
        'comp' => '\NuvemFiscal\Model\CteSimpSefazCompSimp[]',
        'inf_nfe' => '\NuvemFiscal\Model\CteSimpSefazInfNFeSimp[]',
        'inf_doc_ant' => '\NuvemFiscal\Model\CteSimpSefazInfDocAntSimp[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'n_item' => null,
        'c_mun_ini' => null,
        'x_mun_ini' => null,
        'c_mun_fim' => null,
        'x_mun_fim' => null,
        'v_prest' => null,
        'v_rec' => null,
        'comp' => null,
        'inf_nfe' => null,
        'inf_doc_ant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'n_item' => true,
        'c_mun_ini' => true,
        'x_mun_ini' => true,
        'c_mun_fim' => true,
        'x_mun_fim' => true,
        'v_prest' => true,
        'v_rec' => true,
        'comp' => false,
        'inf_nfe' => false,
        'inf_doc_ant' => false
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
        'n_item' => 'nItem',
        'c_mun_ini' => 'cMunIni',
        'x_mun_ini' => 'xMunIni',
        'c_mun_fim' => 'cMunFim',
        'x_mun_fim' => 'xMunFim',
        'v_prest' => 'vPrest',
        'v_rec' => 'vRec',
        'comp' => 'Comp',
        'inf_nfe' => 'infNFe',
        'inf_doc_ant' => 'infDocAnt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'n_item' => 'setNItem',
        'c_mun_ini' => 'setCMunIni',
        'x_mun_ini' => 'setXMunIni',
        'c_mun_fim' => 'setCMunFim',
        'x_mun_fim' => 'setXMunFim',
        'v_prest' => 'setVPrest',
        'v_rec' => 'setVRec',
        'comp' => 'setComp',
        'inf_nfe' => 'setInfNfe',
        'inf_doc_ant' => 'setInfDocAnt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'n_item' => 'getNItem',
        'c_mun_ini' => 'getCMunIni',
        'x_mun_ini' => 'getXMunIni',
        'c_mun_fim' => 'getCMunFim',
        'x_mun_fim' => 'getXMunFim',
        'v_prest' => 'getVPrest',
        'v_rec' => 'getVRec',
        'comp' => 'getComp',
        'inf_nfe' => 'getInfNfe',
        'inf_doc_ant' => 'getInfDocAnt'
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
        $this->setIfExists('n_item', $data ?? [], null);
        $this->setIfExists('c_mun_ini', $data ?? [], null);
        $this->setIfExists('x_mun_ini', $data ?? [], null);
        $this->setIfExists('c_mun_fim', $data ?? [], null);
        $this->setIfExists('x_mun_fim', $data ?? [], null);
        $this->setIfExists('v_prest', $data ?? [], null);
        $this->setIfExists('v_rec', $data ?? [], null);
        $this->setIfExists('comp', $data ?? [], null);
        $this->setIfExists('inf_nfe', $data ?? [], null);
        $this->setIfExists('inf_doc_ant', $data ?? [], null);
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

        if ($this->container['n_item'] === null) {
            $invalidProperties[] = "'n_item' can't be null";
        }
        if (($this->container['n_item'] > 990)) {
            $invalidProperties[] = "invalid value for 'n_item', must be smaller than or equal to 990.";
        }

        if (($this->container['n_item'] < 1)) {
            $invalidProperties[] = "invalid value for 'n_item', must be bigger than or equal to 1.";
        }

        if ($this->container['c_mun_ini'] === null) {
            $invalidProperties[] = "'c_mun_ini' can't be null";
        }
        if ($this->container['x_mun_ini'] === null) {
            $invalidProperties[] = "'x_mun_ini' can't be null";
        }
        if ((mb_strlen($this->container['x_mun_ini']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_mun_ini', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_mun_ini']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_mun_ini', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['c_mun_fim'] === null) {
            $invalidProperties[] = "'c_mun_fim' can't be null";
        }
        if ($this->container['x_mun_fim'] === null) {
            $invalidProperties[] = "'x_mun_fim' can't be null";
        }
        if ((mb_strlen($this->container['x_mun_fim']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_mun_fim', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_mun_fim']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_mun_fim', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['v_prest'] === null) {
            $invalidProperties[] = "'v_prest' can't be null";
        }
        if (($this->container['v_prest'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_prest', must be bigger than or equal to 0.";
        }

        if ($this->container['v_rec'] === null) {
            $invalidProperties[] = "'v_rec' can't be null";
        }
        if (($this->container['v_rec'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_rec', must be bigger than or equal to 0.";
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
     * Gets n_item
     *
     * @return int
     */
    public function getNItem()
    {
        return $this->container['n_item'];
    }

    /**
     * Sets n_item
     *
     * @param int $n_item Número identificador do item agrupador da prestação.
     *
     * @return self
     */
    public function setNItem($n_item)
    {
        if (is_null($n_item)) {
            array_push($this->openAPINullablesSetToNull, 'n_item');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_item', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_item) && ($n_item > 990)) {
            throw new \InvalidArgumentException('invalid value for $n_item when calling CteSimpSefazDetSimp., must be smaller than or equal to 990.');
        }
        if (!is_null($n_item) && ($n_item < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_item when calling CteSimpSefazDetSimp., must be bigger than or equal to 1.');
        }

        $this->container['n_item'] = $n_item;

        return $this;
    }

    /**
     * Gets c_mun_ini
     *
     * @return string
     */
    public function getCMunIni()
    {
        return $this->container['c_mun_ini'];
    }

    /**
     * Sets c_mun_ini
     *
     * @param string $c_mun_ini Código do Município de início da prestação.  Utilizar a tabela do IBGE. Informar 9999999 para operações com o exterior.
     *
     * @return self
     */
    public function setCMunIni($c_mun_ini)
    {
        if (is_null($c_mun_ini)) {
            array_push($this->openAPINullablesSetToNull, 'c_mun_ini');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_mun_ini', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_mun_ini'] = $c_mun_ini;

        return $this;
    }

    /**
     * Gets x_mun_ini
     *
     * @return string
     */
    public function getXMunIni()
    {
        return $this->container['x_mun_ini'];
    }

    /**
     * Sets x_mun_ini
     *
     * @param string $x_mun_ini Nome do Município do início da prestação.  Informar 'EXTERIOR' para operações com o exterior.
     *
     * @return self
     */
    public function setXMunIni($x_mun_ini)
    {
        if (is_null($x_mun_ini)) {
            array_push($this->openAPINullablesSetToNull, 'x_mun_ini');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_mun_ini', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_mun_ini) && (mb_strlen($x_mun_ini) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_mun_ini when calling CteSimpSefazDetSimp., must be smaller than or equal to 60.');
        }
        if (!is_null($x_mun_ini) && (mb_strlen($x_mun_ini) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_mun_ini when calling CteSimpSefazDetSimp., must be bigger than or equal to 2.');
        }

        $this->container['x_mun_ini'] = $x_mun_ini;

        return $this;
    }

    /**
     * Gets c_mun_fim
     *
     * @return string
     */
    public function getCMunFim()
    {
        return $this->container['c_mun_fim'];
    }

    /**
     * Sets c_mun_fim
     *
     * @param string $c_mun_fim Código do Município de término da prestação.  Utilizar a tabela do IBGE. Informar 9999999 para operações com o exterior.
     *
     * @return self
     */
    public function setCMunFim($c_mun_fim)
    {
        if (is_null($c_mun_fim)) {
            array_push($this->openAPINullablesSetToNull, 'c_mun_fim');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_mun_fim', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_mun_fim'] = $c_mun_fim;

        return $this;
    }

    /**
     * Gets x_mun_fim
     *
     * @return string
     */
    public function getXMunFim()
    {
        return $this->container['x_mun_fim'];
    }

    /**
     * Sets x_mun_fim
     *
     * @param string $x_mun_fim Nome do Município do término da prestação.  Informar 'EXTERIOR' para operações com o exterior.
     *
     * @return self
     */
    public function setXMunFim($x_mun_fim)
    {
        if (is_null($x_mun_fim)) {
            array_push($this->openAPINullablesSetToNull, 'x_mun_fim');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_mun_fim', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_mun_fim) && (mb_strlen($x_mun_fim) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_mun_fim when calling CteSimpSefazDetSimp., must be smaller than or equal to 60.');
        }
        if (!is_null($x_mun_fim) && (mb_strlen($x_mun_fim) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_mun_fim when calling CteSimpSefazDetSimp., must be bigger than or equal to 2.');
        }

        $this->container['x_mun_fim'] = $x_mun_fim;

        return $this;
    }

    /**
     * Gets v_prest
     *
     * @return float
     */
    public function getVPrest()
    {
        return $this->container['v_prest'];
    }

    /**
     * Sets v_prest
     *
     * @param float $v_prest Valorl da Prestação do Serviço.  Pode conter zeros quando o CT-e for de complemento de ICMS.
     *
     * @return self
     */
    public function setVPrest($v_prest)
    {
        if (is_null($v_prest)) {
            array_push($this->openAPINullablesSetToNull, 'v_prest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_prest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_prest) && ($v_prest < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_prest when calling CteSimpSefazDetSimp., must be bigger than or equal to 0.');
        }

        $this->container['v_prest'] = $v_prest;

        return $this;
    }

    /**
     * Gets v_rec
     *
     * @return float
     */
    public function getVRec()
    {
        return $this->container['v_rec'];
    }

    /**
     * Sets v_rec
     *
     * @param float $v_rec Valor a Receber.
     *
     * @return self
     */
    public function setVRec($v_rec)
    {
        if (is_null($v_rec)) {
            array_push($this->openAPINullablesSetToNull, 'v_rec');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_rec', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_rec) && ($v_rec < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_rec when calling CteSimpSefazDetSimp., must be bigger than or equal to 0.');
        }

        $this->container['v_rec'] = $v_rec;

        return $this;
    }

    /**
     * Gets comp
     *
     * @return \NuvemFiscal\Model\CteSimpSefazCompSimp[]|null
     */
    public function getComp()
    {
        return $this->container['comp'];
    }

    /**
     * Sets comp
     *
     * @param \NuvemFiscal\Model\CteSimpSefazCompSimp[]|null $comp comp
     *
     * @return self
     */
    public function setComp($comp)
    {
        if (is_null($comp)) {
            throw new \InvalidArgumentException('non-nullable comp cannot be null');
        }
        $this->container['comp'] = $comp;

        return $this;
    }

    /**
     * Gets inf_nfe
     *
     * @return \NuvemFiscal\Model\CteSimpSefazInfNFeSimp[]|null
     */
    public function getInfNfe()
    {
        return $this->container['inf_nfe'];
    }

    /**
     * Sets inf_nfe
     *
     * @param \NuvemFiscal\Model\CteSimpSefazInfNFeSimp[]|null $inf_nfe inf_nfe
     *
     * @return self
     */
    public function setInfNfe($inf_nfe)
    {
        if (is_null($inf_nfe)) {
            throw new \InvalidArgumentException('non-nullable inf_nfe cannot be null');
        }
        $this->container['inf_nfe'] = $inf_nfe;

        return $this;
    }

    /**
     * Gets inf_doc_ant
     *
     * @return \NuvemFiscal\Model\CteSimpSefazInfDocAntSimp[]|null
     */
    public function getInfDocAnt()
    {
        return $this->container['inf_doc_ant'];
    }

    /**
     * Sets inf_doc_ant
     *
     * @param \NuvemFiscal\Model\CteSimpSefazInfDocAntSimp[]|null $inf_doc_ant inf_doc_ant
     *
     * @return self
     */
    public function setInfDocAnt($inf_doc_ant)
    {
        if (is_null($inf_doc_ant)) {
            throw new \InvalidArgumentException('non-nullable inf_doc_ant cannot be null');
        }
        $this->container['inf_doc_ant'] = $inf_doc_ant;

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


