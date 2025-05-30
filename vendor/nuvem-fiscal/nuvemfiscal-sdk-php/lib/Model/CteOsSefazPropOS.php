<?php
/**
 * CteOsSefazPropOS
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
 * CteOsSefazPropOS Class Doc Comment
 *
 * @category Class
 * @description Proprietário ou possuidor do Veículo.  Só preenchido quando o veículo não pertencer à empresa emitente do CT-e OS.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteOsSefazPropOS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteOsSefazPropOS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cpf' => 'string',
        'cnpj' => 'string',
        'taf' => 'string',
        'nro_reg_estadual' => 'string',
        'x_nome' => 'string',
        'ie' => 'string',
        'uf' => 'string',
        'tp_prop' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cpf' => null,
        'cnpj' => null,
        'taf' => null,
        'nro_reg_estadual' => null,
        'x_nome' => null,
        'ie' => null,
        'uf' => null,
        'tp_prop' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cpf' => true,
        'cnpj' => true,
        'taf' => true,
        'nro_reg_estadual' => true,
        'x_nome' => true,
        'ie' => true,
        'uf' => true,
        'tp_prop' => true
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
        'cpf' => 'CPF',
        'cnpj' => 'CNPJ',
        'taf' => 'TAF',
        'nro_reg_estadual' => 'NroRegEstadual',
        'x_nome' => 'xNome',
        'ie' => 'IE',
        'uf' => 'UF',
        'tp_prop' => 'tpProp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpf' => 'setCpf',
        'cnpj' => 'setCnpj',
        'taf' => 'setTaf',
        'nro_reg_estadual' => 'setNroRegEstadual',
        'x_nome' => 'setXNome',
        'ie' => 'setIe',
        'uf' => 'setUf',
        'tp_prop' => 'setTpProp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpf' => 'getCpf',
        'cnpj' => 'getCnpj',
        'taf' => 'getTaf',
        'nro_reg_estadual' => 'getNroRegEstadual',
        'x_nome' => 'getXNome',
        'ie' => 'getIe',
        'uf' => 'getUf',
        'tp_prop' => 'getTpProp'
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
        $this->setIfExists('cpf', $data ?? [], null);
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('taf', $data ?? [], null);
        $this->setIfExists('nro_reg_estadual', $data ?? [], null);
        $this->setIfExists('x_nome', $data ?? [], null);
        $this->setIfExists('ie', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
        $this->setIfExists('tp_prop', $data ?? [], null);
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

        if (!is_null($this->container['taf']) && (mb_strlen($this->container['taf']) > 12)) {
            $invalidProperties[] = "invalid value for 'taf', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['nro_reg_estadual']) && (mb_strlen($this->container['nro_reg_estadual']) > 25)) {
            $invalidProperties[] = "invalid value for 'nro_reg_estadual', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['x_nome'] === null) {
            $invalidProperties[] = "'x_nome' can't be null";
        }
        if ((mb_strlen($this->container['x_nome']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_nome']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['tp_prop'] === null) {
            $invalidProperties[] = "'tp_prop' can't be null";
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
     * Gets cpf
     *
     * @return string|null
     */
    public function getCpf()
    {
        return $this->container['cpf'];
    }

    /**
     * Sets cpf
     *
     * @param string|null $cpf Número do CPF.  Informar os zeros não significativos.
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        if (is_null($cpf)) {
            array_push($this->openAPINullablesSetToNull, 'cpf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cpf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cpf'] = $cpf;

        return $this;
    }

    /**
     * Gets cnpj
     *
     * @return string|null
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string|null $cnpj Número do CNPJ.  Informar os zeros não significativos.
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {
        if (is_null($cnpj)) {
            array_push($this->openAPINullablesSetToNull, 'cnpj');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpj', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets taf
     *
     * @return string|null
     */
    public function getTaf()
    {
        return $this->container['taf'];
    }

    /**
     * Sets taf
     *
     * @param string|null $taf Termo de Autorização de Fretamento - TAF.  De acordo com a Resolução ANTT nº 4.777/2015.
     *
     * @return self
     */
    public function setTaf($taf)
    {
        if (is_null($taf)) {
            array_push($this->openAPINullablesSetToNull, 'taf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($taf) && (mb_strlen($taf) > 12)) {
            throw new \InvalidArgumentException('invalid length for $taf when calling CteOsSefazPropOS., must be smaller than or equal to 12.');
        }

        $this->container['taf'] = $taf;

        return $this;
    }

    /**
     * Gets nro_reg_estadual
     *
     * @return string|null
     */
    public function getNroRegEstadual()
    {
        return $this->container['nro_reg_estadual'];
    }

    /**
     * Sets nro_reg_estadual
     *
     * @param string|null $nro_reg_estadual Número do Registro Estadual.  Registro obrigatório do emitente do CT-e OS junto à Agência Reguladora  Estadual.
     *
     * @return self
     */
    public function setNroRegEstadual($nro_reg_estadual)
    {
        if (is_null($nro_reg_estadual)) {
            array_push($this->openAPINullablesSetToNull, 'nro_reg_estadual');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nro_reg_estadual', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nro_reg_estadual) && (mb_strlen($nro_reg_estadual) > 25)) {
            throw new \InvalidArgumentException('invalid length for $nro_reg_estadual when calling CteOsSefazPropOS., must be smaller than or equal to 25.');
        }

        $this->container['nro_reg_estadual'] = $nro_reg_estadual;

        return $this;
    }

    /**
     * Gets x_nome
     *
     * @return string
     */
    public function getXNome()
    {
        return $this->container['x_nome'];
    }

    /**
     * Sets x_nome
     *
     * @param string $x_nome Razão Social ou Nome do proprietário.
     *
     * @return self
     */
    public function setXNome($x_nome)
    {
        if (is_null($x_nome)) {
            array_push($this->openAPINullablesSetToNull, 'x_nome');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_nome', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_nome) && (mb_strlen($x_nome) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_nome when calling CteOsSefazPropOS., must be smaller than or equal to 60.');
        }
        if (!is_null($x_nome) && (mb_strlen($x_nome) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_nome when calling CteOsSefazPropOS., must be bigger than or equal to 2.');
        }

        $this->container['x_nome'] = $x_nome;

        return $this;
    }

    /**
     * Gets ie
     *
     * @return string|null
     */
    public function getIe()
    {
        return $this->container['ie'];
    }

    /**
     * Sets ie
     *
     * @param string|null $ie Inscrição Estadual.
     *
     * @return self
     */
    public function setIe($ie)
    {
        if (is_null($ie)) {
            array_push($this->openAPINullablesSetToNull, 'ie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ie'] = $ie;

        return $this;
    }

    /**
     * Gets uf
     *
     * @return string|null
     */
    public function getUf()
    {
        return $this->container['uf'];
    }

    /**
     * Sets uf
     *
     * @param string|null $uf UF.
     *
     * @return self
     */
    public function setUf($uf)
    {
        if (is_null($uf)) {
            array_push($this->openAPINullablesSetToNull, 'uf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf'] = $uf;

        return $this;
    }

    /**
     * Gets tp_prop
     *
     * @return int
     */
    public function getTpProp()
    {
        return $this->container['tp_prop'];
    }

    /**
     * Sets tp_prop
     *
     * @param int $tp_prop Tipo Proprietário ou possuidor.  Preencher com:  * 0 - TAC - Agregado  * 1 - TAC Independente  ou  * 2 - Outros
     *
     * @return self
     */
    public function setTpProp($tp_prop)
    {
        if (is_null($tp_prop)) {
            array_push($this->openAPINullablesSetToNull, 'tp_prop');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_prop', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_prop'] = $tp_prop;

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


