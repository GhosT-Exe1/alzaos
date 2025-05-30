<?php
/**
 * RpsServicoValores
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
 * RpsServicoValores Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RpsServicoValores implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RpsServicoValores';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'valor_unitario' => 'float',
        'valor_servicos' => 'float',
        'valor_deducoes' => 'float',
        'valor_pis' => 'float',
        'valor_cofins' => 'float',
        'valor_inss' => 'float',
        'valor_ir' => 'float',
        'valor_csll' => 'float',
        'valor_outras_retencoes' => 'float',
        'valor_iss' => 'float',
        'valor_iss_retido' => 'float',
        'valor_liquido' => 'float',
        'aliquota_iss' => 'float',
        'aliquota_pis' => 'float',
        'aliquota_cofins' => 'float',
        'aliquota_inss' => 'float',
        'aliquota_ir' => 'float',
        'aliquota_csll' => 'float',
        'desconto_incondicionado' => 'float',
        'desconto_condicionado' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'valor_unitario' => null,
        'valor_servicos' => null,
        'valor_deducoes' => null,
        'valor_pis' => null,
        'valor_cofins' => null,
        'valor_inss' => null,
        'valor_ir' => null,
        'valor_csll' => null,
        'valor_outras_retencoes' => null,
        'valor_iss' => null,
        'valor_iss_retido' => null,
        'valor_liquido' => null,
        'aliquota_iss' => null,
        'aliquota_pis' => null,
        'aliquota_cofins' => null,
        'aliquota_inss' => null,
        'aliquota_ir' => null,
        'aliquota_csll' => null,
        'desconto_incondicionado' => null,
        'desconto_condicionado' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'valor_unitario' => false,
        'valor_servicos' => false,
        'valor_deducoes' => false,
        'valor_pis' => false,
        'valor_cofins' => false,
        'valor_inss' => false,
        'valor_ir' => false,
        'valor_csll' => false,
        'valor_outras_retencoes' => false,
        'valor_iss' => false,
        'valor_iss_retido' => false,
        'valor_liquido' => false,
        'aliquota_iss' => false,
        'aliquota_pis' => false,
        'aliquota_cofins' => false,
        'aliquota_inss' => false,
        'aliquota_ir' => false,
        'aliquota_csll' => false,
        'desconto_incondicionado' => false,
        'desconto_condicionado' => false
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
        'valor_unitario' => 'valor_unitario',
        'valor_servicos' => 'valor_servicos',
        'valor_deducoes' => 'valor_deducoes',
        'valor_pis' => 'valor_pis',
        'valor_cofins' => 'valor_cofins',
        'valor_inss' => 'valor_inss',
        'valor_ir' => 'valor_ir',
        'valor_csll' => 'valor_csll',
        'valor_outras_retencoes' => 'valor_outras_retencoes',
        'valor_iss' => 'valor_iss',
        'valor_iss_retido' => 'valor_iss_retido',
        'valor_liquido' => 'valor_liquido',
        'aliquota_iss' => 'aliquota_iss',
        'aliquota_pis' => 'aliquota_pis',
        'aliquota_cofins' => 'aliquota_cofins',
        'aliquota_inss' => 'aliquota_inss',
        'aliquota_ir' => 'aliquota_ir',
        'aliquota_csll' => 'aliquota_csll',
        'desconto_incondicionado' => 'desconto_incondicionado',
        'desconto_condicionado' => 'desconto_condicionado'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'valor_unitario' => 'setValorUnitario',
        'valor_servicos' => 'setValorServicos',
        'valor_deducoes' => 'setValorDeducoes',
        'valor_pis' => 'setValorPis',
        'valor_cofins' => 'setValorCofins',
        'valor_inss' => 'setValorInss',
        'valor_ir' => 'setValorIr',
        'valor_csll' => 'setValorCsll',
        'valor_outras_retencoes' => 'setValorOutrasRetencoes',
        'valor_iss' => 'setValorIss',
        'valor_iss_retido' => 'setValorIssRetido',
        'valor_liquido' => 'setValorLiquido',
        'aliquota_iss' => 'setAliquotaIss',
        'aliquota_pis' => 'setAliquotaPis',
        'aliquota_cofins' => 'setAliquotaCofins',
        'aliquota_inss' => 'setAliquotaInss',
        'aliquota_ir' => 'setAliquotaIr',
        'aliquota_csll' => 'setAliquotaCsll',
        'desconto_incondicionado' => 'setDescontoIncondicionado',
        'desconto_condicionado' => 'setDescontoCondicionado'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'valor_unitario' => 'getValorUnitario',
        'valor_servicos' => 'getValorServicos',
        'valor_deducoes' => 'getValorDeducoes',
        'valor_pis' => 'getValorPis',
        'valor_cofins' => 'getValorCofins',
        'valor_inss' => 'getValorInss',
        'valor_ir' => 'getValorIr',
        'valor_csll' => 'getValorCsll',
        'valor_outras_retencoes' => 'getValorOutrasRetencoes',
        'valor_iss' => 'getValorIss',
        'valor_iss_retido' => 'getValorIssRetido',
        'valor_liquido' => 'getValorLiquido',
        'aliquota_iss' => 'getAliquotaIss',
        'aliquota_pis' => 'getAliquotaPis',
        'aliquota_cofins' => 'getAliquotaCofins',
        'aliquota_inss' => 'getAliquotaInss',
        'aliquota_ir' => 'getAliquotaIr',
        'aliquota_csll' => 'getAliquotaCsll',
        'desconto_incondicionado' => 'getDescontoIncondicionado',
        'desconto_condicionado' => 'getDescontoCondicionado'
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
        $this->setIfExists('valor_unitario', $data ?? [], null);
        $this->setIfExists('valor_servicos', $data ?? [], null);
        $this->setIfExists('valor_deducoes', $data ?? [], null);
        $this->setIfExists('valor_pis', $data ?? [], null);
        $this->setIfExists('valor_cofins', $data ?? [], null);
        $this->setIfExists('valor_inss', $data ?? [], null);
        $this->setIfExists('valor_ir', $data ?? [], null);
        $this->setIfExists('valor_csll', $data ?? [], null);
        $this->setIfExists('valor_outras_retencoes', $data ?? [], null);
        $this->setIfExists('valor_iss', $data ?? [], null);
        $this->setIfExists('valor_iss_retido', $data ?? [], null);
        $this->setIfExists('valor_liquido', $data ?? [], null);
        $this->setIfExists('aliquota_iss', $data ?? [], null);
        $this->setIfExists('aliquota_pis', $data ?? [], null);
        $this->setIfExists('aliquota_cofins', $data ?? [], null);
        $this->setIfExists('aliquota_inss', $data ?? [], null);
        $this->setIfExists('aliquota_ir', $data ?? [], null);
        $this->setIfExists('aliquota_csll', $data ?? [], null);
        $this->setIfExists('desconto_incondicionado', $data ?? [], null);
        $this->setIfExists('desconto_condicionado', $data ?? [], null);
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

        if ($this->container['valor_unitario'] === null) {
            $invalidProperties[] = "'valor_unitario' can't be null";
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
     * Gets valor_unitario
     *
     * @return float
     */
    public function getValorUnitario()
    {
        return $this->container['valor_unitario'];
    }

    /**
     * Sets valor_unitario
     *
     * @param float $valor_unitario Valor unitário do serviço.
     *
     * @return self
     */
    public function setValorUnitario($valor_unitario)
    {
        if (is_null($valor_unitario)) {
            throw new \InvalidArgumentException('non-nullable valor_unitario cannot be null');
        }
        $this->container['valor_unitario'] = $valor_unitario;

        return $this;
    }

    /**
     * Gets valor_servicos
     *
     * @return float|null
     */
    public function getValorServicos()
    {
        return $this->container['valor_servicos'];
    }

    /**
     * Sets valor_servicos
     *
     * @param float|null $valor_servicos Valor total do serviço.
     *
     * @return self
     */
    public function setValorServicos($valor_servicos)
    {
        if (is_null($valor_servicos)) {
            throw new \InvalidArgumentException('non-nullable valor_servicos cannot be null');
        }
        $this->container['valor_servicos'] = $valor_servicos;

        return $this;
    }

    /**
     * Gets valor_deducoes
     *
     * @return float|null
     */
    public function getValorDeducoes()
    {
        return $this->container['valor_deducoes'];
    }

    /**
     * Sets valor_deducoes
     *
     * @param float|null $valor_deducoes valor_deducoes
     *
     * @return self
     */
    public function setValorDeducoes($valor_deducoes)
    {
        if (is_null($valor_deducoes)) {
            throw new \InvalidArgumentException('non-nullable valor_deducoes cannot be null');
        }
        $this->container['valor_deducoes'] = $valor_deducoes;

        return $this;
    }

    /**
     * Gets valor_pis
     *
     * @return float|null
     */
    public function getValorPis()
    {
        return $this->container['valor_pis'];
    }

    /**
     * Sets valor_pis
     *
     * @param float|null $valor_pis valor_pis
     *
     * @return self
     */
    public function setValorPis($valor_pis)
    {
        if (is_null($valor_pis)) {
            throw new \InvalidArgumentException('non-nullable valor_pis cannot be null');
        }
        $this->container['valor_pis'] = $valor_pis;

        return $this;
    }

    /**
     * Gets valor_cofins
     *
     * @return float|null
     */
    public function getValorCofins()
    {
        return $this->container['valor_cofins'];
    }

    /**
     * Sets valor_cofins
     *
     * @param float|null $valor_cofins valor_cofins
     *
     * @return self
     */
    public function setValorCofins($valor_cofins)
    {
        if (is_null($valor_cofins)) {
            throw new \InvalidArgumentException('non-nullable valor_cofins cannot be null');
        }
        $this->container['valor_cofins'] = $valor_cofins;

        return $this;
    }

    /**
     * Gets valor_inss
     *
     * @return float|null
     */
    public function getValorInss()
    {
        return $this->container['valor_inss'];
    }

    /**
     * Sets valor_inss
     *
     * @param float|null $valor_inss valor_inss
     *
     * @return self
     */
    public function setValorInss($valor_inss)
    {
        if (is_null($valor_inss)) {
            throw new \InvalidArgumentException('non-nullable valor_inss cannot be null');
        }
        $this->container['valor_inss'] = $valor_inss;

        return $this;
    }

    /**
     * Gets valor_ir
     *
     * @return float|null
     */
    public function getValorIr()
    {
        return $this->container['valor_ir'];
    }

    /**
     * Sets valor_ir
     *
     * @param float|null $valor_ir valor_ir
     *
     * @return self
     */
    public function setValorIr($valor_ir)
    {
        if (is_null($valor_ir)) {
            throw new \InvalidArgumentException('non-nullable valor_ir cannot be null');
        }
        $this->container['valor_ir'] = $valor_ir;

        return $this;
    }

    /**
     * Gets valor_csll
     *
     * @return float|null
     */
    public function getValorCsll()
    {
        return $this->container['valor_csll'];
    }

    /**
     * Sets valor_csll
     *
     * @param float|null $valor_csll valor_csll
     *
     * @return self
     */
    public function setValorCsll($valor_csll)
    {
        if (is_null($valor_csll)) {
            throw new \InvalidArgumentException('non-nullable valor_csll cannot be null');
        }
        $this->container['valor_csll'] = $valor_csll;

        return $this;
    }

    /**
     * Gets valor_outras_retencoes
     *
     * @return float|null
     */
    public function getValorOutrasRetencoes()
    {
        return $this->container['valor_outras_retencoes'];
    }

    /**
     * Sets valor_outras_retencoes
     *
     * @param float|null $valor_outras_retencoes valor_outras_retencoes
     *
     * @return self
     */
    public function setValorOutrasRetencoes($valor_outras_retencoes)
    {
        if (is_null($valor_outras_retencoes)) {
            throw new \InvalidArgumentException('non-nullable valor_outras_retencoes cannot be null');
        }
        $this->container['valor_outras_retencoes'] = $valor_outras_retencoes;

        return $this;
    }

    /**
     * Gets valor_iss
     *
     * @return float|null
     */
    public function getValorIss()
    {
        return $this->container['valor_iss'];
    }

    /**
     * Sets valor_iss
     *
     * @param float|null $valor_iss valor_iss
     *
     * @return self
     */
    public function setValorIss($valor_iss)
    {
        if (is_null($valor_iss)) {
            throw new \InvalidArgumentException('non-nullable valor_iss cannot be null');
        }
        $this->container['valor_iss'] = $valor_iss;

        return $this;
    }

    /**
     * Gets valor_iss_retido
     *
     * @return float|null
     */
    public function getValorIssRetido()
    {
        return $this->container['valor_iss_retido'];
    }

    /**
     * Sets valor_iss_retido
     *
     * @param float|null $valor_iss_retido valor_iss_retido
     *
     * @return self
     */
    public function setValorIssRetido($valor_iss_retido)
    {
        if (is_null($valor_iss_retido)) {
            throw new \InvalidArgumentException('non-nullable valor_iss_retido cannot be null');
        }
        $this->container['valor_iss_retido'] = $valor_iss_retido;

        return $this;
    }

    /**
     * Gets valor_liquido
     *
     * @return float|null
     */
    public function getValorLiquido()
    {
        return $this->container['valor_liquido'];
    }

    /**
     * Sets valor_liquido
     *
     * @param float|null $valor_liquido valor_liquido
     *
     * @return self
     */
    public function setValorLiquido($valor_liquido)
    {
        if (is_null($valor_liquido)) {
            throw new \InvalidArgumentException('non-nullable valor_liquido cannot be null');
        }
        $this->container['valor_liquido'] = $valor_liquido;

        return $this;
    }

    /**
     * Gets aliquota_iss
     *
     * @return float|null
     */
    public function getAliquotaIss()
    {
        return $this->container['aliquota_iss'];
    }

    /**
     * Sets aliquota_iss
     *
     * @param float|null $aliquota_iss aliquota_iss
     *
     * @return self
     */
    public function setAliquotaIss($aliquota_iss)
    {
        if (is_null($aliquota_iss)) {
            throw new \InvalidArgumentException('non-nullable aliquota_iss cannot be null');
        }
        $this->container['aliquota_iss'] = $aliquota_iss;

        return $this;
    }

    /**
     * Gets aliquota_pis
     *
     * @return float|null
     */
    public function getAliquotaPis()
    {
        return $this->container['aliquota_pis'];
    }

    /**
     * Sets aliquota_pis
     *
     * @param float|null $aliquota_pis aliquota_pis
     *
     * @return self
     */
    public function setAliquotaPis($aliquota_pis)
    {
        if (is_null($aliquota_pis)) {
            throw new \InvalidArgumentException('non-nullable aliquota_pis cannot be null');
        }
        $this->container['aliquota_pis'] = $aliquota_pis;

        return $this;
    }

    /**
     * Gets aliquota_cofins
     *
     * @return float|null
     */
    public function getAliquotaCofins()
    {
        return $this->container['aliquota_cofins'];
    }

    /**
     * Sets aliquota_cofins
     *
     * @param float|null $aliquota_cofins aliquota_cofins
     *
     * @return self
     */
    public function setAliquotaCofins($aliquota_cofins)
    {
        if (is_null($aliquota_cofins)) {
            throw new \InvalidArgumentException('non-nullable aliquota_cofins cannot be null');
        }
        $this->container['aliquota_cofins'] = $aliquota_cofins;

        return $this;
    }

    /**
     * Gets aliquota_inss
     *
     * @return float|null
     */
    public function getAliquotaInss()
    {
        return $this->container['aliquota_inss'];
    }

    /**
     * Sets aliquota_inss
     *
     * @param float|null $aliquota_inss aliquota_inss
     *
     * @return self
     */
    public function setAliquotaInss($aliquota_inss)
    {
        if (is_null($aliquota_inss)) {
            throw new \InvalidArgumentException('non-nullable aliquota_inss cannot be null');
        }
        $this->container['aliquota_inss'] = $aliquota_inss;

        return $this;
    }

    /**
     * Gets aliquota_ir
     *
     * @return float|null
     */
    public function getAliquotaIr()
    {
        return $this->container['aliquota_ir'];
    }

    /**
     * Sets aliquota_ir
     *
     * @param float|null $aliquota_ir aliquota_ir
     *
     * @return self
     */
    public function setAliquotaIr($aliquota_ir)
    {
        if (is_null($aliquota_ir)) {
            throw new \InvalidArgumentException('non-nullable aliquota_ir cannot be null');
        }
        $this->container['aliquota_ir'] = $aliquota_ir;

        return $this;
    }

    /**
     * Gets aliquota_csll
     *
     * @return float|null
     */
    public function getAliquotaCsll()
    {
        return $this->container['aliquota_csll'];
    }

    /**
     * Sets aliquota_csll
     *
     * @param float|null $aliquota_csll aliquota_csll
     *
     * @return self
     */
    public function setAliquotaCsll($aliquota_csll)
    {
        if (is_null($aliquota_csll)) {
            throw new \InvalidArgumentException('non-nullable aliquota_csll cannot be null');
        }
        $this->container['aliquota_csll'] = $aliquota_csll;

        return $this;
    }

    /**
     * Gets desconto_incondicionado
     *
     * @return float|null
     */
    public function getDescontoIncondicionado()
    {
        return $this->container['desconto_incondicionado'];
    }

    /**
     * Sets desconto_incondicionado
     *
     * @param float|null $desconto_incondicionado desconto_incondicionado
     *
     * @return self
     */
    public function setDescontoIncondicionado($desconto_incondicionado)
    {
        if (is_null($desconto_incondicionado)) {
            throw new \InvalidArgumentException('non-nullable desconto_incondicionado cannot be null');
        }
        $this->container['desconto_incondicionado'] = $desconto_incondicionado;

        return $this;
    }

    /**
     * Gets desconto_condicionado
     *
     * @return float|null
     */
    public function getDescontoCondicionado()
    {
        return $this->container['desconto_condicionado'];
    }

    /**
     * Sets desconto_condicionado
     *
     * @param float|null $desconto_condicionado desconto_condicionado
     *
     * @return self
     */
    public function setDescontoCondicionado($desconto_condicionado)
    {
        if (is_null($desconto_condicionado)) {
            throw new \InvalidArgumentException('non-nullable desconto_condicionado cannot be null');
        }
        $this->container['desconto_condicionado'] = $desconto_condicionado;

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


