<?php
/**
 * InfoObra
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
 * InfoObra Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações do DPS relativas à serviço de obra.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InfoObra implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InfoObra';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_obra' => 'string',
        'insc_imob_fisc' => 'string',
        'end' => '\NuvemFiscal\Model\EnderecoSimples'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_obra' => null,
        'insc_imob_fisc' => null,
        'end' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_obra' => true,
        'insc_imob_fisc' => true,
        'end' => false
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
        'c_obra' => 'cObra',
        'insc_imob_fisc' => 'inscImobFisc',
        'end' => 'end'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_obra' => 'setCObra',
        'insc_imob_fisc' => 'setInscImobFisc',
        'end' => 'setEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_obra' => 'getCObra',
        'insc_imob_fisc' => 'getInscImobFisc',
        'end' => 'getEnd'
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
        $this->setIfExists('c_obra', $data ?? [], null);
        $this->setIfExists('insc_imob_fisc', $data ?? [], null);
        $this->setIfExists('end', $data ?? [], null);
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

        if (!is_null($this->container['c_obra']) && (mb_strlen($this->container['c_obra']) > 30)) {
            $invalidProperties[] = "invalid value for 'c_obra', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['c_obra']) && (mb_strlen($this->container['c_obra']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_obra', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['insc_imob_fisc']) && (mb_strlen($this->container['insc_imob_fisc']) > 30)) {
            $invalidProperties[] = "invalid value for 'insc_imob_fisc', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['insc_imob_fisc']) && (mb_strlen($this->container['insc_imob_fisc']) < 1)) {
            $invalidProperties[] = "invalid value for 'insc_imob_fisc', the character length must be bigger than or equal to 1.";
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
     * Gets c_obra
     *
     * @return string|null
     */
    public function getCObra()
    {
        return $this->container['c_obra'];
    }

    /**
     * Sets c_obra
     *
     * @param string|null $c_obra Número de identificação da obra.  Cadastro Nacional de Obras (CNO) ou Cadastro Específico do INSS (CEI).
     *
     * @return self
     */
    public function setCObra($c_obra)
    {
        if (is_null($c_obra)) {
            array_push($this->openAPINullablesSetToNull, 'c_obra');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_obra', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_obra) && (mb_strlen($c_obra) > 30)) {
            throw new \InvalidArgumentException('invalid length for $c_obra when calling InfoObra., must be smaller than or equal to 30.');
        }
        if (!is_null($c_obra) && (mb_strlen($c_obra) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_obra when calling InfoObra., must be bigger than or equal to 1.');
        }

        $this->container['c_obra'] = $c_obra;

        return $this;
    }

    /**
     * Gets insc_imob_fisc
     *
     * @return string|null
     */
    public function getInscImobFisc()
    {
        return $this->container['insc_imob_fisc'];
    }

    /**
     * Sets insc_imob_fisc
     *
     * @param string|null $insc_imob_fisc Inscrição imobiliária fiscal (código fornecido pela Prefeitura Municipal para a identificação da obra ou para fins de recolhimento do IPTU).
     *
     * @return self
     */
    public function setInscImobFisc($insc_imob_fisc)
    {
        if (is_null($insc_imob_fisc)) {
            array_push($this->openAPINullablesSetToNull, 'insc_imob_fisc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('insc_imob_fisc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($insc_imob_fisc) && (mb_strlen($insc_imob_fisc) > 30)) {
            throw new \InvalidArgumentException('invalid length for $insc_imob_fisc when calling InfoObra., must be smaller than or equal to 30.');
        }
        if (!is_null($insc_imob_fisc) && (mb_strlen($insc_imob_fisc) < 1)) {
            throw new \InvalidArgumentException('invalid length for $insc_imob_fisc when calling InfoObra., must be bigger than or equal to 1.');
        }

        $this->container['insc_imob_fisc'] = $insc_imob_fisc;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \NuvemFiscal\Model\EnderecoSimples|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \NuvemFiscal\Model\EnderecoSimples|null $end end
     *
     * @return self
     */
    public function setEnd($end)
    {
        if (is_null($end)) {
            throw new \InvalidArgumentException('non-nullable end cannot be null');
        }
        $this->container['end'] = $end;

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


