<?php
require_once('../conexao.php');

class NuvemFiscal {
    private $api_key;
    private $base_url = 'https://api.nuvemfiscal.com.br/v1';
    
    public function __construct($api_key) {
        $this->api_key = $api_key;
    }
    
    private function makeRequest($endpoint, $method = 'GET', $data = null) {
        $curl = curl_init();
        
        $headers = [
            'Authorization: Bearer ' . $this->api_key,
            'Content-Type: application/json'
        ];
        
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->base_url . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => $headers,
        ]);
        
        if ($data) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            throw new Exception("Erro na requisição: " . $err);
        }
        
        return json_decode($response, true);
    }
    
    public function criarEmpresa($dados) {
        $endpoint = '/empresa';
        return $this->makeRequest($endpoint, 'POST', $dados);
    }
    
    public function atualizarEmpresa($id, $dados) {
        $endpoint = '/empresa/' . $id;
        return $this->makeRequest($endpoint, 'PUT', $dados);
    }
    
    public function buscarEmpresa($id) {
        $endpoint = '/empresa/' . $id;
        return $this->makeRequest($endpoint);
    }
    
    public function emitirNotaFiscal($dados) {
        $endpoint = '/nfe';
        return $this->makeRequest($endpoint, 'POST', $dados);
    }
}
?> 