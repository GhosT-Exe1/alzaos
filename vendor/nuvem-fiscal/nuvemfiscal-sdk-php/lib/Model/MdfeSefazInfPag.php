<?php
/**
 * MdfeSefazInfPag
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
 * MdfeSefazInfPag Class Doc Comment
 *
 * @category Class
 * @description Informações do Pagamento do Frete.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfPag implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfPag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'x_nome' => 'string',
        'cpf' => 'string',
        'cnpj' => 'string',
        'id_estrangeiro' => 'string',
        'comp' => '\NuvemFiscal\Model\MdfeSefazComp[]',
        'v_contrato' => 'float',
        'ind_alto_desemp' => 'int',
        'ind_pag' => 'int',
        'v_adiant' => 'float',
        'ind_antecipa_adiant' => 'int',
        'inf_prazo' => '\NuvemFiscal\Model\MdfeSefazInfPrazo[]',
        'tp_antecip' => 'int',
        'inf_banc' => '\NuvemFiscal\Model\MdfeSefazInfBanc'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'x_nome' => null,
        'cpf' => null,
        'cnpj' => null,
        'id_estrangeiro' => null,
        'comp' => null,
        'v_contrato' => null,
        'ind_alto_desemp' => null,
        'ind_pag' => null,
        'v_adiant' => null,
        'ind_antecipa_adiant' => null,
        'inf_prazo' => null,
        'tp_antecip' => null,
        'inf_banc' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'x_nome' => true,
        'cpf' => true,
        'cnpj' => true,
        'id_estrangeiro' => true,
        'comp' => false,
        'v_contrato' => true,
        'ind_alto_desemp' => true,
        'ind_pag' => true,
        'v_adiant' => true,
        'ind_antecipa_adiant' => true,
        'inf_prazo' => false,
        'tp_antecip' => true,
        'inf_banc' => false
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
        'x_nome' => 'xNome',
        'cpf' => 'CPF',
        'cnpj' => 'CNPJ',
        'id_estrangeiro' => 'idEstrangeiro',
        'comp' => 'Comp',
        'v_contrato' => 'vContrato',
        'ind_alto_desemp' => 'indAltoDesemp',
        'ind_pag' => 'indPag',
        'v_adiant' => 'vAdiant',
        'ind_antecipa_adiant' => 'indAntecipaAdiant',
        'inf_prazo' => 'infPrazo',
        'tp_antecip' => 'tpAntecip',
        'inf_banc' => 'infBanc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x_nome' => 'setXNome',
        'cpf' => 'setCpf',
        'cnpj' => 'setCnpj',
        'id_estrangeiro' => 'setIdEstrangeiro',
        'comp' => 'setComp',
        'v_contrato' => 'setVContrato',
        'ind_alto_desemp' => 'setIndAltoDesemp',
        'ind_pag' => 'setIndPag',
        'v_adiant' => 'setVAdiant',
        'ind_antecipa_adiant' => 'setIndAntecipaAdiant',
        'inf_prazo' => 'setInfPrazo',
        'tp_antecip' => 'setTpAntecip',
        'inf_banc' => 'setInfBanc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x_nome' => 'getXNome',
        'cpf' => 'getCpf',
        'cnpj' => 'getCnpj',
        'id_estrangeiro' => 'getIdEstrangeiro',
        'comp' => 'getComp',
        'v_contrato' => 'getVContrato',
        'ind_alto_desemp' => 'getIndAltoDesemp',
        'ind_pag' => 'getIndPag',
        'v_adiant' => 'getVAdiant',
        'ind_antecipa_adiant' => 'getIndAntecipaAdiant',
        'inf_prazo' => 'getInfPrazo',
        'tp_antecip' => 'getTpAntecip',
        'inf_banc' => 'getInfBanc'
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
        $this->setIfExists('x_nome', $data ?? [], null);
        $this->setIfExists('cpf', $data ?? [], null);
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('id_estrangeiro', $data ?? [], null);
        $this->setIfExists('comp', $data ?? [], null);
        $this->setIfExists('v_contrato', $data ?? [], null);
        $this->setIfExists('ind_alto_desemp', $data ?? [], null);
        $this->setIfExists('ind_pag', $data ?? [], null);
        $this->setIfExists('v_adiant', $data ?? [], null);
        $this->setIfExists('ind_antecipa_adiant', $data ?? [], null);
        $this->setIfExists('inf_prazo', $data ?? [], null);
        $this->setIfExists('tp_antecip', $data ?? [], null);
        $this->setIfExists('inf_banc', $data ?? [], null);
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

        if (!is_null($this->container['x_nome']) && (mb_strlen($this->container['x_nome']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['x_nome']) && (mb_strlen($this->container['x_nome']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['id_estrangeiro']) && (mb_strlen($this->container['id_estrangeiro']) > 20)) {
            $invalidProperties[] = "invalid value for 'id_estrangeiro', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['id_estrangeiro']) && (mb_strlen($this->container['id_estrangeiro']) < 2)) {
            $invalidProperties[] = "invalid value for 'id_estrangeiro', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['comp'] === null) {
            $invalidProperties[] = "'comp' can't be null";
        }
        if ((count($this->container['comp']) < 1)) {
            $invalidProperties[] = "invalid value for 'comp', number of items must be greater than or equal to 1.";
        }

        if ($this->container['v_contrato'] === null) {
            $invalidProperties[] = "'v_contrato' can't be null";
        }
        if (($this->container['v_contrato'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_contrato', must be bigger than or equal to 0.";
        }

        if ($this->container['ind_pag'] === null) {
            $invalidProperties[] = "'ind_pag' can't be null";
        }
        if (!is_null($this->container['v_adiant']) && ($this->container['v_adiant'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_adiant', must be bigger than or equal to 0.";
        }

        if ($this->container['inf_banc'] === null) {
            $invalidProperties[] = "'inf_banc' can't be null";
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
     * Gets x_nome
     *
     * @return string|null
     */
    public function getXNome()
    {
        return $this->container['x_nome'];
    }

    /**
     * Sets x_nome
     *
     * @param string|null $x_nome Razão social ou Nome do respnsável pelo pagamento.
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
            throw new \InvalidArgumentException('invalid length for $x_nome when calling MdfeSefazInfPag., must be smaller than or equal to 60.');
        }
        if (!is_null($x_nome) && (mb_strlen($x_nome) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_nome when calling MdfeSefazInfPag., must be bigger than or equal to 2.');
        }

        $this->container['x_nome'] = $x_nome;

        return $this;
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
     * @param string|null $cpf Número do CPF do responsável pelo pgto.  Informar os zeros não significativos.
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
     * @param string|null $cnpj Número do CNPJ do responsável pelo pgto.  Informar os zeros não significativos.
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
     * Gets id_estrangeiro
     *
     * @return string|null
     */
    public function getIdEstrangeiro()
    {
        return $this->container['id_estrangeiro'];
    }

    /**
     * Sets id_estrangeiro
     *
     * @param string|null $id_estrangeiro Identificador do responsável pelo pgto em caso de ser estrangeiro.
     *
     * @return self
     */
    public function setIdEstrangeiro($id_estrangeiro)
    {
        if (is_null($id_estrangeiro)) {
            array_push($this->openAPINullablesSetToNull, 'id_estrangeiro');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_estrangeiro', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($id_estrangeiro) && (mb_strlen($id_estrangeiro) > 20)) {
            throw new \InvalidArgumentException('invalid length for $id_estrangeiro when calling MdfeSefazInfPag., must be smaller than or equal to 20.');
        }
        if (!is_null($id_estrangeiro) && (mb_strlen($id_estrangeiro) < 2)) {
            throw new \InvalidArgumentException('invalid length for $id_estrangeiro when calling MdfeSefazInfPag., must be bigger than or equal to 2.');
        }

        $this->container['id_estrangeiro'] = $id_estrangeiro;

        return $this;
    }

    /**
     * Gets comp
     *
     * @return \NuvemFiscal\Model\MdfeSefazComp[]
     */
    public function getComp()
    {
        return $this->container['comp'];
    }

    /**
     * Sets comp
     *
     * @param \NuvemFiscal\Model\MdfeSefazComp[] $comp comp
     *
     * @return self
     */
    public function setComp($comp)
    {
        if (is_null($comp)) {
            throw new \InvalidArgumentException('non-nullable comp cannot be null');
        }


        if ((count($comp) < 1)) {
            throw new \InvalidArgumentException('invalid length for $comp when calling MdfeSefazInfPag., number of items must be greater than or equal to 1.');
        }
        $this->container['comp'] = $comp;

        return $this;
    }

    /**
     * Gets v_contrato
     *
     * @return float
     */
    public function getVContrato()
    {
        return $this->container['v_contrato'];
    }

    /**
     * Sets v_contrato
     *
     * @param float $v_contrato Valor Total do Contrato.
     *
     * @return self
     */
    public function setVContrato($v_contrato)
    {
        if (is_null($v_contrato)) {
            array_push($this->openAPINullablesSetToNull, 'v_contrato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_contrato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_contrato) && ($v_contrato < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_contrato when calling MdfeSefazInfPag., must be bigger than or equal to 0.');
        }

        $this->container['v_contrato'] = $v_contrato;

        return $this;
    }

    /**
     * Gets ind_alto_desemp
     *
     * @return int|null
     */
    public function getIndAltoDesemp()
    {
        return $this->container['ind_alto_desemp'];
    }

    /**
     * Sets ind_alto_desemp
     *
     * @param int|null $ind_alto_desemp Indicador de operação de transporte de alto desempenho.  Operação de transporte com utilização de veículos de frotas dedicadas ou fidelizadas.  Preencher com “1” para indicar operação de transporte de alto desempenho, demais casos não informar a tag.
     *
     * @return self
     */
    public function setIndAltoDesemp($ind_alto_desemp)
    {
        if (is_null($ind_alto_desemp)) {
            array_push($this->openAPINullablesSetToNull, 'ind_alto_desemp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_alto_desemp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_alto_desemp'] = $ind_alto_desemp;

        return $this;
    }

    /**
     * Gets ind_pag
     *
     * @return int
     */
    public function getIndPag()
    {
        return $this->container['ind_pag'];
    }

    /**
     * Sets ind_pag
     *
     * @param int $ind_pag Indicador da Forma de Pagamento:0-Pagamento à Vista  * 1 - Pagamento à Prazo
     *
     * @return self
     */
    public function setIndPag($ind_pag)
    {
        if (is_null($ind_pag)) {
            array_push($this->openAPINullablesSetToNull, 'ind_pag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_pag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_pag'] = $ind_pag;

        return $this;
    }

    /**
     * Gets v_adiant
     *
     * @return float|null
     */
    public function getVAdiant()
    {
        return $this->container['v_adiant'];
    }

    /**
     * Sets v_adiant
     *
     * @param float|null $v_adiant Valor do Adiantamento (usar apenas em pagamento à Prazo.
     *
     * @return self
     */
    public function setVAdiant($v_adiant)
    {
        if (is_null($v_adiant)) {
            array_push($this->openAPINullablesSetToNull, 'v_adiant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_adiant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_adiant) && ($v_adiant < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_adiant when calling MdfeSefazInfPag., must be bigger than or equal to 0.');
        }

        $this->container['v_adiant'] = $v_adiant;

        return $this;
    }

    /**
     * Gets ind_antecipa_adiant
     *
     * @return int|null
     */
    public function getIndAntecipaAdiant()
    {
        return $this->container['ind_antecipa_adiant'];
    }

    /**
     * Sets ind_antecipa_adiant
     *
     * @param int|null $ind_antecipa_adiant Indicador para declarar concordância em antecipar o adiantamento.  Informar a tag somente se for autorizado antecipar o adiantamento.
     *
     * @return self
     */
    public function setIndAntecipaAdiant($ind_antecipa_adiant)
    {
        if (is_null($ind_antecipa_adiant)) {
            array_push($this->openAPINullablesSetToNull, 'ind_antecipa_adiant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_antecipa_adiant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_antecipa_adiant'] = $ind_antecipa_adiant;

        return $this;
    }

    /**
     * Gets inf_prazo
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfPrazo[]|null
     */
    public function getInfPrazo()
    {
        return $this->container['inf_prazo'];
    }

    /**
     * Sets inf_prazo
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfPrazo[]|null $inf_prazo inf_prazo
     *
     * @return self
     */
    public function setInfPrazo($inf_prazo)
    {
        if (is_null($inf_prazo)) {
            throw new \InvalidArgumentException('non-nullable inf_prazo cannot be null');
        }
        $this->container['inf_prazo'] = $inf_prazo;

        return $this;
    }

    /**
     * Gets tp_antecip
     *
     * @return int|null
     */
    public function getTpAntecip()
    {
        return $this->container['tp_antecip'];
    }

    /**
     * Sets tp_antecip
     *
     * @param int|null $tp_antecip Tipo de Permissão em relação a antecipação das parcelas.  * 0 - Não permite antecipar  * 1 - Permite antecipar as parcelas  * 2 - Permite antecipar as parcelas mediante confirmação
     *
     * @return self
     */
    public function setTpAntecip($tp_antecip)
    {
        if (is_null($tp_antecip)) {
            array_push($this->openAPINullablesSetToNull, 'tp_antecip');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_antecip', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_antecip'] = $tp_antecip;

        return $this;
    }

    /**
     * Gets inf_banc
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfBanc
     */
    public function getInfBanc()
    {
        return $this->container['inf_banc'];
    }

    /**
     * Sets inf_banc
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfBanc $inf_banc inf_banc
     *
     * @return self
     */
    public function setInfBanc($inf_banc)
    {
        if (is_null($inf_banc)) {
            throw new \InvalidArgumentException('non-nullable inf_banc cannot be null');
        }
        $this->container['inf_banc'] = $inf_banc;

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


