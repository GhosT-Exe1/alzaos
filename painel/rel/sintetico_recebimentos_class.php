<?php 
@session_start();
$mostrar_registros = @$_SESSION['registros'];
$id_usuario = @$_SESSION['id'];
$id_empresa = @$_SESSION['empresa'];

require_once("../../conexao.php");

$filtro_data = $_POST['filtro_data'];
$dataInicial = $_POST['dataInicial'];
$dataFinal = $_POST['dataFinal'];
$filtro_tipo = "receber";
$filtro_lancamento = urlencode($_POST['filtro_lancamento']);
$filtro_pendentes = $_POST['filtro_pendentes'];


include('../buscar_config.php');
$token_rel = "M543661";
ob_start();
include("sintetico_recebimentos.php");
$html = ob_get_clean();

//CARREGAR DOMPDF
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

header("Content-Transfer-Encoding: binary");
header("Content-Type: image/png");

//INICIALIZAR A CLASSE DO DOMPDF
$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$pdf = new DOMPDF($options);


//Definir o tamanho do papel e orientação da página
$pdf->set_paper('A4', 'portrait');

//CARREGAR O CONTEÚDO HTML
$pdf->load_html($html);

//RENDERIZAR O PDF
$pdf->render();
//NOMEAR O PDF GERADO


$pdf->stream(
	'sintetico_rec.pdf',
	array("Attachment" => false)
);

 ?>