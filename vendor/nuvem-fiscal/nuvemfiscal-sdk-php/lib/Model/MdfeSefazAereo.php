<?php
/**
 * MdfeSefazAereo
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
 * MdfeSefazAereo Class Doc Comment
 *
 * @category Class
 * @description Informações do modal Aéreo.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazAereo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazAereo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nac' => 'string',
        'matr' => 'string',
        'n_voo' => 'string',
        'c_aer_emb' => 'string',
        'c_aer_des' => 'string',
        'd_voo' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'nac' => null,
        'matr' => null,
        'n_voo' => null,
        'c_aer_emb' => null,
        'c_aer_des' => null,
        'd_voo' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'nac' => true,
        'matr' => true,
        'n_voo' => true,
        'c_aer_emb' => true,
        'c_aer_des' => true,
        'd_voo' => true
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
        'nac' => 'nac',
        'matr' => 'matr',
        'n_voo' => 'nVoo',
        'c_aer_emb' => 'cAerEmb',
        'c_aer_des' => 'cAerDes',
        'd_voo' => 'dVoo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nac' => 'setNac',
        'matr' => 'setMatr',
        'n_voo' => 'setNVoo',
        'c_aer_emb' => 'setCAerEmb',
        'c_aer_des' => 'setCAerDes',
        'd_voo' => 'setDVoo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nac' => 'getNac',
        'matr' => 'getMatr',
        'n_voo' => 'getNVoo',
        'c_aer_emb' => 'getCAerEmb',
        'c_aer_des' => 'getCAerDes',
        'd_voo' => 'getDVoo'
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
        $this->setIfExists('nac', $data ?? [], null);
        $this->setIfExists('matr', $data ?? [], null);
        $this->setIfExists('n_voo', $data ?? [], null);
        $this->setIfExists('c_aer_emb', $data ?? [], null);
        $this->setIfExists('c_aer_des', $data ?? [], null);
        $this->setIfExists('d_voo', $data ?? [], null);
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

        if ($this->container['nac'] === null) {
            $invalidProperties[] = "'nac' can't be null";
        }
        if ((mb_strlen($this->container['nac']) > 4)) {
            $invalidProperties[] = "invalid value for 'nac', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['nac']) < 1)) {
            $invalidProperties[] = "invalid value for 'nac', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['matr'] === null) {
            $invalidProperties[] = "'matr' can't be null";
        }
        if ((mb_strlen($this->container['matr']) > 6)) {
            $invalidProperties[] = "invalid value for 'matr', the character length must be smaller than or equal to 6.";
        }

        if ((mb_strlen($this->container['matr']) < 1)) {
            $invalidProperties[] = "invalid value for 'matr', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['n_voo'] === null) {
            $invalidProperties[] = "'n_voo' can't be null";
        }
        if ((mb_strlen($this->container['n_voo']) > 9)) {
            $invalidProperties[] = "invalid value for 'n_voo', the character length must be smaller than or equal to 9.";
        }

        if ((mb_strlen($this->container['n_voo']) < 5)) {
            $invalidProperties[] = "invalid value for 'n_voo', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['c_aer_emb'] === null) {
            $invalidProperties[] = "'c_aer_emb' can't be null";
        }
        if ((mb_strlen($this->container['c_aer_emb']) > 4)) {
            $invalidProperties[] = "invalid value for 'c_aer_emb', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['c_aer_emb']) < 3)) {
            $invalidProperties[] = "invalid value for 'c_aer_emb', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['c_aer_des'] === null) {
            $invalidProperties[] = "'c_aer_des' can't be null";
        }
        if ((mb_strlen($this->container['c_aer_des']) > 4)) {
            $invalidProperties[] = "invalid value for 'c_aer_des', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['c_aer_des']) < 3)) {
            $invalidProperties[] = "invalid value for 'c_aer_des', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['d_voo'] === null) {
            $invalidProperties[] = "'d_voo' can't be null";
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
     * Gets nac
     *
     * @return string
     */
    public function getNac()
    {
        return $this->container['nac'];
    }

    /**
     * Sets nac
     *
     * @param string $nac Marca da Nacionalidade da aeronave.
     *
     * @return self
     */
    public function setNac($nac)
    {
        if (is_null($nac)) {
            array_push($this->openAPINullablesSetToNull, 'nac');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nac', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nac) && (mb_strlen($nac) > 4)) {
            throw new \InvalidArgumentException('invalid length for $nac when calling MdfeSefazAereo., must be smaller than or equal to 4.');
        }
        if (!is_null($nac) && (mb_strlen($nac) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nac when calling MdfeSefazAereo., must be bigger than or equal to 1.');
        }

        $this->container['nac'] = $nac;

        return $this;
    }

    /**
     * Gets matr
     *
     * @return string
     */
    public function getMatr()
    {
        return $this->container['matr'];
    }

    /**
     * Sets matr
     *
     * @param string $matr Marca de Matrícula da aeronave.
     *
     * @return self
     */
    public function setMatr($matr)
    {
        if (is_null($matr)) {
            array_push($this->openAPINullablesSetToNull, 'matr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('matr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($matr) && (mb_strlen($matr) > 6)) {
            throw new \InvalidArgumentException('invalid length for $matr when calling MdfeSefazAereo., must be smaller than or equal to 6.');
        }
        if (!is_null($matr) && (mb_strlen($matr) < 1)) {
            throw new \InvalidArgumentException('invalid length for $matr when calling MdfeSefazAereo., must be bigger than or equal to 1.');
        }

        $this->container['matr'] = $matr;

        return $this;
    }

    /**
     * Gets n_voo
     *
     * @return string
     */
    public function getNVoo()
    {
        return $this->container['n_voo'];
    }

    /**
     * Sets n_voo
     *
     * @param string $n_voo Número do Voo.  Formato = AB1234, sendo AB a designação da empresa e 1234 o número do voo. Quando não for possível incluir as marcas de nacionalidade e matrícula sem hífen.
     *
     * @return self
     */
    public function setNVoo($n_voo)
    {
        if (is_null($n_voo)) {
            array_push($this->openAPINullablesSetToNull, 'n_voo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_voo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_voo) && (mb_strlen($n_voo) > 9)) {
            throw new \InvalidArgumentException('invalid length for $n_voo when calling MdfeSefazAereo., must be smaller than or equal to 9.');
        }
        if (!is_null($n_voo) && (mb_strlen($n_voo) < 5)) {
            throw new \InvalidArgumentException('invalid length for $n_voo when calling MdfeSefazAereo., must be bigger than or equal to 5.');
        }

        $this->container['n_voo'] = $n_voo;

        return $this;
    }

    /**
     * Gets c_aer_emb
     *
     * @return string
     */
    public function getCAerEmb()
    {
        return $this->container['c_aer_emb'];
    }

    /**
     * Sets c_aer_emb
     *
     * @param string $c_aer_emb Aeródromo de Embarque.  O código de três letras IATA do aeroporto de partida deverá ser incluído como primeira anotação. Quando não for possível, utilizar a sigla OACI.
     *
     * @return self
     */
    public function setCAerEmb($c_aer_emb)
    {
        if (is_null($c_aer_emb)) {
            array_push($this->openAPINullablesSetToNull, 'c_aer_emb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_aer_emb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_aer_emb) && (mb_strlen($c_aer_emb) > 4)) {
            throw new \InvalidArgumentException('invalid length for $c_aer_emb when calling MdfeSefazAereo., must be smaller than or equal to 4.');
        }
        if (!is_null($c_aer_emb) && (mb_strlen($c_aer_emb) < 3)) {
            throw new \InvalidArgumentException('invalid length for $c_aer_emb when calling MdfeSefazAereo., must be bigger than or equal to 3.');
        }

        $this->container['c_aer_emb'] = $c_aer_emb;

        return $this;
    }

    /**
     * Gets c_aer_des
     *
     * @return string
     */
    public function getCAerDes()
    {
        return $this->container['c_aer_des'];
    }

    /**
     * Sets c_aer_des
     *
     * @param string $c_aer_des Aeródromo de Destino.  O código de três letras IATA do aeroporto de destino deverá ser incluído como primeira anotação. Quando não for possível, utilizar a sigla OACI.
     *
     * @return self
     */
    public function setCAerDes($c_aer_des)
    {
        if (is_null($c_aer_des)) {
            array_push($this->openAPINullablesSetToNull, 'c_aer_des');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_aer_des', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_aer_des) && (mb_strlen($c_aer_des) > 4)) {
            throw new \InvalidArgumentException('invalid length for $c_aer_des when calling MdfeSefazAereo., must be smaller than or equal to 4.');
        }
        if (!is_null($c_aer_des) && (mb_strlen($c_aer_des) < 3)) {
            throw new \InvalidArgumentException('invalid length for $c_aer_des when calling MdfeSefazAereo., must be bigger than or equal to 3.');
        }

        $this->container['c_aer_des'] = $c_aer_des;

        return $this;
    }

    /**
     * Gets d_voo
     *
     * @return \DateTime
     */
    public function getDVoo()
    {
        return $this->container['d_voo'];
    }

    /**
     * Sets d_voo
     *
     * @param \DateTime $d_voo Data do Voo.  Formato AAAA-MM-DD.
     *
     * @return self
     */
    public function setDVoo($d_voo)
    {
        if (is_null($d_voo)) {
            array_push($this->openAPINullablesSetToNull, 'd_voo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_voo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_voo'] = $d_voo;

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


