<?php
/**
 * CteSimpSefazPeriSimp
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
 * CteSimpSefazPeriSimp Class Doc Comment
 *
 * @category Class
 * @description Preenchido quando for  transporte de produtos classificados pela ONU como perigosos.  O preenchimento desses campos não desobriga a empresa aérea de emitir os demais documentos que constam na legislação vigente.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSimpSefazPeriSimp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSimpSefazPeriSimp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'n_onu' => 'string',
        'q_tot_emb' => 'string',
        'inf_tot_ap' => '\NuvemFiscal\Model\CteSimpSefazInfTotAPSimp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'n_onu' => null,
        'q_tot_emb' => null,
        'inf_tot_ap' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'n_onu' => true,
        'q_tot_emb' => true,
        'inf_tot_ap' => false
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
        'n_onu' => 'nONU',
        'q_tot_emb' => 'qTotEmb',
        'inf_tot_ap' => 'infTotAP'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'n_onu' => 'setNOnu',
        'q_tot_emb' => 'setQTotEmb',
        'inf_tot_ap' => 'setInfTotAp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'n_onu' => 'getNOnu',
        'q_tot_emb' => 'getQTotEmb',
        'inf_tot_ap' => 'getInfTotAp'
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
        $this->setIfExists('n_onu', $data ?? [], null);
        $this->setIfExists('q_tot_emb', $data ?? [], null);
        $this->setIfExists('inf_tot_ap', $data ?? [], null);
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

        if ($this->container['n_onu'] === null) {
            $invalidProperties[] = "'n_onu' can't be null";
        }
        if ($this->container['q_tot_emb'] === null) {
            $invalidProperties[] = "'q_tot_emb' can't be null";
        }
        if ((mb_strlen($this->container['q_tot_emb']) > 20)) {
            $invalidProperties[] = "invalid value for 'q_tot_emb', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['q_tot_emb']) < 1)) {
            $invalidProperties[] = "invalid value for 'q_tot_emb', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['inf_tot_ap'] === null) {
            $invalidProperties[] = "'inf_tot_ap' can't be null";
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
     * Gets n_onu
     *
     * @return string
     */
    public function getNOnu()
    {
        return $this->container['n_onu'];
    }

    /**
     * Sets n_onu
     *
     * @param string $n_onu Número ONU/UN.  Ver a legislação de transporte de produtos perigosos aplicadas ao modal.
     *
     * @return self
     */
    public function setNOnu($n_onu)
    {
        if (is_null($n_onu)) {
            array_push($this->openAPINullablesSetToNull, 'n_onu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_onu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_onu'] = $n_onu;

        return $this;
    }

    /**
     * Gets q_tot_emb
     *
     * @return string
     */
    public function getQTotEmb()
    {
        return $this->container['q_tot_emb'];
    }

    /**
     * Sets q_tot_emb
     *
     * @param string $q_tot_emb Quantidade total de volumes contendo artigos perigosos.  Preencher com o número de volumes (unidades) de artigos perigosos, ou seja, cada embalagem devidamente marcada e etiquetada (por ex.: número de caixas, de tambores, de bombonas, dentre outros). Não deve ser preenchido com o número de ULD, pallets ou containers.
     *
     * @return self
     */
    public function setQTotEmb($q_tot_emb)
    {
        if (is_null($q_tot_emb)) {
            array_push($this->openAPINullablesSetToNull, 'q_tot_emb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_tot_emb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($q_tot_emb) && (mb_strlen($q_tot_emb) > 20)) {
            throw new \InvalidArgumentException('invalid length for $q_tot_emb when calling CteSimpSefazPeriSimp., must be smaller than or equal to 20.');
        }
        if (!is_null($q_tot_emb) && (mb_strlen($q_tot_emb) < 1)) {
            throw new \InvalidArgumentException('invalid length for $q_tot_emb when calling CteSimpSefazPeriSimp., must be bigger than or equal to 1.');
        }

        $this->container['q_tot_emb'] = $q_tot_emb;

        return $this;
    }

    /**
     * Gets inf_tot_ap
     *
     * @return \NuvemFiscal\Model\CteSimpSefazInfTotAPSimp
     */
    public function getInfTotAp()
    {
        return $this->container['inf_tot_ap'];
    }

    /**
     * Sets inf_tot_ap
     *
     * @param \NuvemFiscal\Model\CteSimpSefazInfTotAPSimp $inf_tot_ap inf_tot_ap
     *
     * @return self
     */
    public function setInfTotAp($inf_tot_ap)
    {
        if (is_null($inf_tot_ap)) {
            throw new \InvalidArgumentException('non-nullable inf_tot_ap cannot be null');
        }
        $this->container['inf_tot_ap'] = $inf_tot_ap;

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


