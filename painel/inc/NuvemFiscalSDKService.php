<?php
// painel/inc/NuvemFiscalSDKService.php

// Inclui o autoloader do Composer (ajuste o caminho se a pasta 'inc' não estiver dentro de 'painel')
require_once(__DIR__ . '/../vendor/autoload.php'); // Se 'painel' é a raiz, então ../vendor/autoload.php

use NFeio\SDK\NFeio; // Importa a classe principal do SDK

class NuvemFiscalSDKService {
    private $nfeio;

    public function __construct() {
        // As chaves já devem estar definidas via `api_config.php`
        if (!defined('NUVEM_FISCAL_API_KEY') || !defined('NUVEM_FISCAL_SECRET_KEY')) {
            throw new Exception("Credenciais da Nuvem Fiscal não definidas em api_config.php.");
        }

        $apiKey = NUVEM_FISCAL_API_KEY;
        $secretKey = NUVEM_FISCAL_SECRET_KEY;
        $ambiente = NUVEM_FISCAL_AMBIENTE; // 'sandbox' ou 'production'

        // Inicializa o cliente NFeio SDK
        $this->nfeio = new NFeio([
            'apiKey'    => $apiKey,
            'secretKey' => $secretKey,
            'debug'     => ($ambiente === 'sandbox'), // Ativa o debug no ambiente de sandbox
        ]);

        // A Nuvem Fiscal SDK geralmente tem um método para configurar o ambiente
        // Dependendo da versão do SDK, pode ser via construtor, ou um método setEnvironment.
        // Se a Nuvem Fiscal API tem ambientes diferentes por URL, você teria que configurar isso aqui.
        // NFe.io lida com o ambiente dentro do payload da NFe/NFSe.
    }

    /**
     * Envia uma requisição para emitir uma NF-e.
     * @param array $nfeData Os dados da NF-e no formato JSON esperado pela Nuvem Fiscal.
     * @return array Resultado da operação.
     */
    public function emitirNfe(array $nfeData) {
        try {
            // Adiciona o ambiente ao payload da NFe (importante para NFe.io)
            $nfeData['ambiente'] = $this->ambiente;
            $response = $this->nfeio->nfe()->create($nfeData);
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao emitir NFe via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    /**
     * Envia uma requisição para emitir uma NFC-e.
     * @param array $nfceData Os dados da NFC-e no formato JSON esperado pela Nuvem Fiscal.
     * @return array Resultado da operação.
     */
    public function emitirNfce(array $nfceData) {
        try {
            // Adiciona o ambiente ao payload da NFCe
            $nfceData['ambiente'] = $this->ambiente;
            // O SDK da NFe.io pode ter um método específico para NFC-e, como $this->nfeio->nfce()->create().
            // VERIFIQUE A DOCUMENTAÇÃO OFICIAL DA NFE.IO para o endpoint e método correto da NFC-e.
            $response = $this->nfeio->nfce()->create($nfceData); // Exemplo de uso do SDK para NFC-e
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao emitir NFCe via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    /**
     * Consulta o status de uma NF-e.
     * @param string $nfeId O ID da NF-e retornado pela Nuvem Fiscal na emissão.
     * @return array Resultado da operação.
     */
    public function consultarNfe(string $nfeId) {
        try {
            $response = $this->nfeio->nfe()->get($nfeId);
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao consultar NFe via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    /**
     * Consulta o status de uma NFC-e.
     * @param string $nfceId O ID da NFC-e retornado pela Nuvem Fiscal na emissão.
     * @return array Resultado da operação.
     */
    public function consultarNfce(string $nfceId) {
        try {
            $response = $this->nfeio->nfce()->get($nfceId); // Exemplo para NFC-e
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao consultar NFCe via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    /**
     * Cancela uma NF-e.
     * @param string $nfeId O ID da NF-e a ser cancelada.
     * @param string $justificativa A justificativa para o cancelamento (mínimo de 15 caracteres).
     * @return array Resultado da operação.
     */
    public function cancelarNfe(string $nfeId, string $justificativa) {
        try {
            $response = $this->nfeio->nfe()->cancel($nfeId, ['justificativa' => $justificativa]);
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao cancelar NFe via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    /**
     * Cancela uma NFC-e.
     * @param string $nfceId O ID da NFC-e a ser cancelada.
     * @param string $justificativa A justificativa para o cancelamento (mínimo de 15 caracteres).
     * @return array Resultado da operação.
     */
    public function cancelarNfce(string $nfceId, string $justificativa) {
        try {
            $response = $this->nfeio->nfce()->cancel($nfceId, ['justificativa' => $justificativa]); // Exemplo para NFC-e
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao cancelar NFCe via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    /**
     * Gera uma Carta de Correção para uma NF-e.
     * @param string $nfeId O ID da NF-e.
     * @param array $correcaoData Os dados da carta de correção (ex: textoCorrecao).
     * @return array Resultado da operação.
     */
    public function cartaCorrecao(string $nfeId, array $correcaoData) {
        try {
            $response = $this->nfeio->nfe()->correct($nfeId, $correcaoData); // Método de correção da NFe.io
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao emitir Carta de Correção via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    /**
     * Inutiliza uma faixa de numeração de NF-e.
     * @param array $inutilizacaoData Os dados para a inutilização.
     * @return array Resultado da operação.
     */
    public function inutilizarNumeros(array $inutilizacaoData) {
        try {
            $response = $this->nfeio->nfe()->inutilize($inutilizacaoData); // Método de inutilização da NFe.io
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao inutilizar números via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    /**
     * Obtém o DANFE (PDF) de uma NF-e.
     * @param string $nfeId O ID da NF-e.
     * @return array Resultado da operação (retorna a URL do DANFE).
     */
    public function getDanfeUrl(string $nfeId) {
        try {
            $response = $this->nfeio->nfe()->getDanfe($nfeId); // Método para DANFE da NFe.io
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao obter DANFE via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    /**
     * Obtém o DANFE (PDF) de uma NFC-e.
     * @param string $nfceId O ID da NFC-e.
     * @return array Resultado da operação (retorna a URL do DANFE).
     */
    public function getDanfeNfceUrl(string $nfceId) {
        try {
            $response = $this->nfeio->nfce()->getDanfe($nfceId); // Exemplo para DANFE da NFC-e
            return ['success' => true, 'data' => $response];
        } catch (\Exception $e) {
            error_log("Erro ao obter DANFE NFCe via SDK: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage(), 'details' => ['code' => $e->getCode()]];
        }
    }

    // Adicione outros métodos conforme a necessidade e a documentação da NFe.io (e.g., MDF-e, Webhooks)
}